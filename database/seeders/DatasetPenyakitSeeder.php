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
            "definisi" => "Penyakit bercak coklat adalah penyakit yang disebabkan oleh jamur Cochliobolus miyabeanus. Penyakit ini menimbulkan bercak berwarna hitam pada kulit gabah. Penyakit ini selain menurunkan hasil tanaman padi juga menurunkan kualitas hasil tanaman padi.",
            "pengendalian_teknis" => "Menggunakan fungisida (seperti iprodion, propikonazol, azoksistrobin, trifloksistrobin) untuk perlakuan benih.",
            "pengendalian_gejala" => "Merendam benih dalam air panas (53-54 °C) selama 10 hingga 12 menit. Untuk hasil yang lebih baik, tempatkan benih selama 8 jam dalam air dingin sebelum perlakuan air panas tersebut.",
            "foto_penyakit" => "bercak_coklat.jpg" 
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
            "definisi" => "Penyakit blas adalah penyakit yang disebabkan oleh jamur Pyricularia oryzae. Ciri penyakit ini dapat dilihat dari gejala khasnya, blas daun berbentuk belah ketupat.",
            "pengendalian_teknis" => "Fungisida yang mengandung azoksistrobin, atau bahan aktif dari keluarga triazolatau strobilurin juga dapat disemprotkan pada tahap pembibitan, anakan dan pertumbuhan buah padi(malai) untuk mengendalikan blas padi. Satu atau dua kali pemberian fungisida pada tahap pertumbuhan malai bisa efektif untuk mengendalikan penyakit ini",
            "pengendalian_gejala" => "Untuk saat ini, masih belum ada pengendalian gejala yang efektif untuk melawan penyakit ini yang tersedia secara komersial.",
            "foto_penyakit" => "blast.jpg"
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
            "gejala" => "Bercak pada daun berwarna keputih-putihan atau keabu-abuan",
            "klasifikasi_gejala_id" => 1,
        ]);
        DB::table('gejala_penyakit')->insert([
            'gejala_id' => 10,
            'penyakit_id' => 2,
        ]);

        $penyakit =  DB::table('penyakit')->insert([
            "nama_penyakit" => "Kerdil Rumput",
            "definisi" => "Kerdil rumput merupakan salah satu penyakit penting pada tanaman padi yang disebabkan oleh Rice ragged stunt virus (RRSV), dan ditularkan secara persisten oleh wereng batang cokelat (WBC). Tanaman padi yang terserang kerdil hampa menunjukkan gejala pertumbuhan terhambat (kerdil), daun berwarna hijau gelap, tepi daun tidak rata, berlekuk-lekuk atau sobek-sobek, ujung daun terpilin, terjadi pembengkakan tulang daun atau membentuk puru.",
            "pengendalian_teknis" => "Perlakuan langsung terhadap penyakit virus tidak dimungkinkan, tetapi insektisida dapat digunakan jika jumlah kritis wereng tercapai. Produk berdasarkan abamektin, buprofezin, dan etofenproks.",
            "pengendalian_gejala" => "Perlakuan langsung terhadap penyakit virus tidak dimungkinkan. Ekstrak kernel biji mimba dapat membantu mengurangi populasi wereng cokelat. Wereng cokelat juga bisa ditahan dengan menggenangi persemaian selama sehari, sehingga serangga tenggelam",
            "foto_penyakit" => "rumput_kerdil.jpg"
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
            "nama_penyakit" => "Hawar Pelepah Padi",
            "definisi" => "Penyakit hawar pelepah padi disebabkan oleh jamur Rhizoctonia solani Kuhn (AG-1), merupakan salah satu penyakit yang saat ini berkembang dan tersebar luas di daerah-daerah penghasil padi di Indonesia. Penanaman secara luas padi varietas unggul tipe pendek beranakan banyak dan dipupuk dengan dosis tinggi terutama urea, dapat meningkatkan keparahan penyakit hawar pelepah. Penyakit hawar pelepah menjadi semakin penting peranannya di dalam sistem produksi padi sawah, terutama di daerah pertanian padi yang intensif.",
            "pengendalian_teknis" => "Untuk mencegah infeksi, gunakan fungisida berikut: heksakonazol 5EC @ 2 ml atau validamisin 3L @ 2 ml atau propikonazol 25 EC @ 1 ml atau trifloksistrobin + tebukonazol @ 0,4 g per liter air (pisahkan semprotan selama dua kali pada interval 15 hari).",
            "pengendalian_gejala" => "Untuk saat ini, masih belum ada pengendalian gejala yang efektif untuk melawan penyakit ini yang tersedia secara komersial.",
            "foto_penyakit" => "hawar_pelepah_daun.jpg"
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
            "gejala" => "Gabah tidak terisi penuh hampa",
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
            "definisi" => "Penyakit tungro berasal dari virus yang ditularkan oleh wereng hijau, yaitu Nephotettix impicticeps. Hama wereng bisa mengakibatkan tanaman padi terserang virus setelah tanaman terhisap oleh hama wereng. Tanaman padi yang terinfeksi virus-virus tungro umumnya tampak kerdil dan daun berwarna kuning terutama pada daun muda.",
            "pengendalian_teknis" => "Penyemprotan insektisida berdasarkan buprofezin atau pimetrozin pada 15 dan 30 hari setelah tanam dapat berhasil jika dilakukan tepat waktu. Namun, serangga dapat berpindah ke lahan di sekitarnya dan menyebarkan tungro dengan cepat dalam waktu yang sangat singkat. Karena itu, tumbuhan di sekitar lahan juga harus disemprot dengan insektisida. Hindari produk-produk yang didasarkan pada klorpirifos, lamda sihalotrin atau kombinasi piretroid sintetik lainnya, yang membuat wereng daun menjadi agak kebal.",
            "pengendalian_gejala" => "Perangkap cahaya telah berhasil digunakan untuk menarik dan mengendalikan vektor wereng hijau serta memantau populasi. Di pagi hari, populasi wereng yang hinggap di dekat perangkap cahaya harus ditangkap dan dibuang, atau dibunuh dengan cara disemprot / ditabur dengan insektisida. Ini harus dilakukan setiap hari.",
            "foto_penyakit" => "tungro.jpg"
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
            "definisi" => "Penyakit kresek pada tanaman padi disebabkan oleh bakteri Xanthomonas oryzae, yang dimana serangan oleh bakteri ini dapat mengakibatkan kerusakan tanaman dan juga dapat menurunkan hasil produksi tanaman padi. Bahkan, dalam serangan berat dapat mengakibatkan terjadinya puso. Serangan penyakit ini dapat terjadi pada fase bibit, tanaman muda dan tanaman tua.",
            "pengendalian_teknis" => "Untuk memerangi penyakit kresek, perawatan benih dengan antibiotik resmi dengan tambahan tembaga oksiklorida atau tembaga sulfat telah direkomendasikan. Penggunaan antibiotik sangat dibatasi di beberapa negara, mohon cari tahu langkah-langkah penanganan yang berlaku di negara Anda.",
            "pengendalian_gejala" => "Hingga hari ini, tidak ada produk alami yang tersedia secara komersial untuk mengendalikan penyakit kresek pada padi. Penyemprotan produk berbahan dasar tembaga dapat membantu meringankan atau mengurangi gejala tetapi tidak dapat mengendalikan penyakit.",
            "foto_penyakit" => "kresek.jpg"
        ]);
        $gejala =  DB::table('gejala')->insert([
            "gejala" => "Umumnya menyerang pada tanaman muda 1 sampai 2 minggu",
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
