<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mapan | Media Pakar Tanaman</title>
  <link rel="shortcut icon" href="{{ asset('img/logo_mapan.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('fontawesome/css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('fontawesome/css/brands.css') }}">
  <link rel="stylesheet" href="{{ asset('fontawesome/css/solid.css') }}">
</head>

<body>
  @include('components.navbar')
  @yield('content')
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script>
    
    $(document).ready(function(){
      $(".box-profile").hide();
      $(".profile").click(function(){
        $(".box-profile").toggle();
      });

      // $(".box-postingan").hide();
      // $("#bars-postingan").click(function(){
      //   $(".box-postingan").toggle();
      // });
    });

    var bars_post = document.getElementsByClassName("bars-postingan");
    console.log(bars_post);
    var j;
      for (j = 0; j < bars_post.length; j++) {
        bars_post[j].addEventListener("click", function() {
          /* Toggle between adding and removing the "active" class,
          to highlight the button that controls the panel */
          this.classList.toggle("active-box");

          /* Toggle between hiding and showing the active panel */
          var box_postingan = this.nextElementSibling;
          if (box_postingan.style.display === "flex") {
            box_postingan.style.display = "none";
          } else {
            box_postingan.style.display = "flex";
          }
        });
      }

    const form_logout = $('#form-logout');
    $('.logout').click(function(e) {
      e.preventDefault();
        console.log("ok")
        Swal.fire({
          title: 'Apakah anda yakin untuk keluar?',
          text: '',
          icon: 'question',
          showConfirmButton: true,
          showCancelButton: true,
          confirmButtonText: 'Yakin',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.isConfirmed) {
            console.log("ok")
            form_logout.submit();
          }
        })
    });

    const form_delete = $('#form-delete');
    $('.delete-confirm').click(function(e) {
      e.preventDefault();
        console.log("ok")
        Swal.fire({
          title: 'Apakah anda yakin untuk menghapus postingan ini?',
          text: '',
          icon: 'question',
          showConfirmButton: true,
          showCancelButton: true,
          confirmButtonText: 'Yakin',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.isConfirmed) {
            console.log("ok")
            form_delete.submit();
          }
        })
    });


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
