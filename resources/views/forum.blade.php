@extends('layouts.master')
@section('content')
  <div class="hero-page bg-primary py-5">
    <div class="container">
      <h1 class="text-white fw-bold text-center">Forum</h1>
    </div>
  </div>
  <div class="container">
    <div class="list-postingan">
      <div class="header-forum">
        <div class="btn-postingan">
        @auth
          @if (auth()->user()->role == 'user')
            
              <a href="/postingan/create">
                <button class="bg-primary">Tambah Postingan</button>
              </a>
              <a href="/postingan">
                <button class="bg-warning">Postingan Saya</button>
              </a>
            
          @endif
        @endauth
        </div>
        <div class="search-form">
          <form action="/search" method="post">
            @csrf
            <input type="search" name="cari" id="" placeholder="Cari disini lalu enter">
            {{-- <button type="submit" class="btn-search bg-success">Cari</button> --}}
          </form>
          
        </div>
      </div>
      

      @foreach ($data as $item)
        <div class="card-postingan" id="{{ $item['id_postingan'] }}">
          <div class="d-flex justify-content-between align-items-center">
            <div class="user-postingan">
              <img src="{{ asset('img/profile/' . $item['foto_profile']) }}" alt="">
              <div class="user-detail">
                <h5>{{ $item['name'] }}</h5>
                <h6>{{ $item['email'] }}</h6>
              </div>
            </div>
            <div>
              @auth
                @if (auth()->user()->role == 'admin')
                  <i class="fas fa-bars bars-postingan" id="bars-postingan"></i>
                  <div class="content-postingan">d
                    <div class="container p-0 detail-content-postingan">
                      <div class="nonaktif-postingan">
                        <div class="flex">
                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_456_1545)">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.49306 0.0148544L7.10706 0.0548544C5.23406 0.241854 3.34706 1.20785 2.07106 2.63385C0.660062 4.21085 -0.0569381 6.16785 0.00906191 8.25285C0.124062 11.8539 2.59906 14.9029 6.11006 15.7709C7.14378 16.0205 8.21678 16.0624 9.26682 15.8942C10.3169 15.7259 11.3231 15.3509 12.2271 14.7909C14.0048 13.6832 15.2773 11.9224 15.7711 9.88685C15.9431 9.18585 15.9831 8.82885 15.9831 7.99985C15.9831 7.17085 15.9431 6.81385 15.7711 6.11285C14.9791 2.87785 12.3151 0.497854 9.00006 0.0638544C8.71606 0.0268544 7.68306 -0.00614561 7.49306 0.0148544ZM8.85306 1.56285C9.54368 1.6514 10.215 1.8531 10.8401 2.15985C11.5381 2.49985 12.0201 2.84585 12.5871 3.41285C13.1072 3.91436 13.5318 4.50634 13.8401 5.15985C14.2851 6.07485 14.4861 6.95785 14.4861 7.99985C14.4997 8.99468 14.2733 9.97814 13.8261 10.8669C13.6541 11.2179 13.3071 11.7809 13.1451 11.9719L13.0901 12.0369L8.52706 7.47285L3.96306 2.90985L4.02806 2.85485C4.21906 2.69285 4.78206 2.34585 5.13306 2.17385C6.28428 1.60345 7.57987 1.39065 8.85306 1.56285ZM7.48006 8.53385L12.0401 13.0949L11.9731 13.1479C11.6243 13.4054 11.2543 13.6329 10.8671 13.8279C10.2405 14.1345 9.57021 14.3423 8.88006 14.4439C8.45606 14.5089 7.54406 14.5089 7.12006 14.4439C5.17206 14.1479 3.52806 13.0849 2.49306 11.4509C2.23848 11.0288 2.02612 10.5826 1.85906 10.1189C1.46725 8.96438 1.40184 7.72413 1.67006 6.53485C1.87587 5.67489 2.24822 4.8636 2.76606 4.14685C2.83606 4.05185 2.89906 3.97385 2.90706 3.97385C2.91406 3.97385 4.97206 6.02585 7.48006 8.53385Z"
                                fill="black" />
                            </g>
                            <defs>
                              <clipPath id="clip0_456_1545">
                                <rect width="16" height="16" fill="white" />
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
              @endauth

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
                @if (auth()->user()->role == 'user')
                <form action="/komentar" method="post" class="mt-3" id="add-komentar">
                  @csrf
                  <input type="hidden" name="id_postingan" value="{{ $item['id_postingan'] }}">
                  <input type="text" name="komentar" placeholder="Ketik komentar anda ...">
                  <button class="btn-comment">Kirim Komentar</button>
                </form>
                <form action="komentar/" method="post" class="mt-3" id="edit-komentar">
                  @csrf
                  @method('PUT');
                  <input type="hidden" name="id_postingan" id="id_postingan-input" value="">
                  <input type="text" name="komentar" id="komentar-input" value="">
                  <button class="btn-comment">Kirim Komentar</button>
                </form>
                @endif
                @endauth
                

                <div class="list-komentar mt-4" id="list-komentar">
                  @for ($i = 0; $i < count($item['komentar']); $i++)
                    <div class="detail-komentar">
                      <div class="d-flex justify-content-between align-items-center">
                        <h6>{{ $item['komentar'][$i]->name }}</h6>
                        <div>
                          {{-- <i class="fas fa-bars bars-postingan" id="bars-postingan"></i> --}}
                          @auth
                            @if (auth()->user()->role == 'user' && auth()->user()->id == $item['komentar'][$i]->users_id)
                              <svg class="bars-komentar" width="14" height="14" viewBox="0 0 14 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M7 2.84375C7.36244 2.84375 7.65625 2.54994 7.65625 2.1875C7.65625 1.82506 7.36244 1.53125 7 1.53125C6.63756 1.53125 6.34375 1.82506 6.34375 2.1875C6.34375 2.54994 6.63756 2.84375 7 2.84375Z"
                                  stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                  d="M7 7.65625C7.36244 7.65625 7.65625 7.36244 7.65625 7C7.65625 6.63756 7.36244 6.34375 7 6.34375C6.63756 6.34375 6.34375 6.63756 6.34375 7C6.34375 7.36244 6.63756 7.65625 7 7.65625Z"
                                  stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                  d="M7 12.4688C7.36244 12.4688 7.65625 12.1749 7.65625 11.8125C7.65625 11.4501 7.36244 11.1562 7 11.1562C6.63756 11.1562 6.34375 11.4501 6.34375 11.8125C6.34375 12.1749 6.63756 12.4688 7 12.4688Z"
                                  stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            @endif
                          @endauth
                          <div class="content-komentar">
                            <div class="container p-0 detail-content-komentar">
                              <div class="box-komentar">
                                <div class="flex">

                                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                      d="M17.71 4.0425C18.1 3.6525 18.1 3.0025 17.71 2.6325L15.37 0.2925C15 -0.0975 14.35 -0.0975 13.96 0.2925L12.12 2.1225L15.87 5.8725M0 14.2525V18.0025H3.75L14.81 6.9325L11.06 3.1825L0 14.2525Z"
                                      fill="black" />
                                  </svg>
                                  <a href="#edit-komentar"
                                    onclick="swap_form({{ $item['id_postingan'] }}, {{ $item['komentar'][$i]->id_komentar }}, '{{ $item['komentar'][$i]->komentar }}')"
                                    class="m-0">
                                    <p class="m-0 w-full">Edit Komentar</p>
                                  </a>
                                </div>
                                <div class="flex">
                                  {{-- <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                      d="M17.25 2.57143H12.75V1.60714C12.75 1.1809 12.5525 0.772119 12.2008 0.470721C11.8492 0.169324 11.3723 0 10.875 0H7.125C6.62772 0 6.15081 0.169324 5.79917 0.470721C5.44754 0.772119 5.25 1.1809 5.25 1.60714V2.57143H0.75C0.551088 2.57143 0.360322 2.63916 0.21967 2.75972C0.0790178 2.88028 0 3.04379 0 3.21429C0 3.38478 0.0790178 3.5483 0.21967 3.66885C0.360322 3.78941 0.551088 3.85714 0.75 3.85714H1.54688L2.4375 16.1084C2.50406 17.1872 3.46875 18 4.6875 18H13.3125C14.5373 18 15.4828 17.2053 15.5625 16.1116L16.4531 3.85714H17.25C17.4489 3.85714 17.6397 3.78941 17.7803 3.66885C17.921 3.5483 18 3.38478 18 3.21429C18 3.04379 17.921 2.88028 17.7803 2.75972C17.6397 2.63916 17.4489 2.57143 17.25 2.57143ZM6.02672 15.4286H6C5.80563 15.4287 5.61881 15.3641 5.4789 15.2485C5.33899 15.1328 5.25692 14.9751 5.25 14.8086L4.875 5.80862C4.86791 5.63812 4.94014 5.47219 5.07578 5.34734C5.21142 5.22249 5.39937 5.14893 5.59828 5.14286C5.79719 5.13678 5.99077 5.19869 6.13644 5.31495C6.2821 5.43122 6.36791 5.59232 6.375 5.76281L6.75 14.7628C6.75357 14.8472 6.73769 14.9315 6.70326 15.0106C6.66884 15.0898 6.61654 15.1624 6.54937 15.2242C6.48219 15.286 6.40146 15.3359 6.31178 15.371C6.2221 15.406 6.12523 15.4256 6.02672 15.4286ZM9.75 14.7857C9.75 14.9562 9.67098 15.1197 9.53033 15.2403C9.38968 15.3608 9.19891 15.4286 9 15.4286C8.80109 15.4286 8.61032 15.3608 8.46967 15.2403C8.32902 15.1197 8.25 14.9562 8.25 14.7857V5.78571C8.25 5.61522 8.32902 5.4517 8.46967 5.33115C8.61032 5.21059 8.80109 5.14286 9 5.14286C9.19891 5.14286 9.38968 5.21059 9.53033 5.33115C9.67098 5.4517 9.75 5.61522 9.75 5.78571V14.7857ZM11.25 2.57143H6.75V1.60714C6.74943 1.5648 6.75875 1.52278 6.77739 1.48357C6.79604 1.44435 6.82364 1.40872 6.85857 1.37878C6.89351 1.34883 6.93507 1.32518 6.98083 1.30919C7.02658 1.29321 7.0756 1.28523 7.125 1.28571H10.875C10.9244 1.28523 10.9734 1.29321 11.0192 1.30919C11.0649 1.32518 11.1065 1.34883 11.1414 1.37878C11.1764 1.40872 11.204 1.44435 11.2226 1.48357C11.2413 1.52278 11.2506 1.5648 11.25 1.60714V2.57143ZM12.75 14.8086C12.7431 14.9751 12.661 15.1328 12.5211 15.2485C12.3812 15.3641 12.1944 15.4287 12 15.4286H11.9728C11.8743 15.4256 11.7775 15.406 11.6879 15.3709C11.5983 15.3358 11.5176 15.2859 11.4505 15.2241C11.3833 15.1622 11.3311 15.0897 11.2967 15.0105C11.2623 14.9314 11.2464 14.8472 11.25 14.7628L11.625 5.76281C11.6285 5.67839 11.6514 5.59539 11.6923 5.51854C11.7332 5.4417 11.7914 5.37252 11.8636 5.31495C11.9357 5.25738 12.0203 5.21256 12.1127 5.18303C12.205 5.1535 12.3032 5.13985 12.4017 5.14286C12.5002 5.14586 12.597 5.16547 12.6867 5.20056C12.7763 5.23564 12.8571 5.28552 12.9242 5.34734C12.9914 5.40916 13.0437 5.48172 13.0781 5.56086C13.1126 5.64001 13.1285 5.7242 13.125 5.80862L12.75 14.8086Z"
                                      fill="black" />
                                  </svg> --}}
                                  <img src="{{ asset('/img/icon/delete.png') }}" alt="">
                                  <form action="/komentar/{{ $item['komentar'][$i]->id_komentar }}" method="POST"
                                    id="form-delete-komentar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-komentar-confirm">
                                      <p class="w-full">Hapus Komentar</p>
                                    </button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

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

    var add_komentar = document.querySelector("#add-komentar");
    var edit_komentar = document.querySelector("#edit-komentar");

    add_komentar.style.display = "block";
    edit_komentar.style.display = "none";

    function swap_form($id, $idkomentar, $komentar) {
      add_komentar.style.display = "none";
      edit_komentar.style.display = "block";
      edit_komentar.action = "/komentar/" + $idkomentar;
      document.getElementById("id_postingan-input").value = $id;
      document.getElementById("komentar-input").value = $komentar;
    }
  </script>
@endsection
