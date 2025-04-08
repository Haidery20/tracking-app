<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get static statistics for the landing page
        $stats = [
            'connections_made' => 5000,
            'projects_completed' => 100,
            'uptime' => 99.99,
            'support_hours' => 24
        ];

        return view('welcome', compact('stats'));
    }
}
