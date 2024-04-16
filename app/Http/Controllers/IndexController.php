<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    private $param;
    public function index()
    {
        $penyakit = DB::table('penyakit')->get();   
        $this->param['penyakit'] = $penyakit;
        // dd($this->param);
        return view('index', $this->param);
    }
}
