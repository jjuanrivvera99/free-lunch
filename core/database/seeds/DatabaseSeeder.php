<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(KitchenerTableSeeder::class);
        $this->call(IngredientTableSeeder::class);
        $this->call(PlateStateTableSeeder::class);
        $this->call(PlateTableSeeder::class);
        $this->call(PlateIngredientTableSeeder::class);
        $this->call(GroceryTableSeeder::class);
        $this->call(RequestStateTableSeeder::class);
    }
}
