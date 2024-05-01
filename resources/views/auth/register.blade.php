@extends('layouts.master-auth')
@section('content')
<div class="container">
  <div class="cover">
    <form name="form-auth" action="/register" method="POST"class="form" id="form-auth">
      @csrf
      <div class="head-form">
        <h1 class="title-form">Selamat Datang!</h1>
        <span>Silahkan register akun anda</span>
      </div>
      <div class="flex"><a href="/login"><hr class="hr-grey"></a><hr class="hr-violet"></div>
      <div class="main-form">
        <div class="email input">
          <label class="label" for="email">Email</label>
          <input class="form-input" type="text" name="email" id="email" autofocus>
          <small class="red-text" id="message-email"></small>
        </div>
        <div class="username input">
          <label class="label" for="username">Username</label>
          <input class="form-input" type="text" name="name" id="username">
          <small class="red-text" id="message-username"></small>
        </div>
        <div class="password input">
          <label class="label" for="password">Password</label>
          <input class="form-input" type="password" name="password" id="password">
          <small class="red-text" id="message-password"></small>
        </div>
        <button type="submit" class="btn-form confirm-register">Submit</button>
      </div> 
      <div class="footer-form">
        <p>Sudah punya akun ? <a href="/login">Masuk</a></p>
      </div>
    </form>
  </div>
</div>
@endsection