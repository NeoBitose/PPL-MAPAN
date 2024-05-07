@extends('layouts.master')
@section('content')
  <div class="hero-page bg-primary py-5">
    <div class="container">
      <h1 class="text-white fw-bold text-center">Forum</h1>
    </div>
  </div>
  <div class="container">
    <div class="list-postingan">
      @auth
        @if (auth()->user()->role == 'user')
        <div class="btn-postingan">
          <a href="/postingan/create">
            <button class="bg-primary">Tambah Postingan</button>
          </a>
          <a href="/postingan">
            <button class="bg-warning">Postingan Saya</button>
          </a>
        </div>
        @endif
      @endauth

      @foreach ($data as $item)
        <div class="card-postingan">
          <div class="d-flex justify-content-between align-items-center">
            <div class="user-postingan">
              <img src="{{ asset('img/profile/' . $item['foto_profile']) }}" alt="">
              <div class="user-detail">
                <h5>{{ $item['name'] }}</h5>
                <h6>{{ $item['email'] }}</h6>
              </div>
            </div>
            <div>
              @if (auth()->user()->role == 'admin')
                <i class="fas fa-bars bars-postingan" id="bars-postingan"></i>
                <div class="content-postingan">
                  <div class="container p-0 detail-content-postingan">
                    <div class="nonaktif-postingan">
                      <div class="flex">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_456_1545)">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.49306 0.0148544L7.10706 0.0548544C5.23406 0.241854 3.34706 1.20785 2.07106 2.63385C0.660062 4.21085 -0.0569381 6.16785 0.00906191 8.25285C0.124062 11.8539 2.59906 14.9029 6.11006 15.7709C7.14378 16.0205 8.21678 16.0624 9.26682 15.8942C10.3169 15.7259 11.3231 15.3509 12.2271 14.7909C14.0048 13.6832 15.2773 11.9224 15.7711 9.88685C15.9431 9.18585 15.9831 8.82885 15.9831 7.99985C15.9831 7.17085 15.9431 6.81385 15.7711 6.11285C14.9791 2.87785 12.3151 0.497854 9.00006 0.0638544C8.71606 0.0268544 7.68306 -0.00614561 7.49306 0.0148544ZM8.85306 1.56285C9.54368 1.6514 10.215 1.8531 10.8401 2.15985C11.5381 2.49985 12.0201 2.84585 12.5871 3.41285C13.1072 3.91436 13.5318 4.50634 13.8401 5.15985C14.2851 6.07485 14.4861 6.95785 14.4861 7.99985C14.4997 8.99468 14.2733 9.97814 13.8261 10.8669C13.6541 11.2179 13.3071 11.7809 13.1451 11.9719L13.0901 12.0369L8.52706 7.47285L3.96306 2.90985L4.02806 2.85485C4.21906 2.69285 4.78206 2.34585 5.13306 2.17385C6.28428 1.60345 7.57987 1.39065 8.85306 1.56285ZM7.48006 8.53385L12.0401 13.0949L11.9731 13.1479C11.6243 13.4054 11.2543 13.6329 10.8671 13.8279C10.2405 14.1345 9.57021 14.3423 8.88006 14.4439C8.45606 14.5089 7.54406 14.5089 7.12006 14.4439C5.17206 14.1479 3.52806 13.0849 2.49306 11.4509C2.23848 11.0288 2.02612 10.5826 1.85906 10.1189C1.46725 8.96438 1.40184 7.72413 1.67006 6.53485C1.87587 5.67489 2.24822 4.8636 2.76606 4.14685C2.83606 4.05185 2.89906 3.97385 2.90706 3.97385C2.91406 3.97385 4.97206 6.02585 7.48006 8.53385Z" fill="black"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_456_1545">
                          <rect width="16" height="16" fill="white"/>
                          </clipPath>
                          </defs>
                        </svg> 
                        <form action="/nonaktif-postingan/{{ $item['id_postingan'] }}" class="" id="form-nonaktif">
                          @csrf
                          <button type="submit" class="nonaktif-confirm">Nonaktifkan Postingan</button>
                        </form>                       
                      </div>
                    </div>
                  </div>
                </div>
              @endif
            </div>
          </div>
          <div class="judul-postingan">
            <h5>{{ $item['judul'] }}</h5>
            <p>{{ $item['deskripsi'] }}</p>
          </div>
          <div class="gambar-postingan">
            <img src="{{ asset('img/postingan/' . $item['gambar_postingan']) }}" alt="">
          </div>
          <div class="komentar">
            <div class="">
              <h6 class="accordion d-flex gap-2 align-items-center">
                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M30.625 16.7709C30.63 18.6957 30.1803 20.5945 29.3125 22.3125C28.2835 24.3713 26.7017 26.103 24.7442 27.3136C22.7867 28.5241 20.5308 29.1658 18.2292 29.1667C16.3044 29.1717 14.4056 28.722 12.6875 27.8542L4.375 30.625L7.14583 22.3125C6.27802 20.5945 5.82831 18.6957 5.83333 16.7709C5.83422 14.4693 6.47589 12.2134 7.68647 10.2558C8.89704 8.29832 10.6287 6.71649 12.6875 5.68754C14.4056 4.81973 16.3044 4.37002 18.2292 4.37504H18.9583C21.998 4.54274 24.869 5.82574 27.0217 7.97838C29.1743 10.131 30.4573 13.002 30.625 16.0417V16.7709Z"
                    stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                {{ count($item['komentar']) }} Komentar
              </h6>
              <div class="panel">
                @auth
                  <form action="" class="mt-3" id="add-komentar">
                    <input type="text" name="komentar" placeholder="Ketik komentar anda ...">
                    <button class="btn-comment">Kirim Komentar</button>
                  </form>
                @endauth
                <div class="list-komentar mt-4" id="list-komentar">
                  @for ($i = 0; $i < count($item['komentar']); $i++)
                    <div class="detail-komentar">
                      <h6>{{ $item['komentar'][$i]->name }}</h6>
                      <p>{{ $item['komentar'][$i]->komentar }}</p>
                      <p class="tgl-komentar">{{ $item['komentar'][$i]->tgl_komentar }}</p>
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
    console.log(acc);
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
