<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::upsert(
            [
                [
                    'name' => 'Admin'
                ],
                [
                    'name' => 'Super Admin'
                ],
                [
                    'name' => 'Moderator'
                ],
                [
                    'name' => 'Użytkownik'
                ],
            ],
            'name'
        );
    }
}
