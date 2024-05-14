<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class PenyakitController extends Controller
{
    public function getAllPenyakit(){
        $data = [];
        $penyakit = DB::table('penyakit')
                        ->select('id_penyakit','nama_penyakit')
                        ->get();

        for ($i=0; $i < count($penyakit) ; $i++) { 
            $gejala_penyakit = DB::table('gejala_penyakit')
                                ->join('gejala', 'gejala_penyakit.gejala_id', '=', 'gejala.id_gejala')
                                ->where('penyakit_id', $penyakit[$i]->id_penyakit)
                                ->select('gejala')
                                ->get();
            $gp = [];
            for ($j=0; $j < count($gejala_penyakit); $j++) { 
                $gp[$j] = $gejala_penyakit[$j]->gejala;
            }
            $data[$i] = [
                "nama_penyakit" => $penyakit[$i]->nama_penyakit,
                "gejala"=> $gp
            ];
        }

        return response()->json($data);

    }
}
