<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Dashboard - Mapan</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset('admin/assets/img/brand/favicon.png')}}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('admin/assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('admin/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <!-- Page plugins -->
  <link rel="stylesheet" href="{{asset('admin/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('admin/assets/css/argon.css?v=1.1.0')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('css/style-dash.css')}}">
</head>

<body>
  
  <!-- Sidenav -->
  @include('components.sidebar')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('components.topbar')
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
    </div>
    <div class="container-fluid px-5">
      @yield('content')
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{asset('admin/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <!-- Optional JS -->
  <script src="{{asset('admin/assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/datatables.net-select/js/dataTables.select.min.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset('admin/assets/js/argon.js?v=1.1.0')}}"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="{{asset('admin/assets/js/demo.min.js')}}"></script>
  <!-- Argon JS -->
  <!-- Demo JS - remove this in your project -->
  <script src="{{asset('admin/assets/js/demo.min.js')}}"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  @yield('script')

  <script>

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

    const tambah_penyakit = $('#tambah-penyakit');
    $('.btn-tmbh-penyakit').click(function(e) {
      e.preventDefault();
      // console.log(document.forms["tambah-penyakit"]["definisi-penyakit"].value);
      if (document.getElementById("nama-penyakit").value === null || document.getElementById("definisi-penyakit").value === null || document.getElementById("kendali-teknis").value === "" || document.getElementById("kendali-gejala").value === "") {
        console.log("berhasil");
        Swal.fire({
          title: "Ada data yang masih kosong!",
          text: "",
          icon: "error",
          confirmButtonText: 'Oke',
        }).then((result) => {
          if (result.isConfirmed) {
            console.log("ok kosong");
          }
        });
      }
      else{
        Swal.fire({
          title: 'Apakah anda yakin untuk menambah data??',
          text: '',
          icon: 'question',
          showConfirmButton: true,
          showCancelButton: true,
          confirmButtonText: 'Yakin',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.isConfirmed) {
            console.log("ok")
            tambah_penyakit.submit();
          }
        })
      }
      console.log("ok")
      
    });

    const tambah_gejala = $('#tambah-gejala');
    $('.btn-tmbh-gejala').click(function(e) {
      e.preventDefault();
      let cek_penyakit = 0;
      $(".check-input").each(function() {
        if ($(this).prop("checked")) {
          cek_penyakit += 1
        }
      });
      if (document.getElementById("nama_gejala").value === "" || document.getElementById("klasifikasi").value === "") {
        Swal.fire({
          title: "Ada data yang masih kosong!",
          text: "",
          icon: "error",
          confirmButtonText: 'Oke',
        }).then((result) => {
          if (result.isConfirmed) {
            console.log("ok kosong");
          }
        });
      }
      else if (cek_penyakit <= 0) {
        Swal.fire({
          title: "Ada data yang masih kosong!",
          text: "",
          icon: "error",
          confirmButtonText: 'Oke',
        }).then((result) => {
          if (result.isConfirmed) {
            console.log("ok kosong");
          }
        });
      }
      else {
        Swal.fire({
          title: 'Apakah anda yakin untuk menambah data??',
          text: '',
          icon: 'question',
          showConfirmButton: true,
          showCancelButton: true,
          confirmButtonText: 'Yakin',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.isConfirmed) {
            console.log("ok")
            tambah_gejala.submit();
          }
        })
      }
        
    });
  </script>

</body>

</html>