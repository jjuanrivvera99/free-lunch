<?php

use Illuminate\Database\Seeder;

use App\PlateIngredient;

class PlateIngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PlateIngredient::create([
            "plate_id" => 1,
            "ingredient_id" => 1,
            "qty" => 1,
        ]);

        PlateIngredient::create([
            "plate_id" => 1,
            "ingredient_id" => 4,
            "qty" => 1,
        ]);

        PlateIngredient::create([
            "plate_id" => 1,
            "ingredient_id" => 8,
            "qty" => 2,
        ]);

        PlateIngredient::create([
            "plate_id" => 1,
            "ingredient_id" => 10,
            "qty" => 1,
        ]);

        PlateIngredient::create([
            "plate_id" => 2,
            "ingredient_id" => 3,
            "qty" => 2,
        ]);

        PlateIngredient::create([
            "plate_id" => 2,
            "ingredient_id" => 10,
            "qty" => 1,
        ]);

        PlateIngredient::create([
            "plate_id" => 2,
            "ingredient_id" => 7,
            "qty" => 1,
        ]);

        PlateIngredient::create([
            "plate_id" => 2,
            "ingredient_id" => 4,
            "qty" => 1,
        ]);

        PlateIngredient::create([
            "plate_id" => 3,
            "ingredient_id" => 9,
            "qty" => 1,
        ]);

        PlateIngredient::create([
            "plate_id" => 3,
            "ingredient_id" => 4,
            "qty" => 1,
        ]);

        PlateIngredient::create([
            "plate_id" => 4,
            "ingredient_id" => 8,
            "qty" => 5,
        ]);

        PlateIngredient::create([
            "plate_id" => 4,
            "ingredient_id" => 5,
            "qty" => 1,
        ]);

        PlateIngredient::create([
            "plate_id" => 4,
            "ingredient_id" => 10,
            "qty" => 1,
        ]);

        PlateIngredient::create([
            "plate_id" => 4,
            "ingredient_id" => 1,
            "qty" => 2,
        ]);
    }
}
