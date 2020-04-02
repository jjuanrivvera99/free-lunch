<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        Permission::create([
            'name' => 'List Request',
            'slug' => 'requests.list',
            'description' => 'List all requests',
        ]);

        //2
        Permission::create([
            'name' => 'Create Request',
            'slug' => 'requests.create',
            'description' => 'Make a request',
        ]);

        //3
        Permission::create([
            'name' => 'Request Plate',
            'slug' => 'requests.assign',
            'description' => 'Request plate to request',
        ]);

        //4
        Permission::create([
            'name' => 'Buy plate ingredients',
            'slug' => 'requests.buy',
            'description' => 'Buy plate ingredients',
        ]);

        //5
        Permission::create([
            'name' => 'Deliver ingredients Plate',
            'slug' => 'requests.deliver',
            'description' => 'Deliver ingredients Plate',
        ]);

        //6
        Permission::create([
            'name' => 'Request ingredients',
            'slug' => 'requests.ingredients',
            'description' => 'Request ingredients',
        ]);

        //7
        Permission::create([
            'name' => 'List Plates',
            'slug' => 'plates.list',
            'description' => 'List plates',
        ]);

        //8
        Permission::create([
            'name' => 'Prepare Plate',
            'slug' => 'plates.prepare',
            'description' => 'Prepare Plate',
        ]);

        //9
        Permission::create([
            'name' => 'View Grocery',
            'slug' => 'grocery.list',
            'description' => 'View Grocery',
        ]);

        Permission::create([
            'name' => 'List Users',
            'slug' => 'users.list',
            'description' => 'List all users',
        ]);

        Permission::create([
            'name' => 'Create User',
            'slug' => 'users.create',
            'description' => 'Create a user',
        ]);

        Permission::create([
            'name' => 'Show User',
            'slug' => 'users.show',
            'description' => 'Show user',
        ]);

        Permission::create([
            'name' => 'Edit User',
            'slug' => 'users.edit',
            'description' => 'Edit user',
        ]);

        Permission::create([
            'name' => 'Profile',
            'slug' => 'users.profile',
            'description' => 'View my profile',
        ]);
    }
}
