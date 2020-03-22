<?php

namespace App\Jobs;

use Auth;
use App\Request;
use Carbon\Carbon;
use App\Events\NotifyEvent;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class RequestIngredientsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $quantity;
    private $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user, $quantity = 1)
    {
        $this->user = $user;
        $this->quantity = $quantity;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $date = Carbon::now();

        for ($i=0; $i < $this->quantity; $i++) { 
            Request::create([
                'user_id'           => $this->user->id,
                'request_state_id'  => 1,
                'date'              => $date,
            ]);
        }

        event(new NotifyEvent($this->user->id, $this->user->name." has ordered ".$this->quantity." plate(s)"));
    }
}
