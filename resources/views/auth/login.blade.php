@extends('layouts.master-auth')
@section('content')
<div class="container">
  <div class="cover">
    <form name="form-auth" action="/login" method="POST" class="form" id="form-auth">
      @csrf
      <div class="head-form">
        <h1 class="title-form">Selamat Datang Kembali!</h1>
        <span>Silahkan masuk ke akun anda</span>
      </div>
      <div class="flex"><hr class="hr-violet"><a href="/register"><hr class="hr-grey"></a></div>
      <div class="main-form">
        <div class="username input">
          <label class="label" for="username">Username</label>
          <input class="form-input" type="text" name="name" id="username" autofocus>
          <small class="red-text" id="message-username"></small>
        </div>
        <div class="password input">
          <label class="label" for="password">Password</label>
          <input class="form-input" type="password" name="password" id="password">
          <small class="red-text" id="message-password"></small>
        </div>
        <button type="submit" class="btn-form confirm-login">Submit</button>
      </div>
      <div class="footer-form">
        <p>Belum punya akun ? <a href="/register" class="log-reg">Daftar</a></p>
        <p>Atau <a href="/" class="back">Kembali ke halaman awal</a></p>
      </div>
    </form>
  </div>
</div>
@endsection