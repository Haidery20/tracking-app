<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Geofence;

class GeofencesSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            // Create a circular geofence
            Geofence::create([
                'user_id' => $user->id,
                'name' => 'Home Zone - ' . $user->name,
                'type' => 'circle',
                'coordinates' => json_encode([
                    'center' => [25.2048, 55.2708], // Dubai coordinates
                ]),
                'radius' => 1000, // 1km radius
                'description' => 'Home area geofence',
                'is_active' => true,
            ]);

            // Create a polygon geofence
            Geofence::create([
                'user_id' => $user->id,
                'name' => 'Work Zone - ' . $user->name,
                'type' => 'polygon',
                'coordinates' => json_encode([
                    'points' => [
                        [25.2048, 55.2708],
                        [25.2148, 55.2808],
                        [25.2148, 55.2908],
                        [25.2048, 55.2908],
                    ]
                ]),
                'description' => 'Work area geofence',
                'is_active' => true,
            ]);
        }
    }
}
