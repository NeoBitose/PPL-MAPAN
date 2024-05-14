<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostinganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postingan = DB::table('postingan')
                        ->join('users', 'postingan.users_id', "=", "users.id")
                        ->select('id_postingan', 'judul_postingan', "deskripsi", "tgl_upload", "gambar_postingan", "name", "email", "foto_profile", "active_nonactive")
                        ->where('users_id', auth()->user()->id)
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
                "email" => $postingan[$i]->email,
                "foto_profile" => $postingan[$i]->foto_profile,
                "komentar" => $komentar,
                "active_nonactive" => $postingan[$i]->active_nonactive
            ];
        }

        return view('postingan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('postingan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->gambar == "") {
            DB::table('postingan')->insert([
                "judul_postingan" => $request->judul,
                "deskripsi" => $request->deskripsi,
                "tgl_upload" => date('Y-m-d'),
                "users_id" => auth()->user()->id,
            ]);
        } else {
            request()->validate([
                'gambar' => 'mimes:jpg,jpeg,png'
            ]);

            $file = $request->file('gambar');
            $nama_file = Str::random(20) . '.' . $file->extension();
            $file->move('img/postingan', $nama_file);

            DB::table('postingan')->insert([
                "judul_postingan" => $request->judul,
                "deskripsi" => $request->deskripsi,
                "tgl_upload" => date('Y-m-d'),
                "gambar_postingan" => $nama_file,
                "users_id" => auth()->user()->id,
            ]);
        }
        return redirect('/postingan');
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
        $data = DB::table('postingan')
                    ->join('users', 'postingan.users_id', "=", "users.id")
                    ->select('id_postingan', 'judul_postingan', "deskripsi", "tgl_upload", "gambar_postingan", "name", "email")
                    ->where('id_postingan', $id)
                    ->first();
        return view('postingan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        if ($request->gambar == "") {
            DB::table('postingan')->where('id_postingan', $id)->update([
                "judul_postingan" => $request->judul,
                "deskripsi" => $request->deskripsi,
            ]);
        } 
        else {
            request()->validate([
                'gambar' => 'mimes:jpg,jpeg,png'
            ]);

            $data = DB::table('postingan')
                    ->join('users', 'postingan.users_id', "=", "users.id")
                    ->select("gambar_postingan")
                    ->where('id_postingan', $id)
                    ->first();

            if ($data->gambar_postingan != "") {
                unlink(public_path('/img/postingan/') . $data->gambar_postingan);
            }

            $file = $request->file('gambar');
            $nama_file = Str::random(20) . '.' . $file->extension();
            $file->move('img/postingan', $nama_file);

            DB::table('postingan')->where('id_postingan', $id)->update([
                "judul_postingan" => $request->judul,
                "deskripsi" => $request->deskripsi,
                "gambar_postingan" => $nama_file,
            ]);
        }
        return redirect('/postingan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table('postingan')
                    ->join('users', 'postingan.users_id', "=", "users.id")
                    ->select("gambar_postingan")
                    ->where('id_postingan', $id)
                    ->first();
        if ($data->gambar_postingan != "") {
            unlink(public_path('/img/postingan/') . $data->gambar_postingan);
        }
        DB::table('postingan')->where('id_postingan', $id)->delete();

        return redirect('/postingan');
    }

    public function nonaktif_postingan(string $id){
        if (auth()->user()->role == 'user') {
            return redirect()->back();
        }
        DB::table('postingan')->where('id_postingan', $id)->update([
            'active_nonactive' => '0'
        ]);
        return redirect()->back();
    }
}
