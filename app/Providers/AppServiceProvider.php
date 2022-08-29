<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use App\Models\Proposal;
use App\Models\Organization;
use App\Observers\ProposalObserver;
use App\Observers\OrganizationObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
      //  Proposal::observe(ProposalObserver::class);
        Organization::observe(OrganizationObserver::class);
    }
}
