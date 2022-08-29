<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\User;
use App\Models\Option;
use App\Helpers\Helper; 
use Illuminate\Support\Str;
use App\Models\Organization;
use Illuminate\Http\Request;
use App\Http\Resources\OrganizationResource;
use App\Http\Requests\StoreOrganizationRequest;
use App\Http\Requests\UpdateOrganizationRequest;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $organizations = OrganizationResource::collection(Organization::with('owner')->get());
        return view('organization.index', ['organizations'=>$organizations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('organization.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrganizationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrganizationRequest $request)
    {
        // Todo move the code to repository
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

        //Create organization if not exists
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
        return view('organization.create')->with(compact('organization','message'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {
        //
         dd($organization);
    }


    /**
     * KYC the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function kyc($uuid)
    {
       
       // $goption    =  Optiongroup::where('name','shareholders_type')->first()->option; 
       // $company_s  =  Optiongroup::where('name','company_status')->first()->option; 
       // $nature_b   =  Optiongroup::where('name','nature_of_the_business')->first()->option; 
       // $company_status =[];
       // foreach($company_s as $key){
       //       $company_status[$key->id]=$key->label;
       // }

        // $nature_business =[];
        // foreach($nature_b as $key){
        //       $nature_business[$key->id]=$key->label;
        // }
         
        $countries       =  (object) Helper::cList();   
        $organization = Organization::where('uuid',$uuid)->with(['status'])->firstOrFail();
        
        return view('organization.kyc')->with(compact('organization','countries'));
   
     }


     /**
     * Update KYC
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function kycstore($uuid, Request $request)
    {

        // $request->validate([
        //     'trade_license' => 'required|mimes:png,jpeg,pdf|max:2048'
        //     ]);

       
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

        $organization->save();
        $message = ['type'=>'success', 'content'=>'Details are submitted successfully'];
        return view('organization.kyc')->with(compact('organization','countries', 'message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrganizationRequest  $request
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrganizationRequest $request, Organization $organization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        //
    }
}
