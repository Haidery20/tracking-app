<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DeviceLocation extends Model
{
    protected $fillable = [
        'device_id',
        'latitude',
        'longitude',
        'altitude',
        'accuracy',
        'speed',
        'address',
        'recorded_at'
    ];

    protected $casts = [
        'recorded_at' => 'datetime'
    ];

    public function device(): BelongsTo
    {
        return $this->belongsTo(Device::class);
    }
}
