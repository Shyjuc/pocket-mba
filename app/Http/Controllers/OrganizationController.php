<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\User;
use App\Helpers\Helper; 
use Illuminate\Support\Str;
use App\Models\Organization;
use Illuminate\Http\Request;
use App\Http\Resources\OrganizationResource;
use App\Http\Requests\StoreOrganizationRequest;
use App\Http\Requests\UpdateOrganizationRequest;
use App\Services\OrganizationService;

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
    public function store(StoreOrganizationRequest $request, OrganizationService $OrganizationService)
    {
        // Todo move the code to repository
        
        $data = $OrganizationService->createOrganization($request);

        //dd($data);
        //Create organization if not exists
        //dd($data['message']);

        if($data['message']['type']=="success")
        {
            return redirect(route('companies.index'));
        }
        
        return view('organization.create')->with($data);
        
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
       // $organization = Organization::find($id); // your food instance with id 12
        //echo $food->name; //12
         dd($organization->id);

         //$post = Organization::orderBy('created_at','desc')->join('gravatars', 'organizations.gravatar', '=', 'gravatars.id')
               //->get(['organizations.*', 'gravatars.media_path']);

         $post = Organization::where('id',$organization->id)->join('gravatars', 'organizations.gravatar', '=', 'gravatars.id')
         ->get(['organizations.*', 'gravatars.media_path']);
                     

         return view('organization.show')->with(compact('post'));
         //return view('organization.show',compact('organization'));
         
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
    public function kycstore($uuid, $request, OrganizationService $OrganizationService)
    {
        dd($uuid);
        // $request->validate([
        //     'trade_license' => 'required|mimes:png,jpeg,pdf|max:2048'
        //     ]);

        $data = $OrganizationService->storekycOrganization($uuid,$request);

       
        $message = ['type'=>'success', 'content'=>'Details are submitted successfully'];
        //return view('organization.kyc')->with(compact('organization','countries', 'message'));

        return view('organization.kyc')->with($data);
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
