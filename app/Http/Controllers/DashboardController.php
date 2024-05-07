<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard_postingan(){
        if (auth()->user()->role == 'user') {
            return redirect()->back();
        }
        $data = DB::table('postingan')->get();
    }

    
}
