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
        'deals' => ProposalController::class
    ]);
});

Route::middleware(['auth'])->group(function () {
    Route::resources([
        'companies' => OrganizationController::class,
    ]);
});


Route::get('/kyc/{uuid}', [OrganizationController::class, 'kyc'])->name('kyc');
Route::patch('/kyc/{uuid}', [OrganizationController::class, 'kycstore'])->name('kycstore');

require __DIR__.'/auth.php';
