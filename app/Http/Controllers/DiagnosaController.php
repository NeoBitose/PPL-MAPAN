<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $param;
    public function index()
    {
        $daun = DB::table('gejala')
                    ->join('klasifikasi_gejala', 'gejala.klasifikasi_gejala_id', '=', 'klasifikasi_gejala.id_klasifikasi_gejala')
                    ->where('nama_bagian', 'daun')
                    ->get();
        $tangkai = DB::table('gejala')
                    ->join('klasifikasi_gejala', 'gejala.klasifikasi_gejala_id', '=', 'klasifikasi_gejala.id_klasifikasi_gejala')
                    ->where('nama_bagian', 'tangkai')
                    ->get();
        $malai = DB::table('gejala')
                    ->join('klasifikasi_gejala', 'gejala.klasifikasi_gejala_id', '=', 'klasifikasi_gejala.id_klasifikasi_gejala')
                    ->where('nama_bagian', 'malai')
                    ->get();
        $this->param['daun'] = $daun;
        $this->param['tangkai'] = $tangkai;
        $this->param['malai'] = $malai;
        // dd($this->param);
        return view('diagnosa', $this->param);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function diagnosa(Request $request){
        
    }
}
