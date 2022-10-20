<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\OrganizationController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data', function () {
    return view('deals.welcome');
});

Route::get('/test', function () {
    $proposal = App\Models\Proposal::find(1);
    //dd($proposal->comments);
    $proposalService = New App\Services\ProposalService();
    $proposalService->sendProposal($proposal,2);
    //$current_user = Auth::user();
    //$organization_id = $current_user->organizations->first()->id;
    //dd($proposalService);
});

Route::get('email-proposal-test/{id}', [ProposalController::class, 'showTest']);
Route::post('update-email-proposal', [ProposalController::class, 'update'])->name('update-proposal-status'); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/contacts', function () {
    return view('dashboard');
})->middleware(['auth'])->name('contacts');


Route::get('/contracts', function () {
    return view('dashboard');
})->middleware(['auth'])->name('contracts');


Route::middleware(['auth'])->group(function () {
    Route::resources([
        'deals' => ProposalController::class,
    ]);
});

Route::middleware(['auth'])->group(function () {
    Route::resources([
        'companies' => OrganizationController::class,
    ]);
});


Route::get('/kyc/{uuid}', [OrganizationController::class, 'kyc'])->name('kyc');
Route::patch('/kyc/{uuid}', [OrganizationController::class, 'kycstore'])->name('kycstore');

Route::post('importcsv',[OrganizationController::class, 'csvstore'])->name('csvstore');

//Route::post('importcsv', 'OrganizationController@csvstore')->name('csvstore');

Route::get('/proposal/{uuid}', [ProposalController::class, 'viewproposal'])->name('viewproposal');

require __DIR__.'/auth.php';

Route::get('proposal-public/{id}', [ProposalController::class, 'publicUrl']);

Route::post('proposal-action/{uuid}', [ProposalController::class, 'proposalAction'])->name('proposalAction');

//Route::get('deals/list', [ProposalController::class, 'getDatatable']);
Route::get('dealslist', [ProposalController::class, 'getDatatable'])->name('dealslist');

//Route::get('dealslist', 'App\Http\Controllers\ProposalController@getDatatable')->name('dealslist');
