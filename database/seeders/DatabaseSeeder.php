<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ProductsSeeder;
use Database\Seeders\UserRoleSeeder;
use Database\Seeders\ProductsCategorySeeder;
use Database\Seeders\SettingsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserRoleSeeder::class,
            UserSeeder::class,
            ProductsCategorySeeder::class,
            ProductsSeeder::class,
            SettingsSeeder::class
        ]);
    }
}
