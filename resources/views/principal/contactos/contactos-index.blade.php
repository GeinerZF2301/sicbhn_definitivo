@extends('layouts.navbar')
@section('content')
    <!-- Navbar Start -->
    @include('componentes.NavBarPrincipal')
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid header-bgCO py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">
                Nuestros contactos
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        Contactos
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 mb-5">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100 bg-light d-flex align-items-center p-5">
                        <div class="btn-lg-square bg-white flex-shrink-0">
                            <i class="fa fa-map-marker-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">
                                <span class="text-primary me-2">#</span>Dirección
                            </p>
                            <h5 class="mb-0">Barrio Alto del Cementerio, en Hojancha-Guanacaste, Costa Rica</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="h-100 bg-light d-flex align-items-center p-5">
                        <div class="btn-lg-square bg-white flex-shrink-0">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">
                                <span class="text-primary me-2">#</span>Número telefónico
                            </p>
                            <h5 class="mb-0">+(506) 8670-3535</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100 bg-light d-flex align-items-center p-5">
                        <div class="btn-lg-square bg-white flex-shrink-0">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">
                                <span class="text-primary me-2">#</span>Correo Electrónico
                            </p>
                            <h5 class="mb-0">info.cbhn@gmail.com</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p><span class="text-primary me-2">#</span>Contáctanos</p>
                    <h1 class="display-5 mb-4">¿Tienes alguna duda? ¡Escríbenos!</h1>
                    <p class="mb-4">
                        
                    </p>
                    <form action="{{route('contact.store')}}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" name="name"
                                        placeholder="Escriba su nombre"required>
                                    <label for="name">Nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-light border-0" name="email"
                                        placeholder="Your Email"required>
                                    <label for="email">Correo Electrónico</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" name="subject"
                                        placeholder="Subject" required>
                                    <label for="subject">Asunto</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-light border-0" placeholder="Leave a message here" name="message"
                                        style="height: 100px"required></textarea>
                                    <label for="message">Mensaje</label>
                                </div>
                            </div>
                            <div class="col-12">
                                @auth
                                    {{-- // The user is authenticated... --}}
                                    <button id="btn-scroll" class="btn btn-primary w-100 py-3" type="submit">Enviar</button>
                                @endauth

                                @guest
                                    {{-- // The user is not authenticated... --}}
                                    <a href="{{ route('login') }}?redirect={{ url()->current() }}"
                                        class="btn btn-primary w-100 py-3">Registrate ahora</a>
                                @endguest
                            </div>
                        </div>
                        
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100" style="min-height: 400px">


                        <iframe class="rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.4045185452546!2d-85.4196024850869!3d10.06590247465766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f9fbab8ad2ae131%3A0xd7416bb8610367e!2sFundecodes!5e0!3m2!1ses-419!2scr!4v1674361732713!5m2!1ses-419!2scr"
                            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
