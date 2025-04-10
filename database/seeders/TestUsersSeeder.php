<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Usage;
use Illuminate\Support\Facades\Hash;

class TestUsersSeeder extends Seeder
{
    public function run(): void
    {
        // Create test users with different usage levels
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => Hash::make('password'),
                'usage' => [
                    'page_views' => 7500,
                    'api_calls' => 3500,
                    'storage_usage' => 75000000, // 75MB
                    'bandwidth_usage' => 350000000 // 350MB
                ]
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => Hash::make('password'),
                'usage' => [
                    'page_views' => 2500,
                    'api_calls' => 1500,
                    'storage_usage' => 25000000, // 25MB
                    'bandwidth_usage' => 150000000 // 150MB
                ]
            ],
            [
                'name' => 'Mike Johnson',
                'email' => 'mike@example.com',
                'password' => Hash::make('password'),
                'usage' => [
                    'page_views' => 9500,
                    'api_calls' => 4500,
                    'storage_usage' => 95000000, // 95MB
                    'bandwidth_usage' => 450000000 // 450MB
                ]
            ],
            [
                'name' => 'Sarah Wilson',
                'email' => 'sarah@example.com',
                'password' => Hash::make('password'),
                'usage' => [
                    'page_views' => 5000,
                    'api_calls' => 2500,
                    'storage_usage' => 50000000, // 50MB
                    'bandwidth_usage' => 250000000 // 250MB
                ]
            ]
        ];

        foreach ($users as $userData) {
            $user = User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => $userData['password'],
                'role' => 'user'
            ]);

            Usage::create([
                'user_id' => $user->id,
                'page_views' => $userData['usage']['page_views'],
                'api_calls' => $userData['usage']['api_calls'],
                'storage_usage' => $userData['usage']['storage_usage'],
                'bandwidth_usage' => $userData['usage']['bandwidth_usage'],
                'last_updated' => now()
            ]);
        }
    }
}
