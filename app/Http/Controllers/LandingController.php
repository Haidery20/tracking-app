<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $stats = [
            'connections_made' => 5000,
            'projects_completed' => 100,
            'uptime' => 99.99,
            'support_hours' => 24
        ];

        return view('welcome', compact('stats'));
    }
}
