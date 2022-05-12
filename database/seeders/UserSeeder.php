<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::upsert(
            [
                [
                    'name' => 'Jan', 'email' => 'jan@email.com', 'password' => Hash::make('1234'),
                    'country_id' => '7', 'role_id' => 1,
                ],
                [
                    'name' => 'Siu Hun', 'email' => 'siuhun@email.com', 'password' => Hash::make('1234'),
                    'country_id' => '2', 'role_id' => 2,
                ],
                [
                    'name' => 'Helmut', 'email' => 'helmut@email.com', 'password' => Hash::make('1234'),
                    'country_id' => '3', 'role_id' => 2,
                ],
                [
                    'name' => 'Marta', 'email' => 'marta@email.com', 'password' => Hash::make('1234'),
                    'country_id' => '7', 'role_id' => 2,
                ],
                [
                    'name' => 'Bill', 'email' => 'bill@email.com', 'password' => Hash::make('1234'),
                    'country_id' => '1', 'role_id' => 2,
                ],
                [
                    'name' => 'Lilly', 'email' => 'lilly@email.com', 'password' => Hash::make('1234'),
                    'country_id' => '8', 'role_id' => 2,
                ]
            ],
            'email'
        );

    }
}
