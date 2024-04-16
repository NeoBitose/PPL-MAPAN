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
  @yield('content')
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
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
