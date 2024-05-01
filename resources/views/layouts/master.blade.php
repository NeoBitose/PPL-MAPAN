<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mapan | Media Pakar Tanaman</title>
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('fontawesome/css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('fontawesome/css/brands.css') }}">
  <link rel="stylesheet" href="{{ asset('fontawesome/css/solid.css') }}">
</head>

<body>
  <nav class="bg-white navbar fixed-top navbar-expand-lg ">
    <div class="container w-100 bg-white contain-nav">
      <a class="w-25 navbar-brand" href="#">
        <img src="{{ asset('img/logo_mapan.png') }}" alt=""> Mapan
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <div class="d-lg-flex d-sm-block w-100">
          <ul class="navbar-nav me-auto mb-3 mb-lg-0 w-50 justify-content-end">
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
            @if (auth()->user())
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button class="bg-danger">Logout</button>
          </form>
            @else
            <a href="/login"><button class="bg-warning">Login</button></a>
            @endif
          </div>
        </div>
      </div>
    </div>
  </nav>
  @yield('content')
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script>
    const form = $('#form-deteksi');
    $('.confirm').click(function(e) {
      e.preventDefault();

      let cek = 0;
      $(".form-check-input").each(function() {
        // Memeriksa apakah checkbox sedang dicentang
        if ($(this).prop("checked")) {
          cek += 1
        }
      });
      if (cek <= 0) {
        console.log("kosong")
        Swal.fire({
          title: "Data tidak boleh kosong",
          text: "",
          icon: "error",
          confirmButtonText: 'Oke',
        }).then((result) => {
          if (result.isConfirmed) {
            location.href = '/diagnosa';
          }
        });
      } else {
        console.log("ok")
        Swal.fire({
          title: 'Apakah Inputan Sudah Sesuai?',
          text: 'semakin sedikit inputan semakin tidak akurat (Optional input: 3)',
          icon: 'question',
          showConfirmButton: true,
          showCancelButton: true,
          confirmButtonText: 'Sudah',
          cancelButtonText: 'Belum'
        }).then((result) => {
          if (result.isConfirmed) {
            console.log("ok")
            form.submit();
          }
        })
      }

    });


    function submit_diagnosa() {

    }

    // $('.confirm').click(function(event) {

    //     //This will choose the closest form to the button
    //     var form = $('#form-deteksi');

    //     //don't let the form submit yet
    //     event.preventDefault();

    //     //configure sweetalert alert as you wish

    //   }).then((result) => {
    //     console.log(result)
    //     //in case of deletion confirm then make the form submit
    //     if (result.isConfirmed) {
    //       form.submit();
    //     }
    //   })
  </script>
</body>

</html>
