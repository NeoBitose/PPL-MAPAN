@extends('layouts.master-dashboard');
@section('content')
  <div class="card-update">
    <form action="" class="form-update">
      
      <label for="">Nama:</label>
      <input type="text" value="{{auth()->user()->name}}">
      
      <label for="">Password saat ini:</label>
      <input type="password" value="">
      
      <div class="d-flex">
        <a href="/edit-admin/{{auth()->user()->id}}">
          <button type="button" class="">Edit Data</button>
        </a>
      </div>
    </form>
  </div>
@endsection