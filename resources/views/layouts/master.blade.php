<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mapan | Media Pakar Tanaman</title>
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('fontawesome/css/fontawesome.css')}}">
  <link rel="stylesheet" href="{{asset('fontawesome/css/brands.css')}}">
  <link rel="stylesheet" href="{{asset('fontawesome/css/solid.css')}}">
</head>
<body>
  @include('sweetalert::alert')
  @yield('content')
  <script src="{{asset('bootstrap/js/bootstrap.bundle.js')}}"></script>

</body>
</html>