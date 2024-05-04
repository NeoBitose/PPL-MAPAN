@extends('layouts.master')
@section('content')
  <div class="hero-profile bg-primary"></div>
  <div class="main-profile-update">
    <div class="container">
      <div class="card-update-profile">
        <h1 class="">Edit Akun</h1>
        <div class="d-flex gap-5 align-items-center">
          <img src="{{asset('img/pp.png')}}" class="" alt="">
          <form action="" class="form-delete-foto">
            <button>Hapus</button>
          </form>
        </div>
        <form action="" class="form-update">
          <label for="">File Foto (Kosongi jika tidak ingin mengubah):</label>
          <input type="text" value="">
          <label for="">Nama:</label>
          <input type="text" value="">
          <label for="">Email:</label>
          <input type="email" name="" id="" value="{{auth()->user()->email}}">
          <label for="">Password saat ini:</label>
          <input type="password" value="">
          <label for="">Password Baru:</label>
          <input type="password" value="">
          <label for="">Nomor Telepon:</label>
          <input type="text" value="">
          <label for="">Deskripsi Diri:</label>
          <textarea name="" id="" cols="30" rows="5"></textarea>
          <label for="">Alamat</label>
          <textarea name="" id="" cols="30" rows="5"></textarea>
          <div class="d-flex justify-content-end">
            <button type="submit" class="">Simpan Data</button>
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
