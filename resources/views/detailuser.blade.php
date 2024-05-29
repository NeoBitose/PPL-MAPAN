@extends('layouts.master')
@section('content')
  <div class="hero-profile bg-primary"></div>
  <div class="main-profile">
    <div class="container">
      <form action="#" class="">
        <div class="profile-data">
          <div class="card-left">
            <img src="{{ asset('img/profile/'.auth()->user()->foto_profile) }}" alt="">
            <h1>{{ auth()->user()->name }}</h1>
            <a href="/edit-user/">
              <button type="button" class="">Edit Akun</button>
            </a>
          </div>
          <div class="card-right">
            <h6>Email:</h6>
            <p>{{auth()->user()->email}}</p>
            <h6>Nomor Telepon:</h6>
            <p>{{auth()->user()->no_telepon}}</p>
            <h6>Deskripsi Diri:</h6>
            <p>{{auth()->user()->deskripsi_diri}}</p>
            <h6>Alamat</h6>
            <p>{{auth()->user()->alamat}}</p>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
