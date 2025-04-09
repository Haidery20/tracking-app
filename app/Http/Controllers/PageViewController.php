<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageViewController extends Controller
{
    public function incrementHomepageViews()
    {
        DB::table('page_views')
            ->where('page_name', 'homepage')
            ->increment('view_count');

        $count = DB::table('page_views')
            ->where('page_name', 'homepage')
            ->value('view_count');

        return response()->json(['count' => $count]);
    }

    public function getHomepageViews()
    {
        $count = DB::table('page_views')
            ->where('page_name', 'homepage')
            ->value('view_count');

        return response()->json(['count' => $count]);
    }
}
