<?php

namespace App\Http\Controllers;

use App\Models\Usage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $usage = $user->usage ?? Usage::create([
            'user_id' => $user->id,
            'page_views' => 0,
            'api_calls' => 0,
            'storage_usage' => 0,
            'bandwidth_usage' => 0,
        ]);

        // Update page views
        $usage->updateUsage();

        // Calculate usage statistics
        $stats = [
            'page_views' => $usage->page_views,
            'api_calls' => $usage->api_calls,
            'storage_usage' => $usage->storage_usage,
            'bandwidth_usage' => $usage->bandwidth_usage,
            'last_updated' => $usage->last_updated,
            'monthly_limit' => $this->getMonthlyUsageLimits(),
            'usage_percentage' => $this->calculateUsagePercentage($usage)
        ];

        return view('dashboard.index', compact('stats'));
    }

    private function getMonthlyUsageLimits(): array
    {
        return [
            'page_views' => 10000,  // 10,000 page views
            'api_calls' => 5000,    // 5,000 API calls
            'storage' => 104857600, // 100MB in bytes
            'bandwidth' => 524288000 // 500MB in bytes
        ];
    }

    private function calculateUsagePercentage(Usage $usage): array
    {
        $limits = $this->getMonthlyUsageLimits();
        
        return [
            'page_views' => ($usage->page_views / $limits['page_views']) * 100,
            'api_calls' => ($usage->api_calls / $limits['api_calls']) * 100,
            'storage' => ($usage->storage_usage / $limits['storage']) * 100,
            'bandwidth' => ($usage->bandwidth_usage / $limits['bandwidth']) * 100,
        ];
    }
}
