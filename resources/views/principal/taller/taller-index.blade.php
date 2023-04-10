@extends('layouts.navbar')
@section('content')
    <!-- Navbar Start -->
    @include('componentes.NavBarPrincipal')

    <!-- Page Header Start -->
    <div class="container-fluid header-bgT py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Talleres</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        Talleres
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- SOBRE LOS TALLERES -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="zoofari/img/talleres/taller1.jpg">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="zoofari/img/talleres/taller6.jpg" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="zoofari/img/talleres/taller6.jpg">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="zoofari/img/talleres/taller1.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 mb-4">Nuestros <i class="fa fa-users text-primary me-2"></i>Talleres</h1>
                    <p class="mb-4">El Corredor Biológico Hojancha-Nandayure proporciona 
                        talleres diseñados para brindar capacitación práctica y experiencias de aprendizaje interactivo.
                        Con un equipo de profesionales experimentados dirigiendo las sesiones. 
                        No se pierda esta oportunidad única de mejorar sus habilidades y contribuir con el medio ambiente.</p>
                    <p class="mb-4">¡Inscríbase hoy mismo en nuestro taller!</p>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Talleres</p>
                                    <h6 class="text-uppercase mb-0">Creados</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Zonas impactadas</p>
                                    <h6 class="text-uppercase mb-0">Positivamente</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @auth
                        {{-- // The user is authenticated... --}}
                        <a id="btn-scroll" class="btn-scroll-registrarse my-button">¡Inscribite Ya!</a>
                    @endauth

                    @guest
                        {{-- // The user is not authenticated... --}}
                        <a href="{{ route('login') }}?redirect={{ url()->current() }}"
                            class="my-button btn-scroll-registrarse">Registrate ahora</a>
                    @endguest

                </div>
            </div>
        </div>
    </div>

<!-- Titulo de Talleres disponibles -->

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Conoce nuestros talleres</h5>
                <h1 class="mb-0">Aquí encuentras nuestros talleres disponibles</h1>
            </div>
        </div>
    </div>
    
<!-- Cards de talleres disponibles -->

    {{-- <div class="container mt-5 mb-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">

            @foreach ($talleresDisponibles as $talleresDisponible)
                <div class="col-sm-12 col-md-6  col-lg-4">

                    <div class="cardv">
                        <div class="cardv-title mt-2">
                            <input id="id" class="id" name="id" type="hidden"
                                value="{{ $talleresDisponible->id }}">
                            <h5 class="text-center"> ¡Taller en <span style="color:#028A0F "
                                    class="nombreTaller">
                                    {{ $talleresDisponible->nombre }}</span>
                            </h5>
                        </div>
                        <div class="cardv-body">
                            <div class="row ">
                                <div class="col d-flex ">
                                    <img src="zoofari/img/Campannas/maps.png" alt="" width="34px" height="34PX">
                                    <p> {{ $talleresDisponible->ubicacion }}.</p>

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
                                    <img src="zoofari/img/voluntariado/altavoz.png" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <p>{{ $talleresDisponible->fecha }}</p>
                                </div>
                                <div class="col-4">
                                    <p>{{ $talleresDisponible->hora }} </p>
                                </div>
                                {{-- <div class="col-4">
                                    <p>{{ $voluntariadosDisponible->tipo_voluntariado }}</p>
                                </div> --}}
                            {{-- </div>
                            <div class="row">
                                <div class="col-12">
                                    <p>{{ $talleresDisponible->descripcion }}</p>
                                </div>
                            </div>
                            @auth
                                {{-- // The user is authenticated... --}}
                                {{-- <button class="my-button btn-scroll btn-select-voluntariado"
                                    data-id="{{ $talleresDisponible->id }}"
                                    data-nombre="{{ $talleresDisponible->nombre }}">Inscribite ahora</button>
                            @endauth

                            @guest
                                {{-- // The user is not authenticated... --}}
                                {{-- <a href="{{ route('login') }}" class="my-button">Inscribite ahora</a>
                            @endguest


                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>  --}} 
<!-- FORMULARIO DE INSCRIPCIÓN -->



<!-- About End -->
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="{{ asset('js/solicitudClienteVoluntario/solicitudPost.js') }}"></script>
<script src="{{ asset('js/solicitudClienteVoluntario/animaciones.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@endsection