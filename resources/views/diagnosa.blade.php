@extends('layouts.master')
@section('content')
  
  <div class="hero-page bg-primary py-5">
    <div class="container">
      <h1 class="text-white fw-bold text-center">Deteksi Penyakit</h1>
    </div>
  </div>
  <div class="main-deteksi">
    <div class="form py-5">
      <form action="/hasil-diagnosa" method="POST" id="form-deteksi" class="form" enctype="multipart/form-data">
        @csrf
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="container">
            <div class="accordion-item daun">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Gejala Pada Daun
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="row">
                    @php
                        $no = 0
                    @endphp
                    @for ($i = 0; $i < count($daun); $i++)
                    @php
                        $no++
                    @endphp
                    <div class="col-6">
                      <div class="form-check">
                        <input class="form-check-input" name="gejala[]" type="checkbox" value="{{$daun[$i]->gejala}}" id="gejala{{$daun[$i]->id_gejala}}">
                        <label class="form-check-label" for="gejala{{$daun[$i]->id_gejala}}">
                          {{$daun[$i]->gejala}}
                        </label>
                      </div>
                    </div>
                    @endfor
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample1">
          <div class="bg-success">
            <div class="container">
              <div class="accordion-item tangkai">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Gejala Pada Tangkai
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample1">
                  <div class="accordion-body">
                    <div class="row">
                      @for ($i = 0; $i < count($tangkai); $i++)
                      @php
                        $no++
                      @endphp
                      <div class="col-6">
                        <div class="form-check">
                          <input class="form-check-input" name="gejala[]" type="checkbox" value="{{$tangkai[$i]->gejala}}" id="gejala{{$tangkai[$i]->id_gejala}}">
                          <label class="form-check-label" for="gejala{{$tangkai[$i]->id_gejala}}">
                            {{$tangkai[$i]->gejala}}
                          </label>
                        </div>
                      </div>
                      @endfor
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample2">
          <div class="container">
            <div class="accordion-item malai">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Gejala Pada Malai
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                <div class="accordion-body">
                  <div class="row">
                    @for ($i = 0; $i < count($malai); $i++)
                    @php
                        $no++
                    @endphp
                    <div class="col-6">
                      <div class="form-check">
                        <input class="form-check-input" name="gejala[]" type="checkbox" value="{{$malai[$i]->gejala}}" id="gejala{{$malai[$i]->id_gejala}}">
                        <label class="form-check-label" for="gejala{{$malai[$i]->id_gejala}}">
                          {{$malai[$i]->gejala}}
                        </label>
                      </div>
                    </div>
                    @endfor
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container pt-5">
          <button class="diagnosa-btn confirm" type="submit" data-confirm-delete="true">Kirim</button>
        </div>
      </form>
    </div>
    {{-- @php
        dd($diagnosa);
    @endphp --}}
    @if ($diagnosa[0] != null)
    <div class="container py-5">
      <div class="card diagnosa-card">
        <div class="card-header bg-primary py-3">
          <h3 class="text-white text-center fw-bold">
            Hasil Prediksi Penyakit dan Diagnosa
          </h3>
        </div>
        <div class="card-body text-primary hasil-diagnosa p-4">
          <h1 class="card-title fw-bold">Penyakit {{$diagnosa[0]->nama_penyakit}}</h1>
          <p class="card-text">
            {{$diagnosa[0]->definisi}}
          </p>
          <h3 class="card-title fw-bold">Pengendalian Teknis</h3>
          <p class="card-text">
            {{$diagnosa[0]->pengendalian_teknis}}      
          </p>
          <h3 class="card-title fw-bold">Pengendalian Gejala</h3>
          <p class="card-text">
            {{$diagnosa[0]->pengendalian_gejala}}
          </p>
        </div>
      </div>
    </div>
    @endif
  </div>
@endsection
