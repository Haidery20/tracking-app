<?php

namespace App\Providers;

use App\Policies\DevicePolicy;
use App\Models\Device;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as BaseServiceProvider;

class AuthServiceProvider extends BaseServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Device::class => DevicePolicy::class,
        \App\Models\User::class => UserPolicy::class,
        \App\Models\Role::class => RolePolicy::class,
        \App\Models\Permission::class => PermissionPolicy::class,
        \App\Models\PasswordReset::class => PasswordResetPolicy::class,
        \App\Models\Token::class => TokenPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}
