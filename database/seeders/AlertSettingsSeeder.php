<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\AlertSetting;

class AlertSettingsSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            // Geofence exit alert
            AlertSetting::create([
                'user_id' => $user->id,
                'type' => 'geofence_exit',
                'conditions' => json_encode([
                    'geofence_types' => ['home', 'work'],
                    'time_window' => [
                        'start' => '22:00',
                        'end' => '06:00'
                    ]
                ]),
                'notification_channels' => json_encode(['email', 'sms']),
                'is_active' => true,
            ]);

            // Speed limit alert
            AlertSetting::create([
                'user_id' => $user->id,
                'type' => 'speed_limit',
                'conditions' => json_encode([
                    'max_speed' => 120,
                    'duration' => 300 // 5 minutes
                ]),
                'notification_channels' => json_encode(['email', 'push']),
                'is_active' => true,
            ]);

            // Device offline alert
            AlertSetting::create([
                'user_id' => $user->id,
                'type' => 'device_offline',
                'conditions' => json_encode([
                    'offline_duration' => 1800 // 30 minutes
                ]),
                'notification_channels' => json_encode(['email', 'sms', 'push']),
                'is_active' => true,
            ]);
        }
    }
}
