<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Country;
use App\Models\Trip;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Trip::truncate();
        Country::truncate();
        Schema::enableForeignKeyConstraints();
        Country::upsert(
            [
                [
                    'name' => 'USA', 'code' => 'US', 'currency' => 'dolar amerykański',
                    'area' => '9833520', 'language' => 'angielski'
                ],
                [
                    'name' => 'Chiny', 'code' => 'CN', 'currency' => 'yuan',
                    'area' => '9596960', 'language' => 'mandaryński'
                ],
                [
                    'name' => 'Austria', 'code' => 'AT', 'currency' => 'euro',
                    'area' => '83879', 'language' => 'niemiecki'
                ],
                [
                    'name' => 'Tanzania', 'code' => 'TZ', 'currency' => 'szyling tanzański',
                    'area' => '947300', 'language' => 'suahili'
                ],
                [
                    'name' => 'Demokratyczna Republika Konga', 'code' => 'CD', 'currency' => 'frank kongijski',
                    'area' => '2344858', 'language' => 'francuski'
                ],
                [
                    'name' => 'Pakistan', 'code' => 'PK', 'currency' => 'rupia pakistańska',
                    'area' => '803940', 'language' => 'urdu'
                ],
                [
                    'name' => 'Polska', 'code' => 'PL', 'currency' => 'złoty',
                    'area' => '38179800', 'language' => 'polski'
                ],
                [
                    'name' => 'Australia', 'code' => 'AU', 'currency' => 'dolar australijski',
                    'area' => '7686850', 'language' => 'angielski'
                ]
            ],
            'name'
        );

        for ($i = 0; $i <= 3; $i++) {
            DB::table('countries')->insert([
                'name' => Str::random(15), 'code' => Str::random(3), 'currency' => Str::random(10),
                'area' => rand(0, 99999), 'language' => Str::random(10), 'created_at' => now(), 'updated_at' => now(),
            ]);
        }
    }
}
