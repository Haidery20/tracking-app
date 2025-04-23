<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\RolesAndPermissionsSeeder;
use Database\Seeders\UsersSeeder;
use Database\Seeders\DevicesSeeder;
use Database\Seeders\GeofencesSeeder;
use Database\Seeders\AlertSettingsSeeder;
use Database\Seeders\TestUserSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RolesAndPermissionsSeeder::class,
            UsersSeeder::class,
            DevicesSeeder::class,
            GeofencesSeeder::class,
            AlertSettingsSeeder::class,
            TestUsersSeeder::class,
        ]);

        // Create admin user
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@konekta.com',
            'password' => Hash::make('admin123'),
            'status' => 'active',
            'email_verified_at' => now(),
        ]);
        $admin->roles()->attach(Role::where('name', 'admin')->first());

        // Create sample staff users
        $staff1 = User::create([
            'name' => 'John Staff',
            'email' => 'john@konekta.com',
            'password' => Hash::make('staff123'),
            'status' => 'active',
            'email_verified_at' => now(),
        ]);
        $staff1->roles()->attach(Role::where('name', 'staff')->first());

        $staff2 = User::create([
            'name' => 'Jane Staff',
            'email' => 'jane@konekta.com',
            'password' => Hash::make('staff123'),
            'status' => 'active',
            'email_verified_at' => now(),
        ]);
        $staff2->roles()->attach(Role::where('name', 'staff')->first());

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
            $user->roles()->attach(Role::where('name', 'user')->first());

            // Create devices for the user
            for ($i = 1; $i <= 3; $i++) {
                Device::create([
                    'user_id' => $user->id,
                    'name' => "Device {$i}",
                    'device_id' => "DEV{$user->id}_{$i}",
                    'description' => "Device {$i} description",
                    'status' => true,
                ]);
            }

            // Create geofences for the user
            Geofence::create([
                'user_id' => $user->id,
                'name' => 'Home',
                'type' => 'circle',
                'coordinates' => json_encode([37.7749, -122.4194, 1000]), // San Francisco coordinates with 1km radius
                'description' => 'Home geofence',
                'status' => true,
            ]);

            Geofence::create([
                'user_id' => $user->id,
                'name' => 'Work',
                'type' => 'circle',
                'coordinates' => json_encode([37.7858, -122.4064, 500]), // San Francisco coordinates with 500m radius
                'description' => 'Work geofence',
                'status' => true,
            ]);

            // Create alert settings for the user
            AlertSetting::create([
                'user_id' => $user->id,
                'type' => 'geofence_exit',
                'settings' => json_encode(['notification_type' => 'email', 'alert_message' => 'Device has exited geofence']),
                'enabled' => true,
            ]);

            AlertSetting::create([
                'user_id' => $user->id,
                'type' => 'speed_limit',
                'settings' => json_encode(['speed_limit' => 100, 'unit' => 'km/h']),
                'enabled' => true,
            ]);

            AlertSetting::create([
                'user_id' => $user->id,
                'type' => 'device_offline',
                'settings' => json_encode(['timeout_minutes' => 30, 'notification_type' => 'sms']),
                'enabled' => true,
            ]);
        }
    }
}
