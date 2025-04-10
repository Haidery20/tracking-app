<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Usage extends Model
{
    protected $fillable = [
        'user_id',
        'page_views',
        'api_calls',
        'storage_usage',
        'bandwidth_usage',
        'last_updated'
    ];

    protected $casts = [
        'last_updated' => 'datetime',
        'page_views' => 'integer',
        'api_calls' => 'integer',
        'storage_usage' => 'integer',
        'bandwidth_usage' => 'integer'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function updateUsage(): void
    {
        $this->page_views += 1;
        $this->last_updated = now();
        $this->save();
    }

    public function resetUsage(): void
    {
        $this->page_views = 0;
        $this->api_calls = 0;
        $this->storage_usage = 0;
        $this->bandwidth_usage = 0;
        $this->last_updated = now();
        $this->save();
    }
}
