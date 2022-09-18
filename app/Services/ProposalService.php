<?php
namespace App\Services;
 
use App\Helpers\Media;
use App\Models\Proposal;
use App\Models\User;
use App\Models\Organization;
use Illuminate\Support\Facades\Auth;
use App\Jobs\NewProposalsNotifyAdminsJob;
use App\Http\Requests\StoreProposalRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Str;

 
class ProposalService
{
    use Media;

    public function all(): Collection
    {
        return Proposal::all();
    }

    public function sendProposal($proposal,$user)
    {
        NewProposalsNotifyAdminsJob::dispatch($proposal);

        $toUser = User::where('id',$user)->first();
        $email = $toUser->email;

        Mail::send('email.proposal', $proposal, function($message) use ($email) {
            $message->to($email)->subject
                ('Activate Account');
            $message->from('user@site.com','After I Go');
        });
    }

    // Todo refactor with dependency injection.
    public function createProposal(StoreProposalRequest $request, $OptionService)
    {
        // Create user
        $to_organization = Organization::where('id',$request->organization_id)->first();
        $to_user_id = $to_organization->owner_id;

        $current_user = Auth::user();
        $organization_id = $current_user->organizations->first()->id;

        $stage_id = $OptionService->get_option_by_code('submitted')->id;
        $status_id = $OptionService->get_option_by_code('new')->id;

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
        $proposal->status_id  =   $status_id;
        $proposal->expiry_date  =   $expiry;

        $proposal->save();

        //dd($proposal);

        $message = ['type'=>'success', 'content'=>'Deal created successfully, an email will be send to the address.'];

        return ['message'=>$message];

        //$this->sendProposal($proposal,$to_user_id);

    }

   
}