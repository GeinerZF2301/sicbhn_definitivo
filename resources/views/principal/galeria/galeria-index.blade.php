@extends('layouts.navbar')
@section('content')
    <!-- Navbar Start -->
    @include('componentes.NavBarPrincipal')
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
                        El Corredor Biológico Hojancha-Nandayure posee una gran biodiversidad y es uno de los territorios
                        más
                        admirados de Costa Rica. <br>
                        En esta sección encontrará fotografías captadas del Corredor Biológico Hojancha-Nandayure. <br>
                        Te invitamos a ser parte de la vida silvestre que nos rodea.
                    </p>
                </div>
                <div class="col-lg-6 text-lg-end">
                </div>
            </div>


            <div class="d-flex flex-wrap justify-content-center">
                @foreach ($imagenes as $imagen)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="animal-item" href="{{ asset('storage/imagenes/' . $imagen->file) }}"
                            data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img_galeria img-fluid" src="{{ asset('storage/imagenes/' . $imagen->file) }}"
                                    alt="" />
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">{{ $imagen->categoria_imagen }}</p>
                                    <h5 class="text-white mb-0">{{ $imagen->nombre }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            {{-- @endforeach --}}
        </div>
    </div>
    <!-- Animal End -->
@endsection
