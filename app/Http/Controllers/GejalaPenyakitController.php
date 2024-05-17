<?php

namespace App\Http\Controllers;

use App\Models\M_Gejala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GejalaPenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $klasifikasi = DB::table('klasifikasi_gejala')->get();
        $penyakit = DB::table('penyakit')->get();
        $data_gejala = DB::table('gejala')
            ->join('klasifikasi_gejala', 'gejala.klasifikasi_gejala_id', '=', 'klasifikasi_gejala.id_klasifikasi_gejala')
            ->orderBy('id_gejala', 'DESC')
            ->get();
        $gejala = [];
        for ($i=0; $i < count($data_gejala); $i++) { 
            $datapenyakit = DB::table('gejala_penyakit')
                            ->join('penyakit', 'gejala_penyakit.penyakit_id', 'penyakit.id_penyakit')
                            ->where('gejala_id', $data_gejala[$i]->id_gejala)
                            ->select('nama_penyakit')
                            ->get();
            $gejala[$i] = [
                "gejala" => $data_gejala[$i]->gejala,
                "bagian" => $data_gejala[$i]->nama_bagian,
                "penyakit" => $datapenyakit
            ];
        }

        return view('gejala.index', compact(['klasifikasi', 'penyakit', 'gejala']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $klasifikasi = DB::table('klasifikasi_gejala')->get();
        return view('gejala.tambah', compact('klasifikasi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $gejala = M_Gejala::create([
                    "gejala" => $request->gejala,
                    "klasifikasi_gejala_id" => $request->klasifikasi
                ]);

        $data_penyakit = $request->penyakit;
        for ($i=0; $i < count($data_penyakit); $i++) { 
            DB::table('gejala_penyakit')->insert([
                'gejala_id' => $gejala->id_gejala,
                'penyakit_id' => $data_penyakit[$i]
            ]);
        }

        return redirect('/gejala-penyakit');
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
        $gejala = DB::table('gejala')
                    ->join('klasifikasi_gejala', 'gejala.klasifikasi_gejala_id', '=', 'klasifikasi_gejala.id_klasifikasi_gejala')
                    ->where('id_gejala', $id)
                    ->get();
        return view('gejala.edit', compact('gejala'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('gejala')->where('id_gejala', $id)->update([
            "gejala" => $request->gejala,
            "klasifikasi_gejala_id" => $request->klasifikasi
        ]);
        return redirect('/gejala-penyakit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
