<?php
namespace App\Services;
 
use App\Helpers\Media;
use App\Models\Proposal;
use App\Models\User;
use App\Models\Organization;
use App\Models\ProposalStatus;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Services\ImageService;
use App\Jobs\NewProposalsNotifyAdminsJob;
use App\Http\Requests\StoreProposalRequest;
use App\Http\Requests\UpdateProposalRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Str;

 
class ProposalService
{
    use Media;
    private $proposal=false;

    public function all(): Collection
    {
        return Proposal::all();
    }

    public function sendProposal($proposal,$user)
    {
        //NewProposalsNotifyAdminsJob::dispatch($proposal);

        $toUser = User::where('id',$user)->first();
        $email = $toUser->email;
        $toUserName = $toUser->name;

        $organization = Organization::where('id',$proposal->organization_id)->first();
        $company = $organization->name;

        $url=URL('proposal-public')."/".$proposal->uuid;

        $datas = array(
            'title'    => $proposal->title,
            'description'    => $proposal->description,
            'url'    => $url,
            'user'    => $toUserName,
            'company'    => $company,
        );
        //dd($email);
        $emails = [$email];
        //Mail::to($email)->send(new EmailDemo($mailData));

        
        Mail::send('email.proposal', $datas, function($message) use ($emails) {
            $message->to($emails)->subject
                ('New Deal Request');
            $message->from('user@quadrock.com','Quadrock');
        });
        
    }

    public function sendRevisedProposal($proposal,$user)
    {
        //NewProposalsNotifyAdminsJob::dispatch($proposal);

        $toUser = User::where('id',$user)->first();
        $email = $toUser->email;
        $toUserName = $toUser->name;

        $organization = Organization::where('id',$proposal->organization_id)->first();
        $company = $organization->name;

        $url=URL('proposal-public')."/".$proposal->uuid;

        $datas = array(
            'title'    => $proposal->title,
            'description'    => $proposal->description,
            'url'    => $url,
            'user'    => $toUserName,
            'company'    => $company,
        );
        //dd($email);
        $emails = [$email];
        //Mail::to($email)->send(new EmailDemo($mailData));

        
        Mail::send('email.revised', $datas, function($message) use ($emails) {
            $message->to($emails)->subject
                ('New Deal Request');
            $message->from('user@quadrock.com','Quadrock');
        });
        
    }

    // Todo refactor with dependency injection.
    public function createProposal(StoreProposalRequest $request, $OptionService, $ImageService)
    {
        $request->validate([
            'deals_image.*' => 'mimetypes:jpg,png'
        ]);

        // Create user
        $to_organization = Organization::where('id',$request->organization_id)->first();
        $to_user_id = $to_organization->owner_id;

        $current_user = Auth::user();
        $organization_id = $current_user->organizations->first()->id;

        $stage_id = $OptionService->get_option_by_code('submitted')->id;
        $status = $OptionService->get_option_by_code('new');

        $expiry = Carbon::now();
        $expiry = $expiry->add(30, 'day');

        $uuid = (string) Str::uuid();

        
        
        //dd($uuid);

        $proposal = new Proposal;
        $proposal->uuid =   $uuid;
        $proposal->title    =   $request->title;
        $proposal->description  =   'Description';
        $proposal->demurrage  =   $request->demurrage;
        $proposal->body = $request->description;
        $proposal->organization_id =    $organization_id;
        $proposal->user_id  =   $current_user->id;
        $proposal->to_organization_id  =   $to_organization->id;
        $proposal->to_user_id  =   $to_user_id;
        $proposal->category_id = $request->category_id;
        $proposal->stage_id  =   $stage_id;
        $proposal->status_id  =   $status->id;
        $proposal->expiry_date  =   $expiry;

        if($request->file('deals_image'))
        {
            $image = $ImageService->dealsImageUpload($request->file('deals_image'));
            $proposal->deals_image_id = $image;
        }

        $proposal->save();

        $this->proposal = $proposal;

        $this->addStatusLog($status,$current_user);

        $this->sendProposal($proposal,$to_user_id);

        //dd($proposal);

        $message = ['type'=>'success', 'content'=>'Deal created successfully, an email will be send to the address.'];

        return ['message'=>$message];

        

    }


    public function updateProposal(UpdateProposalRequest $request, $deal, $OptionService)
    {

        
        // Create user
        $to_organization = Organization::where('id',$request->organization_id)->first();
        $to_user_id = $to_organization->owner_id;

        $current_user = Auth::user();
        $organization_id = $current_user->organizations->first()->id;

        $stage_id = $OptionService->get_option_by_code('submitted')->id;
        $status = $OptionService->get_option_by_code('resubmitted');

        //dd($status);

        $expiry = Carbon::now();
        $expiry = $expiry->add(30, 'day');

        //dd($deal);
        
        $proposal = Proposal::find($deal->id);
        $proposal->uuid =   $request->uuid;
        $proposal->title    =   $request->title;
        $proposal->description  =   'Description';
        $proposal->demurrage  =   $request->demurrage;
        $proposal->body = $request->description;
        $proposal->organization_id =    $organization_id;
        $proposal->user_id  =   $current_user->id;
        $proposal->to_organization_id  =   $to_organization->id;
        $proposal->to_user_id  =   $to_user_id;
        $proposal->category_id = $request->category_id;
        $proposal->stage_id  =   $stage_id;
        $proposal->status_id  =   $status->id;
        $proposal->expiry_date  =   $expiry;

        $proposal->save();

        $this->proposal = $proposal;

        $this->addStatusLog($status,$current_user);

        $this->sendRevisedProposal($proposal,$to_user_id);

        //dd($proposal);

        $message = ['type'=>'success', 'content'=>'Deal created successfully, an email will be send to the address.'];

        return ['message'=>$message];

        

    }

    public function proposalAction(Request $request, $optionService)
    {
        //Update proposal status id (Accept or reject) in proposal table
        //Add comments
        //Insert into proposal status log
        //Trigger emails

        //$proposal_statuses = $optionService->get_options_by_group('proposal_statuses');

        $this->proposal = Proposal::where(['uuid'=>$request->uuid])->first();

        
        $proposal_status = $optionService->get_option_by_code($request->btn_action);

        //dd($proposal_status);

        //to do verify given status
        if($this->proposal && $proposal_status)
        {
           $this->updateStatus($proposal_status, $this->proposal->toUser);
           $this->addComment($request, $this->proposal->toUser);
        }

        //return response()->json($response);
    }

    public function updateStatus($status,$user)
    {
        $this->proposal->status_id = $status->id;
        $this->proposal->save();
        $this->addStatusLog($status,$user);
    }

    public function addStatusLog($status,$user)
    {
        $proposal_status = new ProposalStatus();
        $proposal_status->proposal_id = $this->proposal->id;
        $proposal_status->option_id = $status->id;
        $proposal_status->user_id = $user->id;
        $proposal_status->save();
    }

    public function addComment($request,$user)
    {
        $commentData = Comment::insert([
            'proposal_id' => $this->proposal->id,
            'content' => $request->comment,
            'user_id' => $user->id
        ]);
    }

   
}