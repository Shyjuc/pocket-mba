<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewProposalNotification;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class NewProposalsNotifyAdminsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    private $proposals;

    public function __construct($proposals)
    {
        $this->proposals = $proposals;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $userDetails = User::where('id',$this->proposals[0]->to_user_id)->first();
        $proposalId = $this->proposals[0]->uuid;

        // Notification::route('mail', 'hetaltestpatel2020@gmail.com')
        //     ->notify(new NewProposalNotification($userDetails));

        Notification::route('mail', $userDetails->email)
            ->notify(new NewProposalNotification($userDetails,$proposalId));
    }
}
