<?php

use Illuminate\Database\Seeder;
use App\Plate;

class PlateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plate::create([
            "plate_state_id" => 1,
            "name" => "Chiken Roll",
            "description" => ""
        ]);
        
        Plate::create([
            "plate_state_id" => 1,
            "name" => "Chicken Fillet",
            "description" => "A fleshy boneless piece of meat"
        ]);

        Plate::create([
            "plate_state_id" => 1,
            "name" => "Pork Chop",
            "description" => "Pork chop with lemon cream"
        ]);

        Plate::create([
            "plate_state_id" => 1,
            "name" => "Lasagne",
            "description" => "Pasta in the form of wide strips."
        ]);
    }
}
