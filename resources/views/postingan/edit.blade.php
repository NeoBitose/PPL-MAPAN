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
      <form action="/update-user" class="form-data">
        <label for="">Nama:</label>
        <input type="text" value="">
        
        <label for="">Deskripsi Diri:</label>
        <textarea name="" id="" cols="30" rows="10"></textarea>
        
        <label for="">Foto (kosongi jika tidak ingin upload foto):</label>
        <input type="file" value="" name="foto">

        <div class="d-flex">
          <button type="submit" class="bg-warning">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
@endsection
