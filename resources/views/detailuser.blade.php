@extends('layouts.master')
@section('content')
  <div class="hero-profile bg-primary"></div>
  <div class="main-profile">
    <div class="container">
      <form action="#">
        <div class="profile-update">
          <div class="card-left">
            <img src="{{ asset('img/pp.png') }}" alt="">
            <h1>{{ auth()->user()->name }}</h1>
            <a href="/profile">
              <button type="button" class="">Edit Akun</button>
            </a>
          </div>
          <div class="card-right">
            <label for="">Email:</label>
            <input type="email" name="" id="" value="{{auth()->user()->email}}">
            <label for="">Nomor Telepon:</label>
            <input type="text" value="{{}}">
            <label for="">Deskripsi Diri:</label>
            <textarea name="" id="" cols="30" rows="5"></textarea>
            <label for="">Alamat</label>
            <textarea name="" id="" cols="30" rows="5"></textarea>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="copyright text-center w-100 bg-dark py-4">
    <h4 class="text-white m-0">MAPAN Copyright © 2024 | Made With Love</h4>
  </div>
@endsection
