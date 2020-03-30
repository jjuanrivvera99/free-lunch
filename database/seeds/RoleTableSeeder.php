<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;

class RoleTableSeeder extends Seeder
{
    private $managerPermissions = [
        'requests.list',
        'requests.create',
        'plates.list',
        'grocery.list',
        'users.profile'
    ];

    private $kitchenerPermissions = [
        'requests.list',
        'requests.assign',
        'requests.ingredients',
        'plates.list',
        'plates.prepare',
        'users.profile'
    ];

    private $groceryPermissions = [
        'requests.list',
        'requests.buy',
        'requests.deliver',
        'grocery.list',
        'users.profile'
    ];

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

        $this->assignPermissions($this->managerPermissions, 'manager');
        $this->assignPermissions($this->kitchenerPermissions, 'kitchener');
        $this->assignPermissions($this->groceryPermissions, 'grocery');
    }

    private function assignPermissions($permissions, $slug)
    {
        foreach ($permissions as $permission) {
            $permission = Permission::whereSlug($permission)->first();

            Role::whereSlug($slug)->first()->assignPermission($permission->id);
        }
    }
}
