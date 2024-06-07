@extends('layouts.master')
@section('content')
  <div class="hero-page bg-primary py-5">
    <div class="container">
      <h1 class="text-white fw-bold text-center">Forum</h1>
    </div>
  </div>
  <div class="container tambah-postingan">
    <h1 class="">Tambah Postingan</h1>
    <div class="card-update-profile">
      <form action="/postingan" method="POST" class="form-data" enctype="multipart/form-data" id="tambah-post">
        @csrf
        <label for="">Judul Postingan:</label>
        <input type="text" id="judul-post" name="judul">
        
        <label for="">Deskripsi Postingan:</label>
        <textarea name="deskripsi" id="desk-post" cols="30" rows="10"></textarea>
        
        <label for="">Foto (kosongi jika tidak ingin upload foto):</label>
        <input type="file" name="gambar" id="gambar-post">

        <div class="d-flex">
          <button type="submit" class="bg-primary btn-tambah-post">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
  <script>
    
  </script>
@endsection
