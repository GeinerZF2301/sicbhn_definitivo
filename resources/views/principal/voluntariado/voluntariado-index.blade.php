@extends('layouts.navbar')
@section('content')
    <!-- Navbar Start -->
    @include('componentes.NavBarPrincipal')
    <!-- Page Header Start -->
    <!-- Page Header Start -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <div class="container-fluid header-bgV py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">{{ __('messages.TituloHeaderVoluntariados') }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ url('/') }}">{{ __('messages.TextoHeaderInicio') }}</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        {{ __('messages.TextoHeaderVoluntariados') }}
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
                    <p><span class="text-primary me-2">#</span>{{ __('messages.PrimerHashtagVoluntariados') }}</p>
                    <h1 class="display-5 mb-4">
                        {{ __('messages.PrimerTituloVoluntariados') }}
                        <span class="text-primary">{{ __('messages.PrimerTituloVoluntariadosVerde') }}</span>
                    </h1>
                    <p class="mb-4">
                        {{ __('messages.PrimerParrafoVoluntariados') }}
                    </p>
                    @auth
                        {{-- // The user is authenticated... --}}
                        <a id="btn-scroll" class="btn-scroll-registrarse my-button">{{ __('messages.TextoBotonInscribeteAhora') }}</a>
                    @endauth

                    @guest
                        {{-- // The user is not authenticated... --}}
                        <a href="{{ route('login') }}?redirect={{ url()->current() }}"
                            class="my-button btn-scroll-registrarse">{{ __('messages.TextoBotonRegistrateAhora') }}</a>
                    @endguest

                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="zoofari/img/voluntariado/Voluntariados6.webp" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12  wow fadeInUp" data-wow-delay="0.1s">

                    <h1 class="display-4 text-center mb-4">
                        <font color="#028A0F">{{ __('messages.SegundoTituloVoluntariados') }}</font>

                    </h1>

                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5 mb-5">
        <div class="row  g-3 d-flex justify-content-md-center justify-content-lg-start">

            @foreach ($voluntariadosDisponibles as $voluntariadosDisponible)
                <div class="col-sm-12 col-md-8  col-lg-4">

                    <div class="cardv">
                        <div class="cardv-title mt-2">
                            <input id="id" class="id" name="id" type="hidden"
                                value="{{ $voluntariadosDisponible->id }}">
                            <h5 class="text-center"> ¡ <span style=" color:#028A0F " class="nombreVoluntariado">
                                    {{ $voluntariadosDisponible->nombre }}</span>!
                            </h5>
                        </div>
                        <div class="cardv-body">
                            <div class="row ">
                                <div class="col d-flex ">
                                    <img src="zoofari/img/Campannas/maps.webp" alt="" width="34px" height="34PX">
                                    <p> {{ $voluntariadosDisponible->ubicacion }}.</p>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <img src="zoofari/img/Campannas/calendario.webp" alt="">
                                </div>
                                <div class="col-4">
                                    <img src="zoofari/img/Campannas/reloj.webp" alt="">
                                </div>
                                <div class="col-4">
                                    <img src="zoofari/img/voluntariado/altavoz.webp" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <p>{{ $voluntariadosDisponible->fecha }}</p>
                                </div>
                                <div class="col-4">
                                    <p>{{ $voluntariadosDisponible->hora }} </p>
                                </div>
                                <div class="col-4">
                                    <p>{{ $voluntariadosDisponible->tipo_voluntariado }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 me-2px ms-2px">
                                    <p class="descripcion ">{{ $voluntariadosDisponible->descripcion }}</p>
                                </div>
                            </div>
                            @auth
                                {{-- // The user is authenticated... --}}
                                <button class="my-button btn-scroll btn-select-voluntariado"
                                    data-id="{{ $voluntariadosDisponible->id }}"
                                    data-nombre="{{ $voluntariadosDisponible->nombre }}">{{ __('messages.BotonInscribeteCard') }}</button>
                            @endauth

                            @guest
                                {{-- // The user is not authenticated... --}}
                                <a href="{{ route('login') }}" class="my-button">{{ __('messages.BotonInscribeteCard') }}</a>
                            @endguest


                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>


    <section class="section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12 text-center mx-auto wow fadeInUp" data-wow-delay="0.4s"">
                    <h2 class=" mb-5">{{ __('messages.TercerTituloVoluntariados') }}</h2>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center wow fadeInUp"
                        data-wow-delay="0.5s"">
                        <a class=" d-block">
                            <img src="zoofari/img/voluntariado/ambientalismo.webp" class="featured-block-image img-fluid"
                                alt="">

                            <p class="featured-block-text">{{ __('messages.TituloCardExperiencia') }}</p>
                            <p class="mb-41">
                                {{ __('messages.TextoCardExperiencia') }}
                            </p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center wow fadeInUp"
                        data-wow-delay="0.5s"">
                        <a class=" d-block">
                            <img src="zoofari/img/voluntariado/sociologia.webp" class="featured-block-image img-fluid"
                                alt="">
                            <p class="featured-block-text">{{ __('messages.TituloCardImpacto') }}</p>
                            <p class="mb-41">
                                {{ __('messages.TextoCardImpacto') }}
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center wow fadeInUp"
                        data-wow-delay="0.5s"">
                        <a class=" d-block">
                            <img src="zoofari/img/voluntariado/crecimiento.webp" class="featured-block-image img-fluid"
                                alt="">

                            <p class="featured-block-text">{{ __('messages.TituloCardDesarrollo') }}</p>
                            <p class="mb-41">
                                {{ __('messages.TextoCardDesarrollo') }}
                            </p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center wow fadeInUp"
                        data-wow-delay="0.5s"">
                        <a class="d-block">
                            <img src="zoofari/img/voluntariado/caridad.webp" class="featured-block-image img-fluid"
                                alt="">
                            <p class="featured-block-text">{{ __('messages.TituloCardAyudar') }}</p>
                            <p class="mb-41">
                                {{ __('messages.TextoCardAyudar') }}
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    @auth


        <section class="section-padding section-bg" id="section_2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">

                        <img src="zoofari/img/voluntariado/Voluntariados9.webp" class="custom-text-box-image img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-6 col-12">


                        <div id="seccion-formulario" class="col-12">
                            <div class="custom-text-box">
                                <div class="row g-5">
                                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                                        <p><span class="text-primary me-2">#</span>{{ __('messages.SegundoHashtagFormularioVoluntariados') }}</p>
                                        <h1 class="display-5 mb-4">{{ __('messages.TituloFormularioVoluntariados') }}</h1>
                                        <p class="mb-4">
                                            {{ __('messages.ParrafoFormularioVoluntariados') }}
                                        </p>
                                        <form id="requestForm">
                                            @csrf
                                            <p class="mb-4 text-dark">
                                                {{ __('messages.IndicacionCamposObligatorios') }}<span class="text-danger fs-5 fw-bolder">*</span> 
                                                {{ __('messages.IndicacionCamposObligatoriosSegundo') }}
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
                                                    <span id="voluntariado_id_error"
                                                        class="text-danger fw-bolder error-messages"></span>
                                                    <span class="text-danger fs-5 ">*</span>
                                                    <div class="form-floating">
                                                        <select id="voluntariado_id" name="voluntariado_id"
                                                            class="form-select bg-light mb-3"
                                                            aria-label="Voluntariado a inscribirse">
                                                            <option selected>{{ __('messages.CamposFormularioVoluntariadoDropdown') }}</option>
                                                            @foreach ($voluntariadosDisponibles as $voluntariadoDisponible)
                                                                <option value="{{ $voluntariadoDisponible->id }}">
                                                                    {{ $voluntariadoDisponible->nombre }}</option>
                                                            @endforeach
                                                        </select>
                                                        <label for="voluntariado_id">{{ __('messages.CamposFormularioVoluntariado') }}</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" id="estado" name="estado" />
                                            <input type="hidden" id="tipo_persona_id" value="{{ $tipoVoluntario->id }}"
                                                name="tipo_persona_id" />

                                            @if (!auth()->user()->hasVerifiedEmail())
                                                <div class="alert alert-warning mt-2 col-12">
                                                    {{ __('messages.CamposFormularioVoluntariadoVerificacion') }}
                                                </div>
                                                <div class="mt-2 col-12">
                                                    <a href="{{ route('verification.notice') }}"
                                                        class="btn btn-primary w-100 py-3">{{ __('messages.BotonFormularioVoluntariadoVerificacion') }}</a>
                                                </div>
                                            @endif

                                            <div
                                                class="mt-2 col-12"{{ auth()->user()->hasVerifiedEmail()? '': ' style=display:none;' }}>
                                                <button class="btn btn-primary w-100 py-3" id="Enviar" type="submit">
                                                    {{ __('messages.CamposFormularioProvincia') }}
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
    <script src="{{ asset('js/solicitudClienteVoluntario/solicitudPost.js') }}"></script>
    <script src="{{ asset('js/solicitudClienteVoluntario/animaciones.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
