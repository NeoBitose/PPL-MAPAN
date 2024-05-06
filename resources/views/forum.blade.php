@extends('layouts.master')
@section('content')
  <div class="hero-page bg-primary py-5">
    <div class="container">
      <h1 class="text-white fw-bold text-center">Forum</h1>
    </div>
  </div>
  <div class="container">
    <div class="list-postingan">
      <div class="btn-postingan">
        <a href="">
          <button class="bg-primary">Tambah Postingan</button>
        </a>
        <a href="">
          <button class="bg-warning">Postingan Saya</button>
        </a>
      </div>
      @foreach ($data as $item)
      <div class="card-postingan">
        <div class="user-postingan">
          <img src="{{ asset('img/'.$item->foto_profile) }}" alt="">
          <div class="user-detail">
            <h5>{{$item->name}}</h5>
            <h6>{{$item->email}}</h6>
          </div>
        </div>
        <div class="judul-postingan">
          <h5>{{$item->judul}}</h5>
          <p>{{$item->deskripsi}}</p>
        </div>
        <div class="gambar-postingan">
          <img src="{{asset('img/'.$item->gambar_postingan)}}" alt="">
        </div>
        <div class="komentar">
          <div class="">            
            <h6 class="accordion d-flex gap-2 align-items-center">
              <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M30.625 16.7709C30.63 18.6957 30.1803 20.5945 29.3125 22.3125C28.2835 24.3713 26.7017 26.103 24.7442 27.3136C22.7867 28.5241 20.5308 29.1658 18.2292 29.1667C16.3044 29.1717 14.4056 28.722 12.6875 27.8542L4.375 30.625L7.14583 22.3125C6.27802 20.5945 5.82831 18.6957 5.83333 16.7709C5.83422 14.4693 6.47589 12.2134 7.68647 10.2558C8.89704 8.29832 10.6287 6.71649 12.6875 5.68754C14.4056 4.81973 16.3044 4.37002 18.2292 4.37504H18.9583C21.998 4.54274 24.869 5.82574 27.0217 7.97838C29.1743 10.131 30.4573 13.002 30.625 16.0417V16.7709Z"
                  stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              {{count($item->komentar)}} Komentar
            </h6>
            <div class="panel">
              <form action="" class="mt-3" id="add-komentar">
                <input type="text" name="komentar" placeholder="Ketik komentar anda ...">
                <button class="btn-comment">Kirim Komentar</button>
              </form>
              <div class="list-komentar mt-4" id="list-komentar">
                @for ($i = 0; $i < count($item->komentar); $i++)
                <div class="detail-komentar">
                  <h6>{{$item->komentar[$i]->name}}</h6>
                  <p>{{$item->komentar[$i]->komentar}}</p>
                  <p class="tgl-komentar">{{$item->komentar[$i]->tgl_komentar}}</p>
                </div>
                @endfor
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
      @endforeach
      

    </div>
  </div>
  <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
    }
  </script>
@endsection
