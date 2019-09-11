<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'special' => 'all-access',
        ]);

        Role::create([
            'name' => 'Manager',
            'slug' => 'manager',
        ]);

        Role::create([
            'name' => 'Kitchener',
            'slug' => 'kitchener',
        ]);

        Role::find(2)->assignPermission(1);
        Role::find(2)->assignPermission(2);
        Role::find(2)->assignPermission(5);
        Role::find(2)->assignPermission(6);
        Role::find(3)->assignPermission(1);
        Role::find(3)->assignPermission(4);
    }
}
