@extends('layouts.navbar')
@section('content')
    <!-- Navbar Start -->
    @include('componentes.NavBarPrincipal')

    <!-- Page Header Start -->
    <div class="container-fluid header-bgHV py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Horarios de Oficina</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        Horarios de Oficina
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
                    <span class="text-primary">horarios de Oficina</span>
                </h1>
                <p class="mb-9">
                    Te presentamos nuestros horarios de oficina para que puedas conocer más del Corredor Biológico
                    Hojancha-Nandayure.<br>
                    Además, si te encuentras interesado en realizar alguna visita a nuestra oficina nos puedes contactar para
                    coordinar y realizar una experiencia <br>
                    más agradable para ti.
                </p>
            </div>
        </div>

        <!-- Visiting Hours Start -->
        <div class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-12 wow fadeIn" data-wow-delay="0.3s">
                        <h1 class="display-6 text-center text-white mb-6">Nuestras oficinas están abiertas <br> en los siguientes horarios: </h1>
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
