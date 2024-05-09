<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        DB::table('komentar')->insert([
            "komentar" => $request->komentar,
            "users_id" => auth()->user()->id,
            "tgl_komentar" => date("Y-m-d"),
            "postingan_id" => $request->id_postingan
        ]);
        return redirect('/forum#'.$request->id_postingan);
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
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('komentar')->where('id_komentar', $id)->update([
            "komentar" => $request->komentar,
        ]);
        return redirect('/forum');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('komentar')->where('id_komentar', $id)->delete();
        return redirect('/forum');
    }
}
