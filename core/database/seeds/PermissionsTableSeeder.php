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
        Permission::create([
            'name' => 'List Request',
            'slug' => 'request.list',
            'description' => 'List all requests',
        ]);

        Permission::create([
            'name' => 'Create Request',
            'slug' => 'request.create',
            'description' => 'Make a request',
        ]);

        Permission::create([
            'name' => 'Create Plate',
            'slug' => 'plate.create',
            'description' => 'Create a plate',
        ]);

        Permission::create([
            'name' => 'Request Plate',
            'slug' => 'request.assign',
            'description' => 'Request plate to request',
        ]);

        Permission::create([
            'name' => 'List Plates',
            'slug' => 'plate.list',
            'description' => 'List plates',
        ]);

        Permission::create([
            'name' => 'View Market',
            'slug' => 'market.list',
            'description' => 'View Market History',
        ]);
    }
}
