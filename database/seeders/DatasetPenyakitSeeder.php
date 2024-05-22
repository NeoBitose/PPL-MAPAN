<?php

namespace Database\Seeders;

use App\Models\M_Gejala;
use App\Models\M_KlasifikasiGejala;
use App\Models\M_Penyakit;
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
        $daun =  M_KlasifikasiGejala::create([
            "nama_bagian" => "daun",
        ]);
        $tangkai =  M_KlasifikasiGejala::create([
            "nama_bagian" => "tangkai",
        ]);
        $malai =  M_KlasifikasiGejala::create([
            "nama_bagian" => "malai",
        ]);

        $penyakit_bercak =  M_Penyakit::create([
            "nama_penyakit" => "Bercak Coklat",
            "definisi" => "Penyakit bercak coklat adalah penyakit yang disebabkan oleh jamur Cochliobolus miyabeanus. Penyakit ini menimbulkan bercak berwarna hitam pada kulit gabah. Penyakit ini selain menurunkan hasil tanaman padi juga menurunkan kualitas hasil tanaman padi.",
            "pengendalian_teknis" => "Menggunakan fungisida (seperti iprodion, propikonazol, azoksistrobin, trifloksistrobin) untuk perlakuan benih.",
            "pengendalian_gejala" => "Merendam benih dalam air panas (53-54 °C) selama 10 hingga 12 menit. Untuk hasil yang lebih baik, tempatkan benih selama 8 jam dalam air dingin sebelum perlakuan air panas tersebut.",
            "foto_penyakit" => "bercak_coklat.jpg" 
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Bercak pada tangkai",
            "klasifikasi_gejala_id" => $tangkai->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_bercak->id_penyakit,
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Bercak muda berbentuk bulat kecil berwarna coklat gelap",
            "klasifikasi_gejala_id" => $tangkai->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_bercak->id_penyakit,
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Bercak pada daun berbentuk oval",
            "klasifikasi_gejala_id" => $daun->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_bercak->id_penyakit,
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Pada kulit gabah bercak berwarna hitam",
            "klasifikasi_gejala_id" => $malai->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_bercak->id_penyakit,
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Ukuran bercak bisa mencapai 1cm",
            "klasifikasi_gejala_id" => $tangkai->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_bercak->id_penyakit,
        ]);

        $penyakit_blast =  M_Penyakit::create([
            "nama_penyakit" => "Penyakit Blast",
            "definisi" => "Penyakit blas adalah penyakit yang disebabkan oleh jamur Pyricularia oryzae. Ciri penyakit ini dapat dilihat dari gejala khasnya, blas daun berbentuk belah ketupat.",
            "pengendalian_teknis" => "Fungisida yang mengandung azoksistrobin, atau bahan aktif dari keluarga triazolatau strobilurin juga dapat disemprotkan pada tahap pembibitan, anakan dan pertumbuhan buah padi(malai) untuk mengendalikan blas padi. Satu atau dua kali pemberian fungisida pada tahap pertumbuhan malai bisa efektif untuk mengendalikan penyakit ini",
            "pengendalian_gejala" => "Untuk saat ini, masih belum ada pengendalian gejala yang efektif untuk melawan penyakit ini yang tersedia secara komersial.",
            "foto_penyakit" => "blast.jpg"
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Daun dan pelepah terdapat bercak",
            "klasifikasi_gejala_id" => $daun->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_blast->id_penyakit,
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Bercak daun dan pelepah berbentuk belah ketupat",
            "klasifikasi_gejala_id" => $daun->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_blast->id_penyakit,
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Kehampaan malai padi",
            "klasifikasi_gejala_id" => $malai->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_blast->id_penyakit,
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Tangkai mulai membusuk dan patah",
            "klasifikasi_gejala_id" => $tangkai->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_blast->id_penyakit,
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Bercak pada daun berwarna keputih-putihan atau keabu-abuan",
            "klasifikasi_gejala_id" => $daun->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_blast->id_penyakit,
        ]);

        $penyakit_kerdil=  M_Penyakit::create([
            "nama_penyakit" => "Kerdil Rumput",
            "definisi" => "Kerdil rumput merupakan salah satu penyakit penting pada tanaman padi yang disebabkan oleh Rice ragged stunt virus (RRSV), dan ditularkan secara persisten oleh wereng batang cokelat (WBC). Tanaman padi yang terserang kerdil hampa menunjukkan gejala pertumbuhan terhambat (kerdil), daun berwarna hijau gelap, tepi daun tidak rata, berlekuk-lekuk atau sobek-sobek, ujung daun terpilin, terjadi pembengkakan tulang daun atau membentuk puru.",
            "pengendalian_teknis" => "Perlakuan langsung terhadap penyakit virus tidak dimungkinkan, tetapi insektisida dapat digunakan jika jumlah kritis wereng tercapai. Produk berdasarkan abamektin, buprofezin, dan etofenproks.",
            "pengendalian_gejala" => "Perlakuan langsung terhadap penyakit virus tidak dimungkinkan. Ekstrak kernel biji mimba dapat membantu mengurangi populasi wereng cokelat. Wereng cokelat juga bisa ditahan dengan menggenangi persemaian selama sehari, sehingga serangga tenggelam",
            "foto_penyakit" => "rumput_kerdil.jpg"
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Banyak anakan menyerupai rumput",
            "klasifikasi_gejala_id" => $tangkai->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_kerdil->id_penyakit,
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Daun Sempit",
            "klasifikasi_gejala_id" => $daun->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_kerdil->id_penyakit,
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Daun Kaku",
            "klasifikasi_gejala_id" => $daun->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_kerdil->id_penyakit,
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Malai yang dihasikan sedikit bahkan tidak sama sekali",
            "klasifikasi_gejala_id" => $malai->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_kerdil->id_penyakit,
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Daun bercak berwarna coklat",
            "klasifikasi_gejala_id" => $daun->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_kerdil->id_penyakit,
        ]);

        $penyakit_hawar =  M_Penyakit::create([
            "nama_penyakit" => "Hawar Pelepah Padi",
            "definisi" => "Penyakit hawar pelepah padi disebabkan oleh jamur Rhizoctonia solani Kuhn (AG-1), merupakan salah satu penyakit yang saat ini berkembang dan tersebar luas di daerah-daerah penghasil padi di Indonesia. Penanaman secara luas padi varietas unggul tipe pendek beranakan banyak dan dipupuk dengan dosis tinggi terutama urea, dapat meningkatkan keparahan penyakit hawar pelepah. Penyakit hawar pelepah menjadi semakin penting peranannya di dalam sistem produksi padi sawah, terutama di daerah pertanian padi yang intensif.",
            "pengendalian_teknis" => "Untuk mencegah infeksi, gunakan fungisida berikut: heksakonazol 5EC @ 2 ml atau validamisin 3L @ 2 ml atau propikonazol 25 EC @ 1 ml atau trifloksistrobin + tebukonazol @ 0,4 g per liter air (pisahkan semprotan selama dua kali pada interval 15 hari).",
            "pengendalian_gejala" => "Untuk saat ini, masih belum ada pengendalian gejala yang efektif untuk melawan penyakit ini yang tersedia secara komersial.",
            "foto_penyakit" => "hawar_pelepah_daun.jpg"
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Daun yang terserang mengering mulai ujung",
            "klasifikasi_gejala_id" => $daun->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_hawar->id_penyakit,
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Tanda bercak pada pelepah daun dan helai daun",
            "klasifikasi_gejala_id" => $daun->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_hawar->id_penyakit,
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Gabah tidak terisi penuh hampa",
            "klasifikasi_gejala_id" => $malai->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_hawar->id_penyakit,
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Tanaman mulai rebah",
            "klasifikasi_gejala_id" => $tangkai->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_hawar->id_penyakit,
        ]);

        $penyakit_tungro =  M_Penyakit::create([
            "nama_penyakit" => "Tungro",
            "definisi" => "Penyakit tungro berasal dari virus yang ditularkan oleh wereng hijau, yaitu Nephotettix impicticeps. Hama wereng bisa mengakibatkan tanaman padi terserang virus setelah tanaman terhisap oleh hama wereng. Tanaman padi yang terinfeksi virus-virus tungro umumnya tampak kerdil dan daun berwarna kuning terutama pada daun muda.",
            "pengendalian_teknis" => "Penyemprotan insektisida berdasarkan buprofezin atau pimetrozin pada 15 dan 30 hari setelah tanam dapat berhasil jika dilakukan tepat waktu. Namun, serangga dapat berpindah ke lahan di sekitarnya dan menyebarkan tungro dengan cepat dalam waktu yang sangat singkat. Karena itu, tumbuhan di sekitar lahan juga harus disemprot dengan insektisida. Hindari produk-produk yang didasarkan pada klorpirifos, lamda sihalotrin atau kombinasi piretroid sintetik lainnya, yang membuat wereng daun menjadi agak kebal.",
            "pengendalian_gejala" => "Perangkap cahaya telah berhasil digunakan untuk menarik dan mengendalikan vektor wereng hijau serta memantau populasi. Di pagi hari, populasi wereng yang hinggap di dekat perangkap cahaya harus ditangkap dan dibuang, atau dibunuh dengan cara disemprot / ditabur dengan insektisida. Ini harus dilakukan setiap hari.",
            "foto_penyakit" => "tungro.jpg"
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Pertumbuhan tanaman kerdil",
            "klasifikasi_gejala_id" => $tangkai->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_tungro->id_penyakit,
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Pelepah daun memendek",
            "klasifikasi_gejala_id" => $daun->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_tungro->id_penyakit,
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Daun menguning sampai jingga dari pucuk",
            "klasifikasi_gejala_id" => $daun->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_tungro->id_penyakit,
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Tanaman menjadi kerdil",
            "klasifikasi_gejala_id" => $tangkai->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_tungro->id_penyakit,
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Daun tua ada bintik-bintik bekas tusukan serangga penular",
            "klasifikasi_gejala_id" => $daun->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_tungro->id_penyakit,
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Berkurangnya jumlah anakan",
            "klasifikasi_gejala_id" => $tangkai->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_tungro->id_penyakit,
        ]);

        $penyakit_kresek =  M_Penyakit::create([
            "nama_penyakit" => "Kresek",
            "definisi" => "Penyakit kresek pada tanaman padi disebabkan oleh bakteri Xanthomonas oryzae, yang dimana serangan oleh bakteri ini dapat mengakibatkan kerusakan tanaman dan juga dapat menurunkan hasil produksi tanaman padi. Bahkan, dalam serangan berat dapat mengakibatkan terjadinya puso. Serangan penyakit ini dapat terjadi pada fase bibit, tanaman muda dan tanaman tua.",
            "pengendalian_teknis" => "Untuk memerangi penyakit kresek, perawatan benih dengan antibiotik resmi dengan tambahan tembaga oksiklorida atau tembaga sulfat telah direkomendasikan. Penggunaan antibiotik sangat dibatasi di beberapa negara, mohon cari tahu langkah-langkah penanganan yang berlaku di negara Anda.",
            "pengendalian_gejala" => "Hingga hari ini, tidak ada produk alami yang tersedia secara komersial untuk mengendalikan penyakit kresek pada padi. Penyemprotan produk berbahan dasar tembaga dapat membantu meringankan atau mengurangi gejala tetapi tidak dapat mengendalikan penyakit.",
            "foto_penyakit" => "kresek.jpg"
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Umumnya menyerang pada tanaman muda 1 sampai 2 minggu",
            "klasifikasi_gejala_id" => $daun->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_kresek->id_penyakit,
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Serangan terjadi pada daun yang luka berupa bercak kebasahan",
            "klasifikasi_gejala_id" => $daun->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_kresek->id_penyakit,
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Warna bercak hijau keabu-abuan",
            "klasifikasi_gejala_id" => $daun->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_kresek->id_penyakit,
        ]);
        $gejala =  M_Gejala::create([
            "gejala" => "Daun menggulung, mengering warna abu-abu keputihan",
            "klasifikasi_gejala_id" => $daun->id_klasifikasi_gejala,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => $gejala->id_gejala,
            'penyakit_id' => $penyakit_kresek->id_penyakit,
        ]);

    }
}
