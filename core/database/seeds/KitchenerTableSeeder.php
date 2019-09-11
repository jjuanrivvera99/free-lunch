<?php

use App\User;
use App\Kitchener;
use Illuminate\Database\Seeder;

class KitchenerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kitchener::create([
            "user_id" => 3
        ]);

        Kitchener::create([
            "user_id" => 4
        ]);

        User::find(3)->assignRole('kitchener');
        User::find(4)->assignRole('kitchener');
        User::find(5)->assignRole('kitchener');
    }
}
