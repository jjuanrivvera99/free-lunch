<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => "Juan Felipe Rivera",
                'email' => "juan.rivera@alegra.com",
                'password' => bcrypt('password'),
            ],
            [
                'name' => "Pedro Gallardo",
                'email' => "pedro.gallardo@mail.com",
                'password' => bcrypt('password'),
            ],
            [
                'name' => "Gerente",
                'email' => "gerente@email.com",
                'password' => bcrypt('password'),
            ]
        ]);
    }
}
