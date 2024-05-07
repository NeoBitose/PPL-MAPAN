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

    public function forum()
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
                            ->select('tgl_komentar', 'komentar', 'name', 'email')
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
        // dd($data);
        return view('forum', compact('data'));
    }
}
