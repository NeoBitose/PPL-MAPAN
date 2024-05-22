@extends('layouts.master')
@section('content')
  <div class="hero vw-100 vh-100 d-flex align-items-center">
    <div class="container">
      <div class="hero-desc">
        <h1>Solusi Tepat <span>Media Pakar</span> untuk <br> Tanaman Anda</h1>
        <p>
          Aplikasi Mapan merupakan media pendukung petani milenial <br>
          oleh mahasiswa informatika unej yang membantu dalam <br>
          dignosa penyakit tanaman padi.
        </p>
        <button class="btn btn-outline-success">Jelajahi</button>
      </div>
    </div>
  </div>
  <div class="card-group">
    <h1 class="title-index">Penyakit Padi</h1>
    <div class="contains">
      <div class="row">
        @for ($i = 0; $i < count($penyakit); $i++)
          <div class="col-6 col-md-4 col-xxl-2 mb-4 mb-lg-0 py-2">
            <div class="card" style="">
              <img src="{{ asset('img/penyakit/' . $penyakit[$i]->foto_penyakit) }}" class="card-img-top img-fluid w-full" alt="...">
              <div class="card-landing card-body">
                <h5 class="card-title text-center px-1 py-1  text-primary fw-medium fs-4">
                  {{ $penyakit[$i]->nama_penyakit }}
                </h5>
              </div>
            </div>
          </div>
        @endfor
      </div>
    </div>
  </div>
  <div class="tentang" id="tentang">
    <h1 class="title-index">Tentang</h1>
    <div class="container tentang-content">
      <div class="tentang-left">
        <img src="{{ asset('img/tentang-img.png') }}" class="img-fluid" alt="">
      </div>
      <div class="tentang-right">
        <p class="mt-2">
          Media Pakar Tanaman (MAPAN) Padi merupakan sebuah website untuk mendukung petani padi millenial dalam menghadapi masalah pada tanaman padinya. MAPAN Padi menawarkan berbagai fitur yang dapat memberikan kenyamanan bagi petani milenial dalam membudidayakan tanamannya.
        </p>
        <h5>Mengapa Harus Kami?</h5>
        <p class="mt-2">
          Dengan menggunakan MAPAN Padi, kami menawarkan keuntungan sebagai berikut:
        </p>
        <table cellspacing="4">
          <tr>
            <td>1. </td>
            <td>Mempermudah petani tanaman padi untuk mengidentifikasi penyakit dan hama pada tanaman padi.</td>
          </tr>
          <tr>
            <td>2. </td>
            <td>Mempermudah petani di dalam komunitas untuk saling bertukar informasi melalui forum digital pada website.</td>
          </tr>
          <tr>
            <td>3. </td>
            <td>Mempermudah petani tanaman padi untuk bertanya mengenai permasalahan tanaman padi.</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="fitur">
    <h1 class="title-index">Fitur Tersedia</h1>
    <div class="container">
      <div class="row">
        <div class="col-12 mb-4 mb-md-0 col-lg-4">
          <div class="card-fitur">
            <img src="{{ asset("/img/icon/AI.png") }}" class="img-fitur" alt="">
            <h5>Deteksi Penyakit Berbasis AI</h5>
            <p>
              Permasalahanmu belum terjawab melalui fitur deteksi penyakit? Tenang, MAPAN Padi juga menyediakan fitur forum yang memberikan kalian akses untuk saling bertanya dan berkomentar mengenai permasalahan padi antar sesama petani padi milenial.
            </p>
            <img src="{{ asset("/img/icon/PANAH.png") }}" alt="">
          </div>
        </div>
        <div class="col-12 mb-4 mb-md-0 col-lg-4">
          <div class="card-fitur">
            <img src="{{ asset("/img/icon/FORUM.png") }}" class="img-fitur" alt="">
            <h5>Forum</h5>
            <p>
              Permasalahanmu belum terjawab melalui fitur deteksi penyakit? Tenang, MAPAN Padi juga menyediakan fitur forum yang memberikan kalian akses untuk saling bertanya dan berkomentar mengenai permasalahan padi antar sesama petani padi milenial.
            </p>
            <img src="{{ asset("/img/icon/PANAH.png") }}" alt="">
          </div>
        </div>
        <div class="col-12 mb-4 mb-md-0 col-lg-4">
          <div class="card-fitur">
            <img src="{{ asset("/img/icon/AKUN.png") }}" class="img-fitur" alt="">
            <h5>Akun</h5>
            <p>
              Permasalahanmu belum terjawab melalui fitur deteksi penyakit? Tenang, MAPAN Padi juga menyediakan fitur forum yang memberikan kalian akses untuk saling bertanya dan berkomentar mengenai permasalahan padi antar sesama petani padi milenial.
            </p>
            <img src="{{ asset("/img/icon/PANAH.png") }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer bg-primary py-5">
    <div class="container footer-content">
      <div class="footer-left">
        <img src="{{ asset('/img/mapan-footer.png') }}" alt="">
        <p>
          Media Pakar Tanaman Padi Berbasis AI
        </p>
      </div>
      <div class="footer-right">
        <div class="footer-link link-1">
          <ul>
            <li>
              <h4>Menu Website</h4>
            </li>
            <li><a href="">Beranda</a></li>
            <li><a href="">Deteksi Penyakit</a></li>
            <li><a href="">Forum</a></li>
            <li><a href="">Tentang</a></li>
            <li><a href="">Akun</a></li>
          </ul>
        </div>
        <div class="kontak"> 
          <h2>Kontak Kami</h2>
          <div class="d-flex align-items-center gap-3 text-white">
            <i class="fas fa-envelope"></i>
            <p class="m-0">mapanunej@gmail.com</p>
          </div>
          <div class="d-flex align-items-center gap-3 text-white mt-3">
            <i class="fab fa-whatsapp fa-2x"></i>
            <p class="m-0">085142487922</p>
          </div>
        </div>
      </div>
      {{-- <div class="row">
        <div class="main-foot col-6">
          <h1>Sosial</h1>
          <div class="d-flex column-gap-4">
            <i class="fas fa-envelope"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-twitter"></i>
          </div>
        </div>
        <div class="col-2">
          <div class="footer-link link-1">
            <ul>
              <li>
                <h4>Menu Website</h4>
              </li>
              <li><a href="">Beranda</a></li>
              <li><a href="">Tentang Kami</a></li>
              <li><a href="">Layanan Usaha</a></li>
              <li><a href="">Produk Kami</a></li>
              <li><a href="">Artikel</a></li>
            </ul>
          </div>
        </div>
        <div class="col-2">
          <div class="footer-link link-1">
            <ul>
              <li>
                <h4>Komunitas</h4>
              </li>
              <li><a href="">HMIF</a></li>
              <li><a href="">KWU HMIF</a></li>
              <li><a href="">Mediatek</a></li>
            </ul>
          </div>
        </div>
        <div class="col-2">
          <div class="footer-link link-1">
            <ul>
              <li>
                <h4>Layanan</h4>
              </li>
              <li><a href="">Tentang</a></li>
              <li><a href="">Terkini</a></li>
              <li><a href="">Testimonial</a></li>
            </ul>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
  
@endsection
