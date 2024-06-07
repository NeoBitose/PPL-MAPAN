<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postingan = DB::table('postingan')
                        ->join('users', 'postingan.users_id', "=", "users.id")
                        ->select('id', 'id_postingan', 'judul_postingan', "deskripsi", "tgl_upload", "gambar_postingan", "name", "email", "foto_profile")
                        ->where('active_nonactive', 1)
                        ->orderBy('id_postingan', 'desc')
                        ->get();
        $data = [];

        for ($i=0; $i < count($postingan); $i++) { 
            $komentar = DB::table('komentar')
                            ->join('postingan', 'komentar.postingan_id', '=', 'postingan.id_postingan')
                            ->join('users', 'komentar.users_id', '=', 'users.id')
                            ->where('postingan_id', $postingan[$i]->id_postingan)
                            ->select('id_komentar', 'tgl_komentar', 'komentar', 'name', 'email', 'komentar.users_id')
                            ->get();
            $data[$i] = [
                "id_postingan" => $postingan[$i]->id_postingan ,
                "judul" => $postingan[$i]->judul_postingan ,
                "deskripsi" => $postingan[$i]->deskripsi ,
                "tgl_upload" => $postingan[$i]->tgl_upload ,
                "gambar_postingan" => $postingan[$i]->gambar_postingan ,
                "name" => $postingan[$i]->name ,
                "email" => $postingan[$i]->email ,
                "foto_profile" => $postingan[$i]->foto_profile,
                "komentar" => $komentar,
            ];
        }

        return view('forum', compact('data'));
    }

    public function search(Request $request){
        $postingan = DB::table('postingan')
                        ->leftjoin('komentar', 'komentar.postingan_id', '=', 'postingan.id_postingan')
                        ->join('users', 'postingan.users_id', '=', 'users.id')
                        ->select('id_postingan', 'judul_postingan', "deskripsi", "tgl_upload", "gambar_postingan", "name", "email", "foto_profile" , 'komentar', 'active_nonactive')
                        ->where('judul_postingan', 'LIKE', "%$request->cari%")
                        ->orWhere('name', 'LIKE', "%$request->cari%")
                        ->orWhere('komentar', 'LIKE', "%$request->cari%")
                        ->orderBy('id_postingan')
                        ->get();
        // dd($postingan);
        $data = [];

        for ($i=0; $i < count($postingan); $i++) { 
            if ($i<=0) {
                $komentar = DB::table('komentar')
                            ->join('postingan', 'komentar.postingan_id', '=', 'postingan.id_postingan')
                            ->join('users', 'komentar.users_id', '=', 'users.id')
                            ->where('postingan_id', $postingan[$i]->id_postingan)
                            ->select('id_komentar', 'tgl_komentar', 'komentar', 'name', 'email', 'komentar.users_id')
                            ->get();
                $data[$i] = [
                    "id_postingan" => $postingan[$i]->id_postingan ,
                    "judul" => $postingan[$i]->judul_postingan ,
                    "deskripsi" => $postingan[$i]->deskripsi ,
                    "tgl_upload" => $postingan[$i]->tgl_upload ,
                    "gambar_postingan" => $postingan[$i]->gambar_postingan ,
                    "name" => $postingan[$i]->name ,
                    "email" => $postingan[$i]->email,
                    "foto_profile" => $postingan[$i]->foto_profile,
                    "komentar" => $komentar
                ];
            }
            elseif ($i>0) {
                if ($postingan[$i]->id_postingan != $postingan[$i-1]->id_postingan and $postingan[$i]->active_nonactive == 1) {
                    
                    $komentar = DB::table('komentar')
                                ->join('postingan', 'komentar.postingan_id', '=', 'postingan.id_postingan')
                                ->join('users', 'komentar.users_id', '=', 'users.id')
                                ->where('postingan_id', $postingan[$i]->id_postingan)
                                ->select('id_komentar', 'tgl_komentar', 'komentar', 'name', 'email', 'komentar.users_id')
                                ->get();
                    $data[$i] = [
                        "id_postingan" => $postingan[$i]->id_postingan ,
                        "judul" => $postingan[$i]->judul_postingan ,
                        "deskripsi" => $postingan[$i]->deskripsi ,
                        "tgl_upload" => $postingan[$i]->tgl_upload ,
                        "gambar_postingan" => $postingan[$i]->gambar_postingan ,
                        "name" => $postingan[$i]->name ,
                        "email" => $postingan[$i]->email,
                        "foto_profile" => $postingan[$i]->foto_profile,
                        "komentar" => $komentar
                    ];
                } else {
                    continue;
                }
            }           
        }
        return view('forum', compact('data'));
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
}
