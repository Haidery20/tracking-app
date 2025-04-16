<?php

namespace App\Policies;

use App\Models\Device;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DevicePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Device $device)
    {
        return $user->id === $device->user_id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Device $device)
    {
        return $user->id === $device->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Device $device)
    {
        return $user->id === $device->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Device $device)
    {
        return $user->id === $device->user_id;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Device $device)
    {
        return $user->id === $device->user_id;
    }
}
