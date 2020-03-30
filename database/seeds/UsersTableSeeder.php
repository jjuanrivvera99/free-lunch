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
            'name' => "Juan Felipe",
            'last_name' => "Rivera",
            'email' => "juan.rivera@alegra.com",
            'phone' => "3000000000",
            'location' => "Cra 24 A # 76 - 100",
            'photo' => "/storage/users/1/img/photo.png",
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => "Gerente",
            'last_name' => "A.",
            'email' => "gerente@email.com",
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => "Pedro",
            'last_name' => "Gallardo",
            'email' => "pedro.gallardo@mail.com",
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => "Daniela",
            "last_name" => "Rivera",
            'email' => "daniela@email.com",
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => "Sandra",
            "last_name" => "Wolf",
            'email' => "sandra@email.com",
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => "Vane",
            "last_name" => "Castrillon",
            'email' => "princesa@email.com",
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password'),
        ]);

        User::find(1)->assignRole('admin');
        User::find(2)->assignRole('manager');
        User::find(3)->assignRole('kitchener');
        User::find(5)->assignRole('grocery');
        User::find(6)->assignRole('admin');
    }
}
