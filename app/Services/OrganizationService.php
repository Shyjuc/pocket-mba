<?php
namespace App\Services;
 
use App\Models\Organization;
use App\Models\User;
use App\Models\Gravatar;
use App\Models\File;
use Illuminate\Http\Request;
use App\Models\Option;
use App\Helpers\Helper; 
use App\Helpers\Media;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests\StoreOrganizationRequest;
use App\Services\FileService;
use App\Services\ImageService;

 
class OrganizationService
{
    use Media;

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

        $organization->users()->save($user);

        return ['message'=>$message,'organization'=>$organization];
       
 
        //return $user;
    }

    public function storekycOrganization($uuid, Request $request, $ImageService, $FileService)
    {
        $request->validate([
            'trade_license.*' => 'mimetypes:pdf,jpg,png',
            'vat_certificate.*' => 'mimetypes:pdf,jpg,png',
            'header_image.*' => 'mimetypes:jpg,png'
        ]);

        $countries       =  (object) Helper::cList();   
        $companies = Organization::where(['uuid'=>$uuid])->firstOrFail();
        $companies->name = $request->name;
        $companies->company_name = $request->company_name;
        $companies->address = $request->address;
        $companies->trading_address = $request->trading_address;
        $companies->company_number = $request->company_number;
        $companies->authority_of_registration_number = $request->authority_of_registration_number;
        
        $companies->bank_name= $request->bank_name;
        $companies->bank_account_number= $request->bank_account_number;
        $companies->bank_address= $request->bank_address;
        $companies->bank_swift_code= $request->bank_swift_code;
        $companies->nature_of_the_business_id= $request->nature_of_business;
        
        $companies->country_of_incorporation= $request->country_of_incorporation;

        $submitted_status = Option::where('name','submitted')->first();
        $companies->status_id = $submitted_status->id;

        //Services to upload files
        if($request->file('company_logo'))
        {
            $image = $ImageService->imagefileUpload($request->file('company_logo'));
            $companies->image_id = $image;
        }
        
        if($request->file('trade_license'))
        {
            $trade = $FileService->tradefileUpload($request->file('trade_license'),$companies->owner_id);
            $companies->trade_license_file_id = $trade;

        }
        
        if($request->file('vat_certificate'))
        {
            $vat = $FileService->vatfileUpload($request->file('vat_certificate'),$companies->owner_id);
            $companies->vat_certificate_file_id = $vat;
        }

        if($request->file('header_image'))
        {
            /*
            $validate = $FileService->validateFileFormat($request->file('header_image'));
            if($validate){
            $head = $FileService->headerImageUpload($request->file('header_image'),$companies->owner_id);
            $companies->header_image_id = $head;
            }
            */

            $image = $ImageService->headerImageUpload($request->file('header_image'));
            $companies->header_image_id = $image;
        }

        $companies->save();

        $message = ['type'=>'success', 'content'=>'Details are submitted successfully.'];
        return ['message'=>$message];
    }

    function csvToArray($filename = '', $delimiter = ',')
    {

        //dd($filename);

        if (!file_exists($filename) || !is_readable($filename))
        {
            return false;
        }
            

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        return $data;
    }

    public function storecsvOrganization(Request $request, $FileService)
    {
        $request->validate([
            'csv_file.*' => 'mimetypes:csv'
        ]);

        $current_user = Auth::user();

        //dd($csvfile);

        if($request->file('csv_file'))
        {
            $csvfile = $FileService->csvfileUpload($request->file('csv_file'),$current_user->id);
            //$companies->trade_license_file_id = $trade;
        }

        //$file = public_path('files/license/'.$csvfile); 

    
        $customerArr = $this->csvToArray($csvfile);

        
        
        for ($i = 0; $i < count($customerArr); $i ++)
        {
            $name = $customerArr[$i]['Name'];
            $email = $customerArr[$i]['Email'];

            $user = User::where('email',$email)->first();
            $message = false;
        
        //Create user if not exists
        if(!$user){
            $user = User::create([
                'name' => $name,
                'email' =>$email,
                'password' => '$2y$10$92IXUNpsssxkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10)
            ]);
        }
 
        $organization = Organization::where('owner_id', '=', $user->id)->first();
        if($organization) {
            $message = ['type'=>'error', 'content'=>'A company exists with the given email address'];
        } else {
            $organization = Organization::create([
                'name' => $name,
                'owner_id' => $user->id
            ]);
            $message = ['type'=>'success', 'content'=>'Company is added Successfully, an email will be send to the address.'];
        }

        $organization->users()->save($user);

        
        }
        
        return ['message'=>$message];
    }
}