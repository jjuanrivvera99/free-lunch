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

        Role::create([
            'name' => 'Grocery',
            'slug' => 'grocery',
        ]);

        Role::find(2)->assignPermission(1);
        Role::find(2)->assignPermission(2);
        Role::find(2)->assignPermission(7);
        Role::find(2)->assignPermission(9);
        Role::find(3)->assignPermission(1);
        Role::find(3)->assignPermission(3);
        Role::find(3)->assignPermission(6);
        Role::find(3)->assignPermission(7);
        Role::find(3)->assignPermission(8);
        Role::find(4)->assignPermission(1);
        Role::find(4)->assignPermission(4);
        Role::find(4)->assignPermission(5);
        Role::find(4)->assignPermission(9);
    }
}
