<?php

namespace App\Observers;

use App\Models\Option;
use App\Models\Organizations;
use App\Models\Proposals;
use Illuminate\Support\Str;

class ProposalObserver
{
    /**
     * Handle the Proposals "created" event.
     *
     * @param  \App\Models\Proposals  $proposals
     * @return void
     */
    public function created(Proposals $proposals)
    {
        // echo "<pre>";print_r($organizationData->owner_id);die;
        //$uuid = (string) Str::uuid();
        //$new = Option::where('name','New')->first();
        //$organizationData = Organizations::where('owner_id',auth()->id())->first();
        //$proposals->uuid = $uuid;
        //$proposals->organization_id = $organizationData->id;
        //$proposals->user_id = $organizationData->owner_id;
        //$proposals->status_id = $new->id;
        //$proposals->save();
    }

    /**
     * Handle the Proposals "updated" event.
     *
     * @param  \App\Models\Proposals  $proposals
     * @return void
     */
    public function updated(Proposals $proposals)
    {
        //
    }

    /**
     * Handle the Proposals "deleted" event.
     *
     * @param  \App\Models\Proposals  $proposals
     * @return void
     */
    public function deleted(Proposals $proposals)
    {
        //
    }

    /**
     * Handle the Proposals "restored" event.
     *
     * @param  \App\Models\Proposals  $proposals
     * @return void
     */
    public function restored(Proposals $proposals)
    {
        //
    }

    /**
     * Handle the Proposals "force deleted" event.
     *
     * @param  \App\Models\Proposals  $proposals
     * @return void
     */
    public function forceDeleted(Proposals $proposals)
    {
        //
    }
}
