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
                <a href="{{ url('/campanna') }}" class="nav-item nav-link active">Campañas</a>
                <a href="{{ url('/donaciones') }}" class="nav-item nav-link">Donaciones</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Sobre Nosotros</a>

                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="{{ url('/sobrenosotros') }}" class="dropdown-item">Sobre nosotros</a>
                        <a href="{{ url('/galeria') }}" class="dropdown-item">Galería</a>
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
    <div class="container-fluid header-bgC py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Campañas</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        Campañas
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">

                    <h1 class="display-5 mb-4">
                        ¡Nuestras
                        <font color="#028A0F">Campañas!</font>

                    </h1>
                    <p class="lh-lg mb-4 ">
                        El Corredor Biológico Hojancha-Nandayure se ubica en el área de Conservación Tempisque y fue creado
                        con
                        el fin de conservar la vida silvestre entre el Parque Nacional Barra Honda y la zona protectora
                        Península
                        de Nicoya, durante el año se realizan diversas campañas que abarcan dicho territorio con el objetivo
                        de
                        concienciar sobre temas medioambientales.
                    </p>

                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="zoofari/img/Campannas/monte alto autoeva.jpeg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12  wow fadeInUp" data-wow-delay="0.1s">

                    <h1 class="display-4 text-center mb-4">
                        <font color="#028A0F">¡Campañas Disponibles!</font>

                    </h1>

                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($campannasDisponibles as $campannaDisponible)
                <div class="col">
                    <div class="cards">
                        <div class="card-title text-center mt-4">
                            <h4> ¡Campaña de <font color="#028A0F">{{ $campannaDisponible->nombre }}!</font>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="row ">
                                <div class="col d-flex ">
                                    <img src="zoofari/img/Campannas/maps.png" alt="" width="34px"
                                        height="34px">
                                    <p> {{ $campannaDisponible->ubicacion }}.</p>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <img src="zoofari/img/Campannas/calendario.png" alt="">
                                </div>
                                <div class="col-4">
                                    <img src="zoofari/img/Campannas/reloj.png" alt="">
                                </div>
                                <div class="col-4">
                                    <img src="zoofari/img/Campannas/usuario.png" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <p class="fw-bold">{{ $campannaDisponible->fecha }}</p>
                                </div>
                                <div class="col-4">
                                    <p class="fw-bold">{{ $campannaDisponible->hora }}</p>
                                </div>
                                <div class="col-4">
                                    <p class="fw-bold">{{ $campannaDisponible->tipo_campaña }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p>{{ $campannaDisponible->descripcion }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
