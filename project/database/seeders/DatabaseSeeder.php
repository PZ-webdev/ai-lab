<?php

namespace Database\Seeders;

use App\Models\Country;
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
        // Country::factory(10)->create();

        $this->call([
            CountrySeeder::class,
            TripSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
        ]);
    }
}
