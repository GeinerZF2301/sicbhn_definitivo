@extends('layouts.navbar')
@section('content')
    <!-- Navbar Start -->
    @include('componentes.NavBarPrincipal')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Page Header Start -->
    <div class="container-fluid header-bgT py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">{{ __('messages.TituloHeaderTalleres') }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ url('/') }}">{{ __('messages.TextoHeaderInicio') }}</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        {{ __('messages.TextoHeaderTalleres') }}
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
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                src="/zoofari/img/talleres/taller1.webp">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                src="/zoofari/img/talleres/taller6.webp" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                src="/zoofari/img/talleres/taller6.webp">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                src="/zoofari/img/talleres/taller1.webp">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 mb-4">{{ __('messages.PrimerTituloTalleres') }}<i class="fa fa-users text-primary me-2"></i>{{ __('messages.PrimerTituloTalleresSegundo') }}</h1>
                    <p class="mb-4">{{ __('messages.PrimerParrafoTalleres') }}
                    </p>
                    <p class="mb-4">{{ __('messages.SegundoParrafoTalleres') }}</p>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">
                                    {{ $cantidadTalleres }}</h1>
                                <div class="ps-4">
                                    <p class="mb-0">{{ __('messages.PrimerContadorTextoTalleres') }}</p>
                                    <h6 class="text-uppercase mb-0">{{ __('messages.PrimerContadorTextoTalleresGRANDE') }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @auth
                        {{-- // The user is authenticated... --}}
                        <a id="btn-scroll" class="btn-scroll-registrarse my-button">{{ __('messages.PrimerBotonTalleres') }}</a>
                    @endauth

                    @guest
                        {{-- // The user is not authenticated... --}}
                        <a href="{{ route('login') }}?redirect={{ url()->current() }}"
                            class="my-button btn-scroll-registrarse">{{ __('messages.SegundoBotonTalleres') }}</a>
                    @endguest

                </div>
            </div>
        </div>
    </div>

    <!-- Titulo de Talleres disponibles -->

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">{{ __('messages.SegundoTituloTalleres') }}</h5>
                <h1 class="mb-0">{{ __('messages.PrimerSubtituloTalleres') }}</h1>
            </div>
        </div>
    </div>

    <!-- Cards de talleres disponibles -->

    <div class="container mt-5 mb-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">

            @foreach ($talleres as $talleresDisponible)
                <div class="col-sm-12 col-md-6  col-lg-4">

                    <div class="cardv">
                        <div class="cardv-title mt-2">
                            <input id="id" class="id" name="id" type="hidden"
                                value="{{ $talleresDisponible->id }}">
                            <h5 class="text-center"> ¡Taller en <span style="color:#028A0F " class="nombreTaller">
                                    {{ $talleresDisponible->nombre }}</span>
                            </h5>
                        </div>
                        <div class="cardv-body">
                            <div class="row ">
                                <div class="col d-flex ">
                                    <img src="/zoofari/img/Campannas/maps.webp" alt="" width="34px"
                                        height="34PX">
                                    <p> {{ $talleresDisponible->ubicacion }}.</p>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <img src="/zoofari/img/Campannas/calendario.webp" alt="">
                                </div>
                                <div class="col-4">
                                    <img src="/zoofari/img/Campannas/reloj.webp" alt="">
                                </div>
                                <div class="col-4">
                                    <img src="/zoofari/img/voluntariado/altavoz.webp" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <p>{{ $talleresDisponible->fecha }}</p>
                                </div>
                                <div class="col-4">
                                    <p>{{ $talleresDisponible->hora }} </p>
                                </div>
                                <div class="col-4">
                                    <p>{{ $talleresDisponible->tipo_taller }}</p>
                                </div>
                                <div class="col-4">
                                    <p class="fw-bold">{{ $talleresDisponible->cupo }} Lugares disponibles</p>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p>{{ $talleresDisponible->descripcion }}</p>
                                </div>
                            </div>




                            @auth
                                {{-- The user is authenticated... --}}
                                <button class="my-button btn-scroll btn-select-taller" data-id="{{ $talleresDisponible->id }}"
                                    data-nombre="{{ $talleresDisponible->nombre }}">{{ __('messages.PrimerBotonTalleres') }}</button>
                            @endauth

                            @guest
                                {{-- The user is not authenticated... --}}
                                <a href="{{ route('login') }}" class="my-button">{{ __('messages.PrimerBotonTalleres') }}</a>
                            @endguest


                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



    <!-- FORMULARIO DE INSCRIPCIÓN -->




    @auth


        <section class="section-padding section-bg" id="section_2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">

                        <img src="/zoofari/img/talleres/Voluntariados9.webp" class="custom-text-box-image img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-6 col-12">


                        <div id="seccion-formulario" class="col-12">
                            <div class="custom-text-box">
                                <div class="row g-5">
                                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                                        <p><span class="text-primary me-2">#</span>{{ __('messages.SegundoHashtagFormularioTalleres') }}</p>
                                        <h1 class="display-5 mb-4">{{ __('messages.TituloFormularioTalleres') }}</h1>
                                        <p class="mb-4">
                                            {{ __('messages.ParrafoFormularioTalleres') }}
                                        </p>
                                        <form id="requestForm">
                                            @csrf
                                            <p class="mb-4 text-dark">
                                                {{ __('messages.IndicacionCamposObligatorios') }}<span class="text-danger fs-5 fw-bolder">*</span>{{ __('messages.IndicacionCamposObligatoriosSegundo') }}
                                            </p>
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <span id="nombre_error"
                                                        class="text-danger fw-bolder error-messages"></span>
                                                    <span class="text-danger fs-5 ">*</span>
                                                    <div class="form-floating">
                                                        <input type="text" name="nombre"
                                                            class="form-control bg-light border-0" id="nombre"
                                                            placeholder="Your Name" />
                                                        <label for="nombre">{{ __('messages.CamposFormularioNombre') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <span id="apellidos_error"
                                                        class="text-danger fw-bolder error-messages"></span>
                                                    <span class="text-danger fs-5 ">*</span>
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control bg-light border-0"
                                                            id="apellidos" name="apellidos" placeholder="Your Lastname" />
                                                        <label for="apellidos">{{ __('messages.CamposFormularioApellidos') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <span id="tipo_identificacion_error"
                                                        class="text-danger fw-bolder error-messages"></span>
                                                    <span class="text-danger fs-5 ">*</span>
                                                    <div class="form-floating">
                                                        <select id="tipoIdentificacion"
                                                            class="form-select bg-light form-select mb-3 "
                                                            name="tipo_identificacion" aria-label=".form-select example"">
                                                            <option selected>{{ __('messages.CampoDropdownSeleccione') }}</option>
                                                            <option value="Cédula Nacional">{{ __('messages.CampoDropdownCedula') }}</option>
                                                            <option value="Pasaporte">{{ __('messages.CampoDropdownPasaporte') }}</option>
                                                            <option value="Cédula de Residencia">{{ __('messages.CampoDropdownCedulaResidencia') }}</option>
                                                        </select>
                                                        <label for="tipoidentificacion">{{ __('messages.CamposFormularioIdentificacion') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <span id="numero_identificacion_error"
                                                        class="text-danger fw-bolder error-messages"></span>
                                                    <span class="text-danger fs-5 ">*</span>
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control bg-light border-0"
                                                            id="numeroIdentificacion" name="numero_identificacion"
                                                            placeholder="Your Lastname" />
                                                        <label for="numeroIdentificacion">{{ __('messages.CamposFormularioNumeroIdenticacio') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <span id="fecha_de_nacimiento_error"
                                                        class="text-danger fw-bolder error-messages"></span>
                                                    <span class="text-danger fs-5 ">*</span>
                                                    <div class="form-floating">

                                                        <input type="date" name="fecha_de_nacimiento"
                                                            class="form-control bg-light border-0" id="fechaNacimiento"
                                                            placeholder="Your Lastname" />
                                                        <label for="lastname">{{ __('messages.CamposFormularioFechaNacimiento') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <span id="edad_error" class="text-danger fw-bolder error-messages"></span>
                                                    <span class="text-danger fs-5 ">*</span>

                                                    <div class="form-floating">
                                                        <input type="int" class="form-control bg-light border-0"
                                                            id="edad" name="edad" placeholder="Your Lastname" />
                                                        <label for="lastname">{{ __('messages.CamposFormularioEdad') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <span class="text-danger fs-5 ">*</span>
                                                    <span id="pais_error" class="text-danger fw-bolder error-messages"></span>
                                                    <div class="form-floating">

                                                        <input type="text" class="form-control bg-light border-0"
                                                            id="pais" name="pais" placeholder="Your Lastname" />
                                                        <label for="lastname">{{ __('messages.CamposFormularioPais') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <span id="ciudad_error"
                                                        class="text-danger fw-bolder error-messages"></span>
                                                    <span class="text-danger fs-5 ">*</span>
                                                    <div class="form-floating">

                                                        <input type="int" class="form-control bg-light border-0"
                                                            id="ciudad" name="ciudad" placeholder="Your Lastname" />
                                                        <label for="provincia">{{ __('messages.CamposFormularioProvincia') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <input type="int" class="form-control bg-light border-0"
                                                            id="calle" name="calle" placeholder="Your Lastname" />
                                                        <label for="lastname">{{ __('messages.CamposFormularioDistrito') }}<span
                                                                class="fs-6 text-secondary fw-light"> ({{ __('messages.CamposFormularioDistritoOpcional') }})</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <span id="taller_id_error"
                                                        class="text-danger fw-bolder error-messages"></span>
                                                    <span class="text-danger fs-5 ">*</span>
                                                    <div class="form-floating">
                                                        <select id="taller_id" name="taller_id"
                                                            class="form-select bg-light mb-3"
                                                            aria-label="Taller a inscribirse">
                                                            <option selected>{{ __('messages.CamposFormularioTalleresDropdown') }}</option>
                                                            @foreach ($talleres as $tallerDisponible)
                                                                <option value="{{ $tallerDisponible->id }}">
                                                                    {{ $tallerDisponible->nombre }}</option>
                                                            @endforeach
                                                        </select>
                                                        <label for="taller_id">{{ __('messages.CamposFormularioTalleres') }}</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" id="estado" name="estado" />
                                            <input type="hidden" id="tipo_persona_id" value="{{ $tipoParticipante->id }}"
                                                name="tipo_persona_id" />

                                            @if (!auth()->user()->hasVerifiedEmail())
                                                <div class="alert alert-warning mt-2 col-12">
                                                    {{ __('messages.CamposFormularioTalleresVerificacion') }}
                                                </div>
                                                <div class="mt-2 col-12">
                                                    <a href="{{ route('verification.notice') }}"
                                                        class="btn btn-primary w-100 py-3"> {{ __('messages.BotonFormularioTalleresVerificacion') }}</a>
                                                </div>
                                            @endif
                                            <div
                                            class="mt-2 col-12"{{ auth()->user()->hasVerifiedEmail()? '': ' style=display:none;' }}>
                                            <button class="btn btn-primary w-100 py-3" id="Enviar" type="submit">
                                                {{ __('messages.BotonFormularioTalleres') }}
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endauth

    <!-- About End -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="{{ asset('js/solicitudClienteTaller/solicitudPost.js') }}"></script>
    <script src="{{ asset('js/solicitudClienteTaller/animaciones.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
