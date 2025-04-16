<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = \App\Models\User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => \Hash::make('password123'),
        ]);

        // Assign admin role to the test user
        $role = \App\Models\Role::where('name', 'admin')->first();
        $user->roles()->attach($role);
    }
}
