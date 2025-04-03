<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create roles
        $adminRole = Role::create(['name' => 'admin', 'description' => 'Administrator']);
        $staffRole = Role::create(['name' => 'staff', 'description' => 'Staff Member']);
        $userRole = Role::create(['name' => 'user', 'description' => 'Regular User']);

        // Create admin user
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@trackingapp.com',
            'password' => Hash::make('admin123'),
            'status' => 'active',
            'email_verified_at' => now(),
        ]);
        $admin->roles()->attach($adminRole);

        // Create sample staff users
        $staff1 = User::create([
            'name' => 'John Staff',
            'email' => 'john@trackingapp.com',
            'password' => Hash::make('staff123'),
            'status' => 'active',
            'email_verified_at' => now(),
        ]);
        $staff1->roles()->attach($staffRole);

        $staff2 = User::create([
            'name' => 'Jane Staff',
            'email' => 'jane@trackingapp.com',
            'password' => Hash::make('staff123'),
            'status' => 'active',
            'email_verified_at' => now(),
        ]);
        $staff2->roles()->attach($staffRole);

        // Create sample regular users
        $users = [
            [
                'name' => 'Alice Cooper',
                'email' => 'alice@example.com',
                'company_name' => 'Cooper Logistics',
                'status' => 'active'
            ],
            [
                'name' => 'Bob Wilson',
                'email' => 'bob@example.com',
                'company_name' => 'Wilson Transport',
                'status' => 'active'
            ],
            [
                'name' => 'Carol Smith',
                'email' => 'carol@example.com',
                'company_name' => 'Smith Deliveries',
                'status' => 'inactive'
            ]
        ];

        foreach ($users as $userData) {
            $user = User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => Hash::make('password123'),
                'company_name' => $userData['company_name'],
                'status' => $userData['status'],
                'email_verified_at' => now(),
            ]);
            $user->roles()->attach($userRole);
        }
    }
}
