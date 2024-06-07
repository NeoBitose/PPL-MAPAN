@extends('layouts.master-dashboard');
@section('content')

  <div class="card card-data">
    <div class="card-header">
      <h1 class="mb-0">List Data Gejala Penyakit</h1>
    </div>
    <div class="mt-3">
      <form action="/gejala-penyakit" method="post" class="form-data" enctype="multipart/form-data" id="tambah-gejala">
        @csrf
        <label for="">Klasifikasi Gejala Penyakit</label>
        <select name="klasifikasi" id="klasifikasi">
          @foreach ($klasifikasi as $item)
            <option value="{{ $item->id_klasifikasi_gejala }}">{{ $item->nama_bagian }}</option>
          @endforeach
        </select>
        <label for="">Nama Gejala Penyakit</label>
        <input type="text" name="gejala" id="nama_gejala">
        <label for="">Pilih Penyakit</label>
        <div class="borders">
          <div class="check-penyakit">
            <div class="row">
              @for ($j = 0; $j < count($penyakit); $j++)
                <div class="col-6 form-check">
                  <input class="check-input" name="penyakit[]" type="checkbox"
                    value="{{ $penyakit[$j]->id_penyakit }}" id="gejala{{ $penyakit[$j]->id_penyakit }}">
                  <label class="check-label" for="gejala{{ $penyakit[$j]->id_penyakit }}">
                    {{ $penyakit[$j]->nama_penyakit }} 
                  </label>
                </div>
              @endfor
            </div>
          </div>
        </div>
        <button type="submit" class="btn-tmbh-gejala">
          Tambah Gejala
        </button>
      </form>
    </div>
  </div>

  <div class="card card-dash mt-5">
    <!-- Card header -->
    <div class="card-header">
      <h1 class="mb-0">List Data Gejala Penyakit</h1>
    </div>
    <div class="pb-4 table-responsive">
      <table class="table table-flush" id="datatable-basic">
        <thead class="thead-light">
          <tr class="text-center border-1" style="">
            <th class="p-3" style="width: 5%">No</th>
            <th class="p-3" style="width: 55%">Nama Gejala Penyakit</th>
            <th class="p-3" style="width: 20%">Bagian Tumbuhan</th>
            <th class="p-3" style="width: 20%">Nama Penyakit</th>
          </tr>
        </thead>
        <tbody>
          @for ($i = 0; $i < count($gejala); $i++)
            <tr class=""">
              <td class="text-center">
                <p>{{ $i + 1 }}</p>
              </td>
              <td class="text-center">
                <p>{{ $gejala[$i]['gejala'] }}</p>
              </td>
              <td>
                <p>{{$gejala[$i]['bagian']}}</p>
              </td>
              <td>
                <p>
                  @for ($k = 0; $k < count($gejala[$i]['penyakit']); $k++)
                  {{$gejala[$i]['penyakit'][$k]->nama_penyakit}} @if ($k < count($gejala[$i]['penyakit']) - 1), @endif
                  @endfor
                </p>
              </td>
            </tr>
          @endfor
        </tbody>
      </table>
    </div>
  </div>
@endsection
