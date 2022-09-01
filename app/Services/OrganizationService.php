<?php
namespace App\Services;
 
use App\Models\Organization;
use App\Models\User;
use App\Models\Gravatar;
use Illuminate\Http\Request;
use App\Models\Option;
use App\Helpers\Helper; 
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests\StoreOrganizationRequest;

 
class OrganizationService
{
    public function all(): Collection
    {
        return Organization::all();
    }

    // Todo refactor with dependency injection.
    public function createOrganization(StoreOrganizationRequest $request): Array
    {
        // Create user
        $user = User::where('email',$request->email)->first();
        $message = false;
        
        //Create user if not exists
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

        return ['message'=>$message,'organization'=>$organization];
       
 
        //return $user;
    }

    public function storekycOrganization($uuid,$request)
    {
        $countries       =  (object) Helper::cList();   
        $organization = Organization::where(['uuid'=>$uuid])->firstOrFail();
        $organization->name = $request->name;
        $organization->company_name = $request->company_name;
        $organization->address = $request->address;
        $organization->trading_address = $request->trading_address;
        $organization->company_number = $request->company_number;
        $organization->authority_of_registration_number = $request->authority_of_registration_number;
        $organization->country_of_incorporation= $request->country_of_incorporation;

        $submitted_status = Option::where('name','submitted')->first();
        $organization->status_id = $submitted_status->id;

        // $trade_license_file = new File;
        // if($request->file()) {
        //     $fileName = time().'_'.$request->file->getClientOriginalName();
        //     $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
        //     $trade_license_file->name = time().'_'.$request->file->getClientOriginalName();
        //     $trade_license_file->file_path = '/storage/' . $filePath;
        //     $trade_license_file->user_id = $organization->owner_id;
        //     $trade_license_file->save();
        // }

        $file = $request->file('company_logo');
            $fileData = $this->uploads($file,'user/avatar/');
            //dd($fileData);
            $media = Gravatar::create([
                       'media_name' => $fileData['fileName'],
                       'media_type' => $fileData['fileType'],
                       'media_path' => $fileData['filePath'],
                       'media_size' => $fileData['fileSize']
                    ]);
                        
            //$mid = $media->id;

        $organization->gravatar = $media->id;    

        $organization->save();

        $message = ['type'=>'success', 'content'=>'Details are submitted successfully.'];
        return ['message'=>$message];
    }
}