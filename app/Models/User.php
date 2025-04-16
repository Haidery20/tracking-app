<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get the roles that the user belongs to.
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * Check if the user has a specific role.
     *
     * @param string $roleName
     * @return bool
     */
    public function hasRole($roleName)
    {
        return $this->roles()->where('name', $roleName)->exists();
    }

    /**
     * Get the devices that the user owns.
     */
    public function devices()
    {
        return $this->hasMany(Device::class);
    }

    /**
     * Get the geofences that the user owns.
     */
    public function geofences()
    {
        return $this->hasMany(Geofence::class);
    }

    /**
     * Get the alert settings that the user owns.
     */
    public function alertSettings()
    {
        return $this->hasMany(AlertSetting::class);
    }

    /**
     * Get the usage that the user owns.
     */
    public function usage()
    {
        return $this->hasOne(Usage::class);
    }
}
