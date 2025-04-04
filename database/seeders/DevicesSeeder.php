<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Device;
use App\Models\DeviceLocation;

class DevicesSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            // Create 2-3 devices for each user
            $numDevices = rand(2, 3);
            
            for ($i = 0; $i < $numDevices; $i++) {
                $device = Device::create([
                    'user_id' => $user->id,
                    'name' => "Device " . ($i + 1) . " - " . $user->name,
                    'device_id' => "DEV" . strtoupper(substr(md5(uniqid()), 0, 8)),
                    'type' => $this->getRandomDeviceType(),
                    'model' => $this->getRandomModel(),
                    'settings' => [
                        'update_interval' => rand(1, 5) * 60, // 1-5 minutes in seconds
                        'battery_warning' => rand(10, 20),
                    ],
                    'status' => $this->getRandomStatus(),
                    'last_ping' => now()->subMinutes(rand(1, 60)),
                ]);

                // Create some location history for each device
                $this->createLocationHistory($device);
            }
        }
    }

    private function getRandomDeviceType(): string
    {
        $types = ['gps_tracker', 'smartphone', 'vehicle_tracker', 'asset_tracker'];
        return $types[array_rand($types)];
    }

    private function getRandomModel(): string
    {
        $models = ['GT-100', 'ST-200', 'VT-300', 'AT-400', 'PT-500'];
        return $models[array_rand($models)];
    }

    private function getRandomStatus(): string
    {
        $statuses = ['active', 'inactive', 'maintenance'];
        return $statuses[array_rand($statuses)];
    }

    private function createLocationHistory(Device $device): void
    {
        // Create 10 location points for each device
        $baseLatitude = 25.2048; // Example base coordinates (Dubai)
        $baseLongitude = 55.2708;

        for ($i = 0; $i < 10; $i++) {
            DeviceLocation::create([
                'device_id' => $device->id,
                'latitude' => $baseLatitude + (rand(-1000, 1000) / 10000),
                'longitude' => $baseLongitude + (rand(-1000, 1000) / 10000),
                'altitude' => rand(0, 100),
                'accuracy' => rand(3, 15),
                'speed' => rand(0, 80),
                'address' => 'Sample Address ' . ($i + 1),
                'recorded_at' => now()->subMinutes($i * 15),
            ]);
        }
    }
}
