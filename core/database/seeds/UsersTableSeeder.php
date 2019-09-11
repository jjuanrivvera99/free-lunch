<?php
use App\User;
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
        User::create([
            'name' => "Juan Felipe Rivera",
            'email' => "juan.rivera@alegra.com",
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => "Gerente",
            'email' => "gerente@email.com",
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => "Pedro Gallardo",
            'email' => "pedro.gallardo@mail.com",
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => "Daniela",
            'email' => "daniela@email.com",
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => "Sandra",
            'email' => "sandra@email.com",
            'password' => bcrypt('password'),
        ]);

        User::find(1)->assignRole('admin');
        User::find(2)->assignRole('manager');

    }
}
