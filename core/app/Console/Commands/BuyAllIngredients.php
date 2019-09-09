<?php

namespace App\Console\Commands;

use App\Grocery;
use App\Ingredient;
use Illuminate\Console\Command;
use App\Jobs\BuyIngredientsJob;

class BuyAllIngredients extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'buy:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Buy all the ingredients available in the grocery';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $grocery = new Grocery;
        $ingredient = new Ingredient();

        BuyIngredientsJob::dispatch($grocery, $ingredient)->delay(now()->addSeconds(30));
    }
}
