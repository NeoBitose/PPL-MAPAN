@extends('layouts.master-dashboard');
@section('content')
  <div class="card-update">
    <form method="POST" action="/update-admin/{{auth()->user()->id}}" class="form-update" id="form-update-admin">
      @csrf
      <label for="">Nama:</label>
      <input type="text" value="{{$data->name}}" name="name">
      @error('name')
      <small class="text-danger" id="message-email">{{ $message }}</small>
      @enderror
      
      <label for="">Password saat ini:</label>
      <input type="password" value="" name="password">
      @error('password')
      <small class="text-danger" id="message-email">{{ $message }}</small>
      @enderror

      <label for="">Password Baru:</label>
      <input type="password" value="" name="confirm_password">
      @error('confirm_password')
      <small class="text-danger" id="message-email">{{ $message }}</small>
      @enderror
      
      <div class="d-flex">
        <button type="submit" class="update-admin">Edit Data</button>
      </div>
    </form>
  </div>
@endsection