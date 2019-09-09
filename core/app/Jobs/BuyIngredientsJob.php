<?php

namespace App\Jobs;

use Market;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class BuyIngredientsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $ingredient;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($ingredient = "all")
    {
        $this->ingredient = $ingredient;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if($this->ingredient == "all"){
            Market::buyAllIngredients();
        }else{
            Market::buyIngredient($this->ingredient);
        }
    }

    
}
