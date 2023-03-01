@extends('layouts.navbar')
@section('content')
    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
 
      <a href="index.html" class="navbar-brand p-0">
        <img class="img-fluid me-3" src="zoofari/img/LogoCorredor.png" alt="Icon" />
        <h1 class="m-0 text-primary">SICBHN</h1>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
          <a href="{{ url('/') }}" class="nav-item nav-link">Inicio</a>
          <a href="{{ url('/voluntariado') }}" class="nav-item nav-link">Voluntariados</a>
          <a href="{{ url('/campanna') }}" class="nav-item nav-link">Campañas</a>
          <a href="{{ url('/donaciones') }}" class="nav-item nav-link">Donaciones</a>
          <div class="nav-item dropdown">
            <a href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Sobre Nosotros</a>
              
            <div class="dropdown-menu rounded-0 rounded-bottom m-0">
              <a href="{{ url('/sobrenosotros') }}" class="dropdown-item">Sobre nosotros</a>
              <a href="{{ url('/galeria') }}" class="dropdown-item">Galería</a>
              <a href="{{ url('/horavisita') }}" class="dropdown-item active">Horas de visita</a>
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
                            <a href="{{ route('login') }}" class="btn btn-warning"
                              >Iniciar Sesión<i class="fa fa-right ms-0"></i
                            ></a>
                            @endif

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-success"
                              >Registrarse<i class="fa fa-right ms-0"></i
                            ></a>
                            @endif
                        @else
                            
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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
   <div
      class="container-fluid header-bgHV py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s">
      <div class="container py-5">
        <h1 class="display-4 text-white mb-3 animated slideInDown">Horarios de visita</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="{{ url('/') }}">Inicio</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
              Horarios de Visita
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <div class="container">
        <div class="row g-9">
          <div class="col-lg-13 text-center wow fadeInUp" data-wow-delay="0.1s">
            <p><span class="text-primary me-2">¡Sé parte de nuestra familia! </p>
            <h1 class="display-5 mb-9">
              Aquí podrás encontrar nuestros 
              <span class="text-primary">horarios de visita</span>
            </h1>
            <p class="mb-9">
              Te presentamos nuestros horarios de visita para que puedas conocer más del Corredor Biológico Hojancha-Nandayure.<br>
              Además, si te encuentras interesado en realizar alguna visita con más personas nos puedes contactar para coordinar y realizar una experiencia <br>
              más agradable para ti.
            </p>
          </div>
          </div>

   <!-- Visiting Hours Start -->
   <div
      class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp"
      data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-md-12 wow fadeIn" data-wow-delay="0.3s">
            <h1 class="display-6 text-center text-white mb-6">Horarios de Visita</h1>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <span>Lunes</span>
                <span>8:00 AM - 12:00 PM</span>
              </li>
              <li class="list-group-item">
                <span>Martes</span>
                <span>8:00 AM - 12:00 PM</span>
              </li>
              <li class="list-group-item">
                <span>Miércoles</span>
                <span>8:00 AM - 12:00 PM</span>
              </li>
              <li class="list-group-item">
                <span>Jueves</span>
                <span>8:00 AM - 12:00 PM</span>
              </li>
              <li class="list-group-item">
                <span>Viernes</span>
                <span>8:00 AM - 12:00 PM</span>
              </li>
              <li class="list-group-item">
                <span>Sábado</span>
                <span>Cerrado</span>
              </li>
              <li class="list-group-item">
                <span>Domingo</span>
                <span>Cerrado</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Visiting Hours End -->


    @endsection