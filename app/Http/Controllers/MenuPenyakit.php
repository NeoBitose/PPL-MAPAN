<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MenuPenyakit extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penyakit = Penyakit::get();
        return view('penyakit.MenuPenyakit', compact('penyakit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('gambar');
        $nama_file = Str::random(20) . '.' . $file->extension();
        $file->move('img/penyakit', $nama_file);

        Penyakit::create([
            "nama_penyakit" => $request->nama,
            "definisi" => $request->definisi,
            "pengendalian_teknis" => $request->teknis,
            "pengendalian_gejala" => $request->gejala,
            "foto_penyakit" => $nama_file,
        ]);

        return redirect('penyakit');
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
}
