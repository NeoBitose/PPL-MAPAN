@extends('layouts.master')
@section('content')
  <div class="hero-page bg-primary py-5">
    <div class="container">
      <h1 class="text-white fw-bold text-center">Forum</h1>
    </div>
  </div>
  <div class="container">
    <div class="list-postingan">
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
              <i class="fas fa-bars bars-postingan" id="bars-postingan"></i>
              <div class="content-postingan">
                <div class="container p-0 detail-content-postingan">
                  <div class="box-postingan">
                    <div class="flex">
                      <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M17.71 4.0425C18.1 3.6525 18.1 3.0025 17.71 2.6325L15.37 0.2925C15 -0.0975 14.35 -0.0975 13.96 0.2925L12.12 2.1225L15.87 5.8725M0 14.2525V18.0025H3.75L14.81 6.9325L11.06 3.1825L0 14.2525Z"
                          fill="black" />
                      </svg>
                      <a href="/postingan/{{ $item['id_postingan'] }}/edit">
                        <p>Edit Postingan</p>
                      </a>
                    </div>
                    <div class="flex">
                      <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M17.25 2.57143H12.75V1.60714C12.75 1.1809 12.5525 0.772119 12.2008 0.470721C11.8492 0.169324 11.3723 0 10.875 0H7.125C6.62772 0 6.15081 0.169324 5.79917 0.470721C5.44754 0.772119 5.25 1.1809 5.25 1.60714V2.57143H0.75C0.551088 2.57143 0.360322 2.63916 0.21967 2.75972C0.0790178 2.88028 0 3.04379 0 3.21429C0 3.38478 0.0790178 3.5483 0.21967 3.66885C0.360322 3.78941 0.551088 3.85714 0.75 3.85714H1.54688L2.4375 16.1084C2.50406 17.1872 3.46875 18 4.6875 18H13.3125C14.5373 18 15.4828 17.2053 15.5625 16.1116L16.4531 3.85714H17.25C17.4489 3.85714 17.6397 3.78941 17.7803 3.66885C17.921 3.5483 18 3.38478 18 3.21429C18 3.04379 17.921 2.88028 17.7803 2.75972C17.6397 2.63916 17.4489 2.57143 17.25 2.57143ZM6.02672 15.4286H6C5.80563 15.4287 5.61881 15.3641 5.4789 15.2485C5.33899 15.1328 5.25692 14.9751 5.25 14.8086L4.875 5.80862C4.86791 5.63812 4.94014 5.47219 5.07578 5.34734C5.21142 5.22249 5.39937 5.14893 5.59828 5.14286C5.79719 5.13678 5.99077 5.19869 6.13644 5.31495C6.2821 5.43122 6.36791 5.59232 6.375 5.76281L6.75 14.7628C6.75357 14.8472 6.73769 14.9315 6.70326 15.0106C6.66884 15.0898 6.61654 15.1624 6.54937 15.2242C6.48219 15.286 6.40146 15.3359 6.31178 15.371C6.2221 15.406 6.12523 15.4256 6.02672 15.4286ZM9.75 14.7857C9.75 14.9562 9.67098 15.1197 9.53033 15.2403C9.38968 15.3608 9.19891 15.4286 9 15.4286C8.80109 15.4286 8.61032 15.3608 8.46967 15.2403C8.32902 15.1197 8.25 14.9562 8.25 14.7857V5.78571C8.25 5.61522 8.32902 5.4517 8.46967 5.33115C8.61032 5.21059 8.80109 5.14286 9 5.14286C9.19891 5.14286 9.38968 5.21059 9.53033 5.33115C9.67098 5.4517 9.75 5.61522 9.75 5.78571V14.7857ZM11.25 2.57143H6.75V1.60714C6.74943 1.5648 6.75875 1.52278 6.77739 1.48357C6.79604 1.44435 6.82364 1.40872 6.85857 1.37878C6.89351 1.34883 6.93507 1.32518 6.98083 1.30919C7.02658 1.29321 7.0756 1.28523 7.125 1.28571H10.875C10.9244 1.28523 10.9734 1.29321 11.0192 1.30919C11.0649 1.32518 11.1065 1.34883 11.1414 1.37878C11.1764 1.40872 11.204 1.44435 11.2226 1.48357C11.2413 1.52278 11.2506 1.5648 11.25 1.60714V2.57143ZM12.75 14.8086C12.7431 14.9751 12.661 15.1328 12.5211 15.2485C12.3812 15.3641 12.1944 15.4287 12 15.4286H11.9728C11.8743 15.4256 11.7775 15.406 11.6879 15.3709C11.5983 15.3358 11.5176 15.2859 11.4505 15.2241C11.3833 15.1622 11.3311 15.0897 11.2967 15.0105C11.2623 14.9314 11.2464 14.8472 11.25 14.7628L11.625 5.76281C11.6285 5.67839 11.6514 5.59539 11.6923 5.51854C11.7332 5.4417 11.7914 5.37252 11.8636 5.31495C11.9357 5.25738 12.0203 5.21256 12.1127 5.18303C12.205 5.1535 12.3032 5.13985 12.4017 5.14286C12.5002 5.14586 12.597 5.16547 12.6867 5.20056C12.7763 5.23564 12.8571 5.28552 12.9242 5.34734C12.9914 5.40916 13.0437 5.48172 13.0781 5.56086C13.1126 5.64001 13.1285 5.7242 13.125 5.80862L12.75 14.8086Z"
                          fill="black" />
                      </svg>
                      <form action="/postingan/{{$item['id_postingan']}}" method="post" id="form-delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-confirm">
                          <p>Hapus Postingan</p>
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="judul-postingan">
            <h5>{{ $item['judul'] }}</h5>
            <p>{{ $item['deskripsi'] }}</p>
          </div>
          <div class="gambar-postingan">
            @if ($item['gambar_postingan'] != "")
            <img src="{{ asset('img/postingan/' . $item['gambar_postingan']) }}" alt="">
            @endif
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
                <form action="" class="mt-3" id="add-komentar">
                  <input type="text" name="komentar" placeholder="Ketik komentar anda ...">
                  <button class="btn-comment">Kirim Komentar</button>
                </form>
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
