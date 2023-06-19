@extends('layouts.navbar')
@section('content')
    <!-- Navbar Start -->
    @include('componentes.NavBarPrincipal')

    <!-- Page Header Start -->
    <div class="container-fluid header-bgC py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">{{ __('messages.TituloHeaderCampanas') }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ url('/') }}">{{ __('messages.TextoHeaderInicio') }}</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        {{ __('messages.TextoHeaderCampanas') }}
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Meta Description -->
    <meta name="description"
        content="Muestra el contenido del Modulo de Campañas,ademas de mostrar las campañas disponibles de la base de datos.">


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">

                    <h1 class="display-5 mb-4">
                        {{ __('messages.PrimerTituloCampanas') }}
                        <font color="#028A0F">{{ __('messages.PrimerTituloCampanasVerde') }}</font>

                    </h1>
                    <p class="lh-lg mb-4 ">
                        {{ __('messages.PrimerParrafoCampanas') }}
                    </p>

                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="zoofari/img/Campannas/monte alto autoeva.webp" alt="" />
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
                        <font color="#028A0F">{{ __('messages.SegundoTituloCampanas') }}</font>

                    </h1>

                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($campannasDisponibles as $campannaDisponible)
                <div class="col-sm-12 col-md-6  col-lg-4">
                    <div class="cardv">
                        <div class="card-title text-center  mt-4 ps-3 pe-3">
                            <h4> <font color="#028A0F">{{ $campannaDisponible->nombre }}!</font>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="row ">
                                <div class="col d-flex justify-content-center ">
                                    <img src="zoofari/img/Campannas/maps.webp" alt="" width="34px" height="34px">
                                    <p class="pt-2"> {{ $campannaDisponible->ubicacion }}.</p>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <img src="zoofari/img/Campannas/calendario.webp" alt="">
                                </div>
                                <div class="col-3">
                                    <img src="zoofari/img/Campannas/reloj.webp" alt="">
                                </div>
                                <div class="col-5">
                                    <img src="zoofari/img/Campannas/usuario.webp" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <p class="fw-bold">{{ $campannaDisponible->fecha }}</p>
                                </div>
                                <div class="col-3">
                                    <p class="fw-bold">{{ $campannaDisponible->hora }}</p>
                                </div>
                                <div class="col-5">
                                    <p class="fw-bold">{{ $campannaDisponible->tipo_campaña }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 ps-3 pe-3">
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
