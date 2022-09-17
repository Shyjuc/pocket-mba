<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use App\Models\Category;
use App\Models\Organization;
use App\Services\OptionService;
use App\Services\ProposalService;
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
}
