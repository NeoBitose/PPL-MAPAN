<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login User</title>
  <link rel="shortcut icon" href="{{ asset('img/logo_mapan.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('css/auth.css')}}">
</head>

<body>
  @include('sweetalert::alert')
  @yield('content')

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  
  <script>
    const form = $('#form-auth');
    $('.confirm-login').click(function(e) {
      e.preventDefault();
      console.log("ok");
      const form_login_username = document.forms["form-auth"]["name"].value;
      const form_login_password = document.forms["form-auth"]["password"].value;

      if (form_login_username == "" || form_login_password == ""){
        Swal.fire({
        title: "Semua data harus diisi!",
        text: "",
        icon: "error",
        confirmButtonText: 'Ok',
        }).then((result) => {
          if (result.isConfirmed) {
            // location.href = '/login';
          }
        });
        return false;
      }
      else if (form_login_password.length  < 8){
        Swal.fire({
        title: "Password minimal 8 karakter",
        text: "",
        icon: "error",
        confirmButtonText: 'Ok',
        }).then((result) => {
          if (result.isConfirmed) {
            // location.href = '/login';
          }
        });
        return false;
      }
      else{
        console.log("ok");
        form.submit();
      }
    });

    $('.confirm-register').click(function(e) {
      e.preventDefault();

      const form_regist_email = document.forms["form-auth"]["email"].value;
      const form_regist_username = document.forms["form-auth"]["name"].value;
      const form_regist_password = document.forms["form-auth"]["password"].value;

      if (form_regist_email == "" || form_regist_username == "" || form_regist_password == ""){
        Swal.fire({
        title: "Semua data harus diisi!",
        text: "",
        icon: "error",
        confirmButtonText: 'Ok',
        }).then((result) => {
          if (result.isConfirmed) {
            // location.href = '/register';
          }
        });
        return false;
      }
      else if (!form_regist_email.includes('@')){
        Swal.fire({
        title: "Email Harus valid, tambahkan '@'",
        text: "",
        icon: "error",
        confirmButtonText: 'Ok',
        }).then((result) => {
          if (result.isConfirmed) {
            // location.href = '/register';
          }
        });
        return false;
      }
      else if (form_regist_password.length < 8){
        Swal.fire({
        title: "Password minimal 8 karakter",
        text: "",
        icon: "error",
        confirmButtonText: 'Ok',
        }).then((result) => {
          if (result.isConfirmed) {
            // location.href = '/register';
          }
        });
        return false;
      }
      else{
        console.log("ok");
        form.submit();
      }
      });
  </script>
</body>

</html>