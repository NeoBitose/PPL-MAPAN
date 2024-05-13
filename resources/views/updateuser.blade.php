@extends('layouts.master')
@section('content')
  <div class="hero-profile bg-primary"></div>
  <div class="main-profile-update">
    <div class="container">
      <div class="card-update-profile">
        <h1 class="">Edit Akun</h1>
        <div class="d-flex gap-5 align-items-center">
          <img src="{{ asset('img/profile/'.auth()->user()->foto_profile) }}" class="" alt="">
          <form action="/hapus-foto/{{auth()->user()->id}}" method="post" class="form-delete-foto">
            @csrf
            <button>Hapus</button>
          </form>
        </div>
        <form action="/update-user/{{auth()->user()->id}}" method="post" class="form-data" enctype="multipart/form-data">
          @csrf
          <label for="">File Foto (Kosongi jika tidak ingin mengubah):</label>
          <input type="file" value="" name="foto">
          <label for="">Nama:</label>
          <input type="text" name="name" value="{{auth()->user()->name}}">
          <label for="">Email:</label>
          <input type="email" name="email" id="" value="{{auth()->user()->email}}">
          <label for="">Password saat ini:</label>
          <input type="password" name="password" value="">
          <label for="">Password Baru:</label>
          <input type="password" name="confirm_password" value="">
          <label for="">Nomor Telepon:</label>
          <input type="text" name="no_telepon" value="{{auth()->user()->no_telepon}}">
          <label for="">Deskripsi Diri:</label>
          <textarea name="deskripsi" id="" cols="30" rows="5">{{auth()->user()->deskripsi_diri}}</textarea>
          <label for="">Alamat</label>
          <textarea name="alamat" id="" cols="30" rows="5">{{auth()->user()->alamat}}</textarea>
          <div class="d-flex justify-content-end">
            <button type="submit" class="bg-primary">Simpan Data</button>
          </div>
        </form>
      </div>
    </div>
    <br><br>
    <div class="copyright text-center w-100 bg-dark py-4">
      <h4 class="text-white m-0">MAPAN Copyright © 2024 | Made With Love</h4>
    </div>
  </div>
  
@endsection
