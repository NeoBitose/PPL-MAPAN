@extends('layouts.master')
@section('content')
  <div class="hero-page bg-primary py-5">
    <div class="container">
      <h1 class="text-white fw-bold text-center">Forum</h1>
    </div>
  </div>
  <div class="container">
    <div class="list-postingan">
      <div class="card-postingan">
        <div class="user-postingan">
          <img src="{{ asset('img/pp.png') }}" alt="">
          <div class="user-detail">
            <h5>Alif_Ramadhan</h5>
            <h6>04 Mei 2024</h6>
          </div>
        </div>
        <div class="judul-postingan">
          <h5>Informasi Seputar Pupuk</h5>
          <p>Susahnya cari pupuk luur...udah masuk kelompok tani tpi tetep ngk semua anggota dapet pupuk ...untung ada
            anggota lain yg kebetulan lgi ngk nyawah jdi bantuannya bisa diambil alih ...inipun cuma dapet urea 5
            ,,poska 3 karung...sedangkan untuk nyawah 1,5 hektar... Knp ya peraturan sekarang tambah ribet</p>
        </div>
        <div class="gambar-postingan">
          <img src="{{asset('img/sawah.jpg')}}" alt="">
        </div>
        <div class="komentar">
          <div class="d-flex align-items-center">
            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M30.625 16.7709C30.63 18.6957 30.1803 20.5945 29.3125 22.3125C28.2835 24.3713 26.7017 26.103 24.7442 27.3136C22.7867 28.5241 20.5308 29.1658 18.2292 29.1667C16.3044 29.1717 14.4056 28.722 12.6875 27.8542L4.375 30.625L7.14583 22.3125C6.27802 20.5945 5.82831 18.6957 5.83333 16.7709C5.83422 14.4693 6.47589 12.2134 7.68647 10.2558C8.89704 8.29832 10.6287 6.71649 12.6875 5.68754C14.4056 4.81973 16.3044 4.37002 18.2292 4.37504H18.9583C21.998 4.54274 24.869 5.82574 27.0217 7.97838C29.1743 10.131 30.4573 13.002 30.625 16.0417V16.7709Z"
                stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <h6>0 Komentar</h6>
          </div>
          <form action="" class="mt-3">
            <input type="text" name="komentar" placeholder="Ketik komentar anda ...">
            <button class="btn-comment">Kirim Komentar</button>
          </form>
        </div>
        <div class="list-komentar">
          <div class="detail-komentar">
            <h6>Aril Ganteng</h6>
            <p>Pemerintah cuma omongan agar di pilih ingin mensejahterakan petani bahan pertanian susah di dapat dan
              mahal tidak usah subsidi asalkan gampang di dapat tapi harga gaba prklo 15 ribu</p>
            <p class="tgl-komentar">05 Mei 2024</p>
          </div>
          <div class="detail-komentar">
            <h6>Aril Ganteng</h6>
            <p>Pemerintah cuma omongan agar di pilih ingin mensejahterakan petani bahan pertanian susah di dapat dan
              mahal tidak usah subsidi asalkan gampang di dapat tapi harga gaba prklo 15 ribu</p>
            <p class="tgl-komentar">05 Mei 2024</p>
          </div>
        </div>
      </div>
      <div class="card-postingan">
        <div class="user-postingan">
          <img src="{{ asset('img/pp.png') }}" alt="">
          <div class="user-detail">
            <h5>Alif_Ramadhan</h5>
            <h6>04 Mei 2024</h6>
          </div>
        </div>
        <div class="judul-postingan">
          <h5>Informasi Seputar Pupuk</h5>
          <p>Susahnya cari pupuk luur...udah masuk kelompok tani tpi tetep ngk semua anggota dapet pupuk ...untung ada
            anggota lain yg kebetulan lgi ngk nyawah jdi bantuannya bisa diambil alih ...inipun cuma dapet urea 5
            ,,poska 3 karung...sedangkan untuk nyawah 1,5 hektar... Knp ya peraturan sekarang tambah ribet</p>
        </div>
        <div class="gambar-postingan">
          <img src="{{asset('img/bg-auth.png')}}" alt="">
        </div>
        <div class="komentar">
          <div class="d-flex align-items-center">
            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M30.625 16.7709C30.63 18.6957 30.1803 20.5945 29.3125 22.3125C28.2835 24.3713 26.7017 26.103 24.7442 27.3136C22.7867 28.5241 20.5308 29.1658 18.2292 29.1667C16.3044 29.1717 14.4056 28.722 12.6875 27.8542L4.375 30.625L7.14583 22.3125C6.27802 20.5945 5.82831 18.6957 5.83333 16.7709C5.83422 14.4693 6.47589 12.2134 7.68647 10.2558C8.89704 8.29832 10.6287 6.71649 12.6875 5.68754C14.4056 4.81973 16.3044 4.37002 18.2292 4.37504H18.9583C21.998 4.54274 24.869 5.82574 27.0217 7.97838C29.1743 10.131 30.4573 13.002 30.625 16.0417V16.7709Z"
                stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <h6>0 Komentar</h6>
          </div>
          <form action="" class="mt-3">
            <input type="text" name="komentar" placeholder="Ketik komentar anda ...">
            <button class="btn-comment">Kirim Komentar</button>
          </form>
        </div>
        <div class="list-komentar">
          <div class="detail-komentar">
            <h6>Aril Ganteng</h6>
            <p>Pemerintah cuma omongan agar di pilih ingin mensejahterakan petani bahan pertanian susah di dapat dan
              mahal tidak usah subsidi asalkan gampang di dapat tapi harga gaba prklo 15 ribu</p>
            <p class="tgl-komentar">05 Mei 2024</p>
          </div>
          <div class="detail-komentar">
            <h6>Aril Ganteng</h6>
            <p>Pemerintah cuma omongan agar di pilih ingin mensejahterakan petani bahan pertanian susah di dapat dan
              mahal tidak usah subsidi asalkan gampang di dapat tapi harga gaba prklo 15 ribu</p>
            <p class="tgl-komentar">05 Mei 2024</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
