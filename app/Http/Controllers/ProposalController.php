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
use Auth;
//use DataTables;
use Yajra\DataTables\Facades\DataTables;


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
    

    public function getDatatable(Request $request)
    {
        //
        //$proposals = ProposalResource::collection(Proposal::get());
        //return view('deals.index', ['proposals'=>$proposals]);

        dd($request);

        if ($request->ajax()) {
            $data = ProposalResource::collection(Proposal::get());
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
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

        $current_user = Auth::user();
        $company = $current_user->organizations->first();

        return view('deals.create')->with(compact('payment_options', 'organizations', 'categories', 'company'));
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
    public function show(Proposal $deal)
    {
        //dd($proposal); 
        //$proposal = Proposal::where(['id'=>$deal])->first();
        return view('deals.show')->with(['proposal' => $deal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function edit(Proposal $deal, OptionService $option_service)
    {

        //dd($deal);

        $payment_options = $option_service->get_options_by_group('payment_options');

        //Todo conditionally load organizations based on the clients list. 
        $organizations   = Organization::all();
        $categories = Category::all(['id','name']);

        $current_user = Auth::user();
        $company = $current_user->organizations->first();
        return view('deals.edit')->with(compact('deal', 'payment_options', 'organizations', 'categories', 'company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProposalRequest  $request
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProposalRequest $request, Proposal $deal, ProposalService $ProposalService, OptionService $OptionService)
    {
        $data = $ProposalService->updateProposal($request,$deal,$OptionService);

        //
        if($data['message']['type']=="success")
        {
            return redirect(route('deals.index'));
        }
        
        return view('proposal.create')->with($data);
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
        return back();

    }

    
}
