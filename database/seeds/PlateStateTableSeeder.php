<?php

use Illuminate\Database\Seeder;
use App\PlateState;

class PlateStateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        PlateState::create([
            "description" => "Enable",
        ]);

        PlateState::create([
            "description" => "Disable",
        ]);
    }
}
