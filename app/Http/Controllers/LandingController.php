<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $stats = [
            'active_users' => 5000,
            'tracked_assets' => 10000,
            'uptime' => 99.99,
            'support_hours' => 24
        ];

        return view('welcome', compact('stats'));
    }
}
