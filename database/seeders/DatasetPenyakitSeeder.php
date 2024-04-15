<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatasetPenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $daun =  DB::table('klasifikasi_gejala')->insert([
            "nama_bagian" => "daun",
        ]);
        $tangkai =  DB::table('klasifikasi_gejala')->insert([
            "nama_bagian" => "tangkai",
        ]);
        $malai =  DB::table('klasifikasi_gejala')->insert([
            "nama_bagian" => "malai",
        ]);

        $penyakit =  DB::table('penyakit')->insert([
            "nama_penyakit" => "Bercak Coklat",
            "definisi" => "lorem",
            "penyebab" => "lorem",
            "pengendalian_teknis" => "lorem",
            "pengendalian_gejala" => "lorem",
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Bercak pada tangkai",
            "klasifikasi_gejala_id" => 2,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 1,
            'penyakit_id' => 1,
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Bercak muda berbentuk bulat kecil berwarna coklat gelap",
            "klasifikasi_gejala_id" => 2,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 2,
            'penyakit_id' => 1,
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Bercak pada daun berbentuk oval",
            "klasifikasi_gejala_id" => 1,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 3,
            'penyakit_id' => 1,
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Pada kulit gabah bercak berwarna hitam",
            "klasifikasi_gejala_id" => 3,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 4,
            'penyakit_id' => 1,
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Ukuran bercak bisa mencapai 1cm",
            "klasifikasi_gejala_id" => 2,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 5,
            'penyakit_id' => 1,
        ]);

        $penyakit =  DB::table('penyakit')->insert([
            "nama_penyakit" => "Penyakit Blast",
            "definisi" => "lorem",
            "penyebab" => "lorem",
            "pengendalian_teknis" => "lorem",
            "pengendalian_gejala" => "lorem",
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Daun dan pelepah terdapat bercak",
            "klasifikasi_gejala_id" => 1,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 6,
            'penyakit_id' => 2,
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Bercak daun dan pelepah berbentuk belah ketupat",
            "klasifikasi_gejala_id" => 1,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 7,
            'penyakit_id' => 2,
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Kehampaan malai padi",
            "klasifikasi_gejala_id" => 3,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 8,
            'penyakit_id' => 2,
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Tangkai mulai membusuk dan patah",
            "klasifikasi_gejala_id" => 2,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 9,
            'penyakit_id' => 2,
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Bercak pada daun berwarna keputih-putihan/keabu-abuan",
            "klasifikasi_gejala_id" => 1,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 10,
            'penyakit_id' => 2,
        ]);

        $penyakit =  DB::table('penyakit')->insert([
            "nama_penyakit" => "Kerdil Rumput",
            "definisi" => "lorem",
            "penyebab" => "lorem",
            "pengendalian_teknis" => "lorem",
            "pengendalian_gejala" => "lorem",
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Banyak anakan menyerupai rumput",
            "klasifikasi_gejala_id" => 2,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 11,
            'penyakit_id' => 3,
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Daun Sempit",
            "klasifikasi_gejala_id" => 1,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 12,
            'penyakit_id' => 3,
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Daun Kaku",
            "klasifikasi_gejala_id" => 1,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 13,
            'penyakit_id' => 3,
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Malai yang dihasikan sedikit bahkan tidak sama sekali",
            "klasifikasi_gejala_id" => 3,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 14,
            'penyakit_id' => 3,
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Daun bercak berwarna coklat",
            "klasifikasi_gejala_id" => 1,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 15,
            'penyakit_id' => 3,
        ]);

        $penyakit =  DB::table('penyakit')->insert([
            "nama_penyakit" => "Hawar Pelepah Daun",
            "definisi" => "lorem",
            "penyebab" => "lorem",
            "pengendalian_teknis" => "lorem",
            "pengendalian_gejala" => "lorem",
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Daun yang terserang mengering mulai ujung",
            "klasifikasi_gejala_id" => 1,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 16,
            'penyakit_id' => 4,
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Tanda bercak pada pelepah daun dan helai daun",
            "klasifikasi_gejala_id" => 1,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 17,
            'penyakit_id' => 4,
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Gabah tidak terisi penuh/hampa",
            "klasifikasi_gejala_id" => 3,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 18,
            'penyakit_id' => 4,
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Tanaman mulai rebah",
            "klasifikasi_gejala_id" => 2,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 19,
            'penyakit_id' => 4,
        ]);

        $penyakit =  DB::table('penyakit')->insert([
            "nama_penyakit" => "Tungro",
            "definisi" => "lorem",
            "penyebab" => "lorem",
            "pengendalian_teknis" => "lorem",
            "pengendalian_gejala" => "lorem",
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Pertumbuhan tanaman kerdil",
            "klasifikasi_gejala_id" => 2,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 20,
            'penyakit_id' => 5,
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Pelepah daun memendek",
            "klasifikasi_gejala_id" => 1,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 21,
            'penyakit_id' => 5,
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Daun menguning sampai jingga dari pucuk",
            "klasifikasi_gejala_id" => 1,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 22,
            'penyakit_id' => 5,
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Tanaman menjadi kerdil",
            "klasifikasi_gejala_id" => 2,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 23,
            'penyakit_id' => 5,
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Daun tua ada bintik-bintik bekas tusukan serangga penular",
            "klasifikasi_gejala_id" => 1,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 24,
            'penyakit_id' => 5,
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Berkurangnya jumlah anakan",
            "klasifikasi_gejala_id" => 2,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 25,
            'penyakit_id' => 5,
        ]);

        $penyakit =  DB::table('penyakit')->insert([
            "nama_penyakit" => "Kresek",
            "definisi" => "lorem",
            "penyebab" => "lorem",
            "pengendalian_teknis" => "lorem",
            "pengendalian_gejala" => "lorem",
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Umumnya menyerang pada tanaman muda (1-2 minggu)",
            "klasifikasi_gejala_id" => 1,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 26,
            'penyakit_id' => 6,
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Serangan terjadi pada daun yang luka berupa bercak kebasahan",
            "klasifikasi_gejala_id" => 1,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 27,
            'penyakit_id' => 6,
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Warna bercak hijau keabu-abuan",
            "klasifikasi_gejala_id" => 1,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 28,
            'penyakit_id' => 6,
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Daun menggulung, mengering warna abu-abu keputihan",
            "klasifikasi_gejala_id" => 1,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 29,
            'penyakit_id' => 6,
        ]);

    }
}
