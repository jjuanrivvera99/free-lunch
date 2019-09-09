<?php

use Illuminate\Database\Seeder;
use App\Grocery;

class GroceryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grocery::create([
            "ingredient_id" => 1,
            "quantity" => 10
        ]);

        Grocery::create([
            "ingredient_id" => 2,
            "quantity" => 10
        ]);

        Grocery::create([
            "ingredient_id" => 3,
            "quantity" => 10
        ]);

        Grocery::create([
            "ingredient_id" => 4,
            "quantity" => 10
        ]);

        Grocery::create([
            "ingredient_id" => 5,
            "quantity" => 10
        ]);

        Grocery::create([
            "ingredient_id" => 6,
            "quantity" => 10
        ]);

        Grocery::create([
            "ingredient_id" => 7,
            "quantity" => 10
        ]);

        Grocery::create([
            "ingredient_id" => 8,
            "quantity" => 10
        ]);

        Grocery::create([
            "ingredient_id" => 9,
            "quantity" => 10
        ]);

        Grocery::create([
            "ingredient_id" => 10,
            "quantity" => 10
        ]);
    }
}
