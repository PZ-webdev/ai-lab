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
                    'name' => 'Jan', 'id_role' => 1, 'id_country' => 1, 'email' => 'jan@email.com', 'password' => Hash::make('1234')
                ],
                [
                    'name' => 'Siu Hun', 'id_role' => 2, 'id_country' => 2, 'email' => 'siuhun@email.com', 'password' => Hash::make('1234')
                ],
                [
                    'name' => 'Helmut', 'id_role' => 3, 'id_country' => 3, 'email' => 'helmut@email.com', 'password' => Hash::make('1234')
                ],
                [
                    'name' => 'Marta', 'id_role' => 4, 'id_country' => 4, 'email' => 'marta@email.com', 'password' => Hash::make('1234')
                ],
                [
                    'name' => 'Bill', 'id_role' => 4, 'id_country' => 5, 'email' => 'bill@email.com', 'password' => Hash::make('1234')
                ],
                [
                    'name' => 'Lilly', 'id_role' => 4, 'id_country' => 6, 'email' => 'lilly@email.com', 'password' => Hash::make('1234')
                ]
            ],
            'name'
        );
    }
}
