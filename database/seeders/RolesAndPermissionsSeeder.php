<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Create roles
        $roles = [
            [
                'name' => 'admin',
                'description' => 'Administrator with full access'
            ],
            [
                'name' => 'manager',
                'description' => 'Manager with device management access'
            ],
            [
                'name' => 'user',
                'description' => 'Regular user with basic access'
            ]
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }

        // Create permissions
        $permissions = [
            // Device permissions
            [
                'name' => 'devices.view',
                'description' => 'View devices'
            ],
            [
                'name' => 'devices.create',
                'description' => 'Create new devices'
            ],
            [
                'name' => 'devices.edit',
                'description' => 'Edit existing devices'
            ],
            [
                'name' => 'devices.delete',
                'description' => 'Delete devices'
            ],
            // Geofence permissions
            [
                'name' => 'geofences.view',
                'description' => 'View geofences'
            ],
            [
                'name' => 'geofences.create',
                'description' => 'Create new geofences'
            ],
            [
                'name' => 'geofences.edit',
                'description' => 'Edit existing geofences'
            ],
            [
                'name' => 'geofences.delete',
                'description' => 'Delete geofences'
            ],
            // Alert permissions
            [
                'name' => 'alerts.view',
                'description' => 'View alerts'
            ],
            [
                'name' => 'alerts.manage',
                'description' => 'Manage alert settings'
            ]
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }

        // Assign permissions to roles
        $adminRole = Role::where('name', 'admin')->first();
        $managerRole = Role::where('name', 'manager')->first();
        $userRole = Role::where('name', 'user')->first();

        // Admin gets all permissions
        $adminRole->permissions()->attach(Permission::all());

        // Manager gets specific permissions
        $managerRole->permissions()->attach(
            Permission::whereIn('name', [
                'devices.view', 'devices.create', 'devices.edit',
                'geofences.view', 'geofences.create', 'geofences.edit',
                'alerts.view', 'alerts.manage'
            ])->get()
        );

        // User gets basic permissions
        $userRole->permissions()->attach(
            Permission::whereIn('name', [
                'devices.view',
                'geofences.view',
                'alerts.view'
            ])->get()
        );
    }
}
