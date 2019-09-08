<?php

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
        DB::table('kitchener')->insert([
            [
                "user_id" => 3
            ],
            [
                "user_id" => 4
            ],
        ]);
    }
}
