<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $accounts = [
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@thrumble.hotel',
                'Role' => 'SuperAdmin',
            ],
            [
                'name' => 'Admin User',
                'email' => 'admin@thrumble.hotel',
                'Role' => 'Admin',
            ],
            [
                'name' => 'Manager User',
                'email' => 'manager@thrumble.hotel',
                'Role' => 'Manager',
            ],
            [
                'name' => 'Cashier User',
                'email' => 'cashier@thrumble.hotel',
                'Role' => 'Cashier',
            ],
            [
                'name' => 'Staff User',
                'email' => 'staff@thrumble.hotel',
                'Role' => 'Staff',
            ],
        ];

        foreach ($accounts as $account) {
            User::updateOrCreate(
                ['email' => $account['email']],
                [
                    'name' => $account['name'],
                    'password' => Hash::make('password'),
                    'Role' => $account['Role'],
                    'Status' => 1,
                    'email_verified_at' => now(),
                ]
            );
        }
    }
}
