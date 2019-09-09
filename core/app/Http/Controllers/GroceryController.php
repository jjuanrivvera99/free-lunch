<?php

namespace App\Http\Controllers;

use App\Grocery;
use App\Ingredient;
use Illuminate\Http\Request;
use App\Jobs\BuyIngredientsJob;

class GroceryController extends Controller
{
        
    public function buy($name = "all"){
        BuyIngredientsJob::dispatch($name)->delay(now()->addSeconds(30));
    }

}
