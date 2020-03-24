<?php
use App\User;
use Carbon\Carbon;
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
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => "Gerente",
            'email' => "gerente@email.com",
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => "Pedro Gallardo",
            'email' => "pedro.gallardo@mail.com",
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => "Daniela",
            'email' => "daniela@email.com",
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => "Sandra",
            'email' => "sandra@email.com",
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => "Laura",
            'email' => "princesa@email.com",
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password'),
        ]);

        User::find(1)->assignRole('admin');
        User::find(2)->assignRole('manager');
        User::find(5)->assignRole('grocery');
        User::find(6)->assignRole('admin');
    }
}
