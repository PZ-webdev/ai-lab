<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'name'     => 'Polska',
            'code'     => 'PL',
            'currency' => 'Złoty',
            'surface'  => 31296,
            'language' => 'Polski'
        ]);

        Country::create([
            'name'     => 'Niemcy',
            'code'     => 'GER',
            'currency' => 'Euro',
            'surface'  => 357114,
            'language' => 'Niemiecki'
        ]);

        Country::create([
            'name'     => 'Holandia',
            'code'     => 'Nl',
            'currency' => 'Euro',
            'surface'  => 41850,
            'language' => 'Holenderski'
        ]);

        Country::create([
            'name'     => 'Turcja',
            'code'     => 'TUR',
            'currency' => 'Lira turecka',
            'surface'  => 783562,
            'language' => 'Turecki'
        ]);

        Country::create([
            'name'     => 'Chiny',
            'code'     => 'CH',
            'currency' => 'Renminbi',
            'surface'  => 9596960,
            'language' => 'Chiński'
        ]);

        Country::create([
            'name'     => 'Stany Zjednoczone',
            'code'     => 'USA',
            'currency' => 'Dolar Amerykański',
            'surface'  => 9833520,
            'language' => 'Angielski'
        ]);

        Country::create([
            'name'     => 'Austria',
            'code'     => 'UT',
            'currency' => 'Euro',
            'surface'  => 83871,
            'language' => 'Angielski'
        ]);
    }
}
