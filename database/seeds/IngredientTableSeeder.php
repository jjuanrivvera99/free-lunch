<?php

use Illuminate\Database\Seeder;
use App\Ingredient;

class IngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingredient::create(
            [
                "name" => "tomato",
                "description" => "Tomato"
            ]
        );

        Ingredient::create(
            [
                "name" => "lemon",
                "description" => "Lemon"
            ]
        );

        Ingredient::create(
            [
                "name" => "potato",
                "description" => "Potato"
            ]
        );

        Ingredient::create(
            [
                "name" => "rice",
                "description" => "Rice"
            ]
        );

        Ingredient::create(
            [
                "name" => "ketchup",
                "description" => "Ketchup"
            ]
        );

        Ingredient::create(
            [
                "name" => "lettuce",
                "description" => "Lettuce"
            ]
        );
        
        Ingredient::create(
            [
                "name" => "onion",
                "description" => "Onion"
            ]
        );
        
        Ingredient::create(
            [
                "name" => "cheese",
                "description" => "Chesse"
            ]
        );

        Ingredient::create(
            [
                "name" => "meat",
                "description" => "Meat"
            ]
        );

        Ingredient::create(
            [
                "name" => "chicken",
                "description" => "Chicken"
            ]
        );
    }
}
