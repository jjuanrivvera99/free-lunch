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
            'slug' => 'request.list',
            'description' => 'List all requests',
        ]);

        //2
        Permission::create([
            'name' => 'Create Request',
            'slug' => 'request.create',
            'description' => 'Make a request',
        ]);

        //3
        Permission::create([
            'name' => 'Request Plate',
            'slug' => 'request.assign',
            'description' => 'Request plate to request',
        ]);

        //4
        Permission::create([
            'name' => 'Buy plate ingredients',
            'slug' => 'request.buy',
            'description' => 'Buy plate ingredients',
        ]);

        //5
        Permission::create([
            'name' => 'Deliver ingredients Plate',
            'slug' => 'request.deliver',
            'description' => 'Deliver ingredients Plate',
        ]);

        //6
        Permission::create([
            'name' => 'Request ingredients',
            'slug' => 'request.ingredients',
            'description' => 'Request ingredients',
        ]);

        //7
        Permission::create([
            'name' => 'List Plates',
            'slug' => 'plate.list',
            'description' => 'List plates',
        ]);

        //8
        Permission::create([
            'name' => 'Prepare Plate',
            'slug' => 'plate.prepare',
            'description' => 'Prepare Plate',
        ]);

        //9
        Permission::create([
            'name' => 'View Grocery',
            'slug' => 'grocery.list',
            'description' => 'View Grocery',
        ]);
    }
}
