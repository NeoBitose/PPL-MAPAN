@extends('layouts.master')
@section('content')
  <nav class="bg-white navbar fixed-top navbar-expand-lg ">
    <div class="container w-100 bg-white contain-nav">
      <a class="w-25 navbar-brand align-items-center" href="#">
        <img src="{{asset('img/logo_mapan.png')}}" alt=""> Mapan
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <div class="d-lg-flex d-sm-block w-100">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-50 justify-content-end">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/diagnosa">Deteksi Penyakit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Forum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tentang</a>
            </li>
          </ul>
          <div class="d-lg-flex d-sm-block w-50 justify-content-end">
            <a href="/login"><button class="bg-warning">Login</button></a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div class="hero vw-100 vh-100 d-flex align-items-center">
    <div class="container">
      <div class="hero-desc">
        <h1>Solusi Tepat <br> <span>Media Pakar</span> untuk <br> Tanaman Anda</h1>
        <p>
          Aplikasi Mapan merupakan media pendukung petani milenial <br>
          oleh mahasiswa informatika unej yang membantu dalam <br>
          dignosa penyakit tanaman padi.
        </p>
        <button class="btn btn-outline-success">Jelajahi</button>
      </div>
    </div>
  </div>
  <div class="card-group d-flex align-items-center">
    <div class="contains">
      <div class="row">
        @for ($i = 0; $i < count($penyakit); $i++)
        <div class="col">
          <div class="card" style="">
            <img src="{{asset('img/card-img.png')}}" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center px-5 py-3 text-primary fw-medium fs-4">{{$penyakit[$i]->nama_penyakit}}</h5>
            </div>
          </div>
        </div>
        @endfor
      </div>
    </div>
  </div>
  <div class="footer bg-primary py-5">
    <div class="container">
      <div class="row">
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
              <li><h4>Menu Website</h4></li>
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
              <li><h4>Komunitas</h4></li>
              <li><a href="">HMIF</a></li>
              <li><a href="">KWU HMIF</a></li>
              <li><a href="">Mediatek</a></li>
            </ul>
          </div>
        </div>
        <div class="col-2">
          <div class="footer-link link-1">
            <ul>
              <li><h4>Layanan</h4></li>
              <li><a href="">Tentang</a></li>
              <li><a href="">Terkini</a></li>
              <li><a href="">Testimonial</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <div class="copyright text-center w-100 bg-dark py-4">
    <h4 class="text-white m-0">MAPAN Copyright © 2024 | Made With Love</h4>
  </div>
@endsection
