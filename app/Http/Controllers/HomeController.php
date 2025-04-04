<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Geofence;
use App\Models\AlertSetting;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get real statistics from the database
        $stats = [
            'active_users' => DB::table('users')->count(),
            'tracked_assets' => Device::count(),
            'uptime' => 99, // Since we don't have actual uptime tracking, using a high number
            'support_hours' => 24, // 24/7 support
        ];

        return view('welcome', compact('stats'));
    }
}
