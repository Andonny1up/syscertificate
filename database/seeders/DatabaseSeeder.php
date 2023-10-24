<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        $this->call(VoyagerDatabaseSeeder::class);
        $this->call(SuperUserSeeder::class);
        // $this->call(DataTypesTableSeeder::class);
        // $this->call(DataRowsTableSeeder::class);
        // $this->call(MenusTableSeeder::class);
        // $this->call(MenuItemsTableSeeder::class);
        $this->call(FontsTableSeeder::class);
    }
}
