@extends('layouts.navbar')
@section('content')
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
  data-wow-delay="0.1s">

  <a href="index.html" class="navbar-brand p-0">
    <img class="img-fluid me-3" src="zoofari/img/LogoCorredor.png" alt="Icon" />
    <h1 class="m-0 text-primary">SICBHN</h1>
  </a>
  <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
    <div class="navbar-nav ms-auto">
      <a href="{{ url('/') }}" class="nav-item nav-link">Inicio</a>
      <a href="{{ url('/voluntariado') }}" class="nav-item nav-link">Voluntariados</a>
      <a href="{{ url('/campanna') }}" class="nav-item nav-link">Campañas</a>
      <a href="{{ url('/donaciones') }}" class="nav-item nav-link">Donaciones</a>
      <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Sobre Nosotros</a>

        <div class="dropdown-menu rounded-0 rounded-bottom m-0">
          <a href="{{ url('/sobrenosotros') }}" class="dropdown-item">Sobre nosotros</a>
          <a href="{{ url('/galeria') }}" class="dropdown-item active">Galería</a>
          <a href="{{ url('/horavisita') }}" class="dropdown-item">Horas de visita</a>
          <a href="{{ url('/documentos') }}" class="dropdown-item">Documentos</a>
        </div>
      </div>
      <a href="{{ url('/contactos') }}" class="nav-item nav-link">Contactos</a>
      @can('ver-administracion')
          <a href="{{ url('/admin') }}" class="nav-item nav-link">Administración</a>
          @endcan
    </div>
    <!-- Authentication Links -->
    @guest
    @if (Route::has('login'))
    <a href="{{ route('login') }}" class="btn btn-warning">Iniciar Sesión<i class="fa fa-right ms-0"></i></a>
    @endif

    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="btn btn-success">Registrarse<i class="fa fa-right ms-0"></i></a>
    @endif
    @else
   
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }}
      </a>

      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </div>
    
    @endguest
  </div>
</nav>

<!-- Page Header Start -->
<div class="container-fluid header-bgG py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <h1 class="display-4 text-white mb-3 animated slideInDown">Galería de fotografías</h1>
    <nav aria-label="breadcrumb animated slideInDown">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a class="text-white" href="{{ url('/') }}">Inicio</a>
        </li>
        <li class="breadcrumb-item text-primary active" aria-current="page">
          Galería
        </li>
      </ol>
    </nav>
  </div>
</div>
<!-- Page Header End -->

<!-- Animal Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
      <div class="col-lg-6">
        <p><span class="text-primary me-2">#</span>Nuestra flora y fauna</p>
        <h1 class="display-5 mb-0">
          Aquí podrás encontrar nuestra <span class="text-primary">Flora</span> y <span
            class="text-warning">Fauna</span>
        </h1>
        <br>
        <p class="mb-9">
          El Corredor Biológico Hojancha-Nandayure posee una gran biodiversidad y es uno de los territorios más
          admirados de Costa Rica. <br>
          En esta sección encontrará fotografías captadas del Corredor Biológico Hojancha-Nandayure. <br>
          Te invitamos a ser parte de la vida silvestre que nos rodea.
        </p>
      </div>
      <div class="col-lg-6 text-lg-end">
      </div>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-4">
          <div class="col-12">
            <a class="animal-item" href="zoofari/img/galeria/foto1.jpg" data-lightbox="animal">
              <div class="position-relative">
                <img class="img-fluid" src="zoofari/img/galeria/foto1.jpg" alt="" />
                <div class="animal-text p-4">
                  <p class="text-white small text-uppercase mb-0">Fauna</p>
                  <h5 class="text-white mb-0">Mono</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12">
            <a class="animal-item" href="zoofari/img/galeria/foto2.jpg" data-lightbox="animal">
              <div class="position-relative">
                <img class="img-fluid" src="zoofari/img/galeria/foto2.jpg" alt="" />
                <div class="animal-text p-4">
                  <p class="text-white small text-uppercase mb-0">Fauna y Flora</p>
                  <h5 class="text-white mb-0">Colibrí y flor</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="row g-4">
          <div class="col-12">
            <a class="animal-item" href="zoofari/img/galeria/foto3.jpg" data-lightbox="animal">
              <div class="position-relative">
                <img class="img-fluid" src="zoofari/img/galeria/foto3.jpg" alt="" />
                <div class="animal-text p-4">
                  <p class="text-white small text-uppercase mb-0">Fauna</p>
                  <h5 class="text-white mb-0">Ardilla</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12">
            <a class="animal-item" href="zoofari/img/galeria/foto4.jpg" data-lightbox="animal">
              <div class="position-relative">
                <img class="img-fluid" src="zoofari/img/galeria/foto4.jpg" alt="" />
                <div class="animal-text p-4">
                  <p class="text-white small text-uppercase mb-0">Fauna</p>
                  <h5 class="text-white mb-0">Perico verde</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="row g-4">
          <div class="col-12">
            <a class="animal-item" href="zoofari/img/galeria/foto6.jpg" data-lightbox="animal">
              <div class="position-relative">
                <img class="img-fluid" src="zoofari/img/galeria/foto6.jpg" alt="" />
                <div class="animal-text p-4">
                  <p class="text-white small text-uppercase mb-0">Fauna y Flora</p>
                  <h5 class="text-white mb-0">Mariposa y flor</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12">
            <a class="animal-item" href="zoofari/img/galeria/foto5.jpg" data-lightbox="animal">
              <div class="position-relative">
                <img class="img-fluid" src="zoofari/img/galeria/foto5.jpg" alt="" />
                <div class="animal-text p-4">
                  <p class="text-white small text-uppercase mb-0">Fauna</p>
                  <h5 class="text-white mb-0">Coyote</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Animal End -->


@endsection