<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Category;
use App\Models\Proposal;
use App\Models\Organization;
use App\Services\OptionService;
use App\Services\ProposalService;
use Illuminate\Http\Request;
use App\Http\Resources\ProposalResource;
use App\Http\Requests\StoreProposalRequest;
use App\Http\Requests\UpdateProposalRequest;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $proposals = ProposalResource::collection(Proposal::get());
        return view('deals.index', ['proposals'=>$proposals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( OptionService $option_service )
    {
        //
        $payment_options = $option_service->get_options_by_group('payment_options');

        //Todo conditionally load organizations based on the clients list. 
        $organizations   = Organization::all();
        $categories = Category::all(['id','name']);
        return view('deals.create')->with(compact('payment_options', 'organizations', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProposalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProposalRequest $request, ProposalService $ProposalService, OptionService $OptionService)
    {

        $data = $ProposalService->createProposal($request,$OptionService);

        //
        if($data['message']['type']=="success")
        {
            return redirect(route('deals.index'));
        }
        
        return view('proposal.create')->with($data);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function show(Proposal $proposal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function edit(Proposal $proposal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProposalRequest  $request
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProposalRequest $request, Proposal $proposal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proposal $proposal)
    {
        //
    }

    public function showTest($id)
    {
        $expiryDate = Carbon::now()->subDays(1)->toDateString();
        $Data = Proposal::where(['uuid'=>$id])->where('expiry_date','>',$expiryDate);
        if($Data->count() > 0){
            $proposalData = $Data->first();
            return view('EmailProposals.show')->with(compact('proposalData'));
        }else{
            return abort(403, 'Unauthorized action.');
        }
    }

    public function viewproposal($uuid, OptionService $OptionService)
    {
         
        $countries       =  (object) Helper::cList();   
        $organization = Organization::where('uuid',$uuid)->with(['status'])->firstOrFail();

        $categories = Option::all(['id','name']);
        $businessnatures = $OptionService->get_business_nature();  
        
        return view('organization.kyc')->with(compact('organization','countries','businessnatures'));
   
     }

     public function publicUrl($id, Organization $company)
    {
        $expiryDate = Carbon::now()->subDays(1)->toDateString();
        $proposal = Proposal::where(['uuid'=>$id])->where('expiry_date','>',$expiryDate)->first();
        if($proposal){
            
            return view('EmailProposals.public')->with(compact('proposal'));
        }else{
            return abort(403, 'Unauthorized action.');
        }
    }


    public function proposalAction(Request $request, OptionService $option_service, ProposalService $proposal_service)
    {

        $data = $proposal_service->proposalAction($request,$option_service);

        dd($request);
        
        // echo "<pre>";print_r($request->all());die;
       

    }

    
}
