@extends('layouts.master')
@section('content')
  <div class="hero-page bg-primary py-5">
    <div class="container">
      <h1 class="text-white fw-bold text-center">Forum</h1>
    </div>
  </div>
  <div class="container tambah-postingan">
    <h1 class="">Edit Postingan</h1>
    <div class="card-update-profile">
      <form action="/postingan/{{$data->id_postingan}}" method="POST" enctype="multipart/form-data" class="form-data">
        @csrf
        @method('PUT')
        <label for="">Nama:</label>
        <input type="text" name="judul" value="{{$data->judul_postingan}}">
        
        <label for="">Deskripsi Diri:</label>
        <textarea name="deskripsi" id="" cols="30" rows="10">{{$data->deskripsi}}</textarea>
        
        <label for="">Foto (kosongi jika tidak ingin upload foto):</label>
        <input type="file" value="" name="gambar">

        <div class="d-flex">
          <button type="submit" class="bg-warning">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
@endsection
