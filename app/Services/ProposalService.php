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
        $toOrganisation = Organization::where('id',$request->organization_id)->first();
        $toUser = $toOrganisation->owner_id;

        $currentUser = Auth::user();
        $currentUserOrganiaztion = $currentUser->organizations->first();

        $stage = $OptionService->get_option_by_code('new');
        $status = $OptionService->get_option_by_code('submitted');

        $expiry = date("Y/m/d");

        //dd($stage);
        //$message = false;

        $proposal = Proposal::create([
            'title' => $request->name,
            'description' => 'Description',
            'demurrage' =>  $request->demurrage,
            'body' =>  $request->description,
            'organization_id' =>  $toOrganisation,
            'user_id' =>  $toUser,
            'to_organization_id' =>  $currentUserOrganiaztion,
            'to_user_id' => $currentUser,
            'stage_id' => $stage,
            'status_id' => $status,
            'expiry_date' => $expiry
        ]);

        $this->sendProposal($proposal,$toUser);

        //Create user if not exists
        /*
        if(!$user){
            $user = User::create([
                'name' => $request->name,
                'email' =>$request->email,
                'password' => '$2y$10$92IXUNpsssxkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10)
            ]);
        }
 
        $organization = Organization::where('owner_id', '=', $user->id)->first();
        if($organization) {
            $message = ['type'=>'error', 'content'=>'A company exists with the given email address'];
        } else {
            $organization = Organization::create([
                'name' => $request->name,
                'owner_id' => $user->id
            ]);
            $message = ['type'=>'success', 'content'=>'Company is added Successfully, an email will be send to the address.'];
        }
        */

        //return ['message'=>$message,'organization'=>$organization];
       
 
        //return $user;
    }

   
}