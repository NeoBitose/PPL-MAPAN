@extends('layouts.master-dashboard');
@section('content')
  <div class="card card-data">
    <div class="card-header">
      <h1 class="mb-0">List Data Penyakit</h1>
    </div>
    <div class="mt-3">
      <form action="/penyakit" method="post" class="form-data" enctype="multipart/form-data" id="tambah-penyakit">
        @csrf
        <label for="">Nama Penyakit</label>
        <input type="text" name="nama" id="nama-penyakit">
        <label for="">Definisi</label>
        <input type="text" name="definisi" id="definisi-penyakit">
        <label for="">Pengendalian Teknis</label>
        <input type="text" name="teknis" id="kendali-teknis">
        <label for="">Pengendalian Gejala</label>
        <input type="text" name="gejala" id="kendali-gejala">
        <label for="">Foto Penyakit</label>
        <input type="file" name="gambar">
        <button type="submit" class="btn-tmbh-penyakit">
          Tambah Penyakit
        </button>
      </form>
    </div>
  </div>
  <div class="card card-dash mt-5">
    <!-- Card header -->
    <div class="card-header">
      <h1 class="mb-0">List Data Penyakit</h1>
    </div>
    <div class="pb-4">
      <table class="" id="">
        <thead class="thead-light">
          <tr class="text-center">
            <th class="p-3" style="width: 5%">No</th>
            <th class="p-3" style="width: 10%">Nama Penyakit</th>
            <th class="p-3" style="width: 25%">Definisi</th>
            <th class="p-3" style="width: 25%">Pengendalian Teknis</th>
            <th class="p-3" style="width: 25%">Pengendalian Gejala</th>
            <th class="p-3" style="width: 10%">Foto Penyakit</th>
          </tr>
        </thead>
        <tbody>
          @for ($i = 0; $i < count($penyakit); $i++)
            <tr class="">
              <td class="text-center">
                <p>{{ $i + 1 }}</p>
              </td>
              <td class="text-center">
                <p>{{ $penyakit[$i]->nama_penyakit }}</p>
              </td>
              <td>
                <p id="definisi-{{ $i }}"></p>
              </td>
              <td>
                <p id="kendali-teknis-{{ $i }}"></p>
              </td>
              <td>
                <p id="kendali-gejala-{{ $i }}"></p>
              </td>
              <td class="text-center"><img src="{{ asset('img/penyakit/' . $penyakit[$i]->foto_penyakit) }}" width="50"
                  height="50" class="img-fluid"></td>
            </tr>
          @endfor
          {{-- @php
            $no = 1;
        @endphp
        @foreach ($penyakit as $item)
        <tr class="text-center">
          <td><p>{{$no++}}</p></td>
          <td><p>{{$item->nama_penyakit}}</p></td>
          <td><p id="definisi-{{$no}}"></p></td>
          <td><p id="kendali-teknis-{{$no}}"></p></td>
          <td><p id="kendali-gejala-{{$no}}"></p></td>
          <td><img src="{{asset('img/'.$item->foto_penyakit)}}" width="50" height="50" class="img-fluid"></td>
        </tr>
        @endforeach --}}
        </tbody>

      </table>
    </div>
  </div>

  <script>
    let arry_penyakit = <?php echo json_encode($penyakit); ?>;
    console.log(arry_penyakit);
    for (let index = 0; index < arry_penyakit.length; index++) {
      var value_definisi = arry_penyakit[index].definisi.substring(0, 70) + "...";
      var value_kendali_teknis = arry_penyakit[index].pengendalian_teknis.substring(0, 70) + "...";
      var value_kendali_gejala = arry_penyakit[index].pengendalian_teknis.substring(0, 70) + "...";
      console.log(value_definisi, value_kendali_gejala, value_kendali_teknis);
      document.getElementById("definisi-" + index).innerHTML = value_definisi;
      document.getElementById("kendali-teknis-" + index).innerHTML = value_kendali_teknis;
      document.getElementById("kendali-gejala-" + index).innerHTML = value_kendali_gejala;
    }
  </script>
@endsection
