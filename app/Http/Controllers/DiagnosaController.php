<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;

class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $param;
    public function index()
    {
        $daun = Gejala::join('klasifikasi_gejala', 'gejala.klasifikasi_gejala_id', '=', 'klasifikasi_gejala.id_klasifikasi_gejala')
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
        $this->param['diagnosa'] = [0=>null];
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

        $gejala = $request->gejala;
        $input = "";
        for ($i=0; $i < count($gejala); $i++) { 
            if ($i == 0) {
                $input = $gejala[$i];
            }else{
                $input = $input." ".$gejala[$i];
            }
        }
        try {
            $response = Http::withUrlParameters([
                'endpoint' => 'http://127.0.0.1:5000',
                'gejala' => $input,
            ])->acceptJson()->get('{+endpoint}/diagnosa/{gejala}');

            $resp = $response->json();
            
            $diags = DB::table('penyakit')
                    ->where('nama_penyakit', $resp[0]["name"])
                    ->first();
            $this->param['diagnosa'] = [$diags];
            
            $probabilitas = [];

            for ($i=0; $i < 3; $i++) { 
                $int = floatval($resp[1][$i]["value"]);
                // dd($int);
                $persen = ($int / 1) * 100;
                $probabilitas[$i] = [$resp[1][$i]["name"], $persen];
            }
            
            $this->param['probabilitas'] = [$probabilitas];
            // dd($probabilitas);
        } 
        catch (\Throwable $e) {
            echo("<script>alert('Model Gagal Diakses!');window.location.href = '/diagnosa'</script>");
        }
        // dd($diags->nama_penyakit);
        // dd($probabilitas[0][1]);
        return view('diagnosa', $this->param);
    }
}
