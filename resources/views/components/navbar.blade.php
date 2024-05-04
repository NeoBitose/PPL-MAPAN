<nav class="bg-white navbar fixed-top navbar-expand-lg ">
  <div class="container w-100 bg-white contain-nav">
    <a class="w-25 navbar-brand" href="#">
      <img src="{{ asset('img/logo_mapan.png') }}" alt=""> Mapan
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
      aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <div class="d-lg-flex d-sm-block w-100">
        <ul class="navbar-nav me-auto mb-3 mb-lg-0 w-50 justify-content-end">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/diagnosa">Deteksi Penyakit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Forum</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang</a>
          </li>
        </ul>
        <div class="d-lg-flex d-sm-block w-50 justify-content-end">
          @if (auth()->user())
            <div class="profile">
              <img src="{{ asset('img/pp.png') }}" alt="">
              <p>{{ auth()->user()->name }}</p>
            </div>
            {{-- <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="bg-danger">Logout</button>
        </form> --}}
          @else
            <a href="/login"><button class="bg-warning">Login</button></a>
          @endif
        </div>

      </div>
    </div>
  </div>
</nav>
<div class="content-profile">
  <div class="container detail-content-profile">
    <div class="box-profile">
      <div class="flex">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M8 7C8 5.93913 8.42143 4.92172 9.17157 4.17157C9.92172 3.42143 10.9391 3 12 3C13.0609 3 14.0783 3.42143 14.8284 4.17157C15.5786 4.92172 16 5.93913 16 7C16 8.06087 15.5786 9.07828 14.8284 9.82843C14.0783 10.5786 13.0609 11 12 11C10.9391 11 9.92172 10.5786 9.17157 9.82843C8.42143 9.07828 8 8.06087 8 7ZM8 13C6.67392 13 5.40215 13.5268 4.46447 14.4645C3.52678 15.4021 3 16.6739 3 18C3 18.7956 3.31607 19.5587 3.87868 20.1213C4.44129 20.6839 5.20435 21 6 21H18C18.7956 21 19.5587 20.6839 20.1213 20.1213C20.6839 19.5587 21 18.7956 21 18C21 16.6739 20.4732 15.4021 19.5355 14.4645C18.5979 13.5268 17.3261 13 16 13H8Z" fill="black"/>
        </svg>    
        <a href="/view-profile">
          <p>Profile</p>
        </a>      
      </div>
      <div class="flex logout">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M6 2H15C15.5304 2 16.0391 2.21071 16.4142 2.58579C16.7893 2.96086 17 3.46957 17 4V6H15V4H6V20H15V18H17V20C17 20.5304 16.7893 21.0391 16.4142 21.4142C16.0391 21.7893 15.5304 22 15 22H6C5.46957 22 4.96086 21.7893 4.58579 21.4142C4.21071 21.0391 4 20.5304 4 20V4C4 3.46957 4.21071 2.96086 4.58579 2.58579C4.96086 2.21071 5.46957 2 6 2Z"
            fill="black" />
          <path d="M16.09 15.59L17.5 17L22.5 12L17.5 7L16.09 8.41L18.67 11H9V13H18.67L16.09 15.59Z" fill="black" />
        </svg>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="border-0 p-0">Logout</button>
        </form>
      </div>
    </div>
  </div>
</div>
