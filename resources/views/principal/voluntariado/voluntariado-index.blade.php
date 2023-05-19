@extends('layouts.navbar')
@section('content')
    <!-- Navbar Start -->
    @include('componentes.NavBarPrincipal')
    <!-- Page Header Start -->
    <!-- Page Header Start -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <div class="container-fluid header-bgV py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Voluntariados</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        Voluntariados
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
                    <p><span class="text-primary me-2">#</span>Hazte voluntario</p>
                    <h1 class="display-5 mb-4">
                        Sobre nuestros programas<br> de
                        <span class="text-primary"> Voluntariados</span>
                    </h1>
                    <p class="mb-4">
                        Los voluntariados del Corredor Biológico Hojancha-Nandayure son una experiencia
                        para personas de diversas edades que buscan desarrollarse a sí mismos y ayudar al
                        medio ambiente, por medio del desarrollo de proyectos ambientales en un determinado lugar.
                    </p>
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
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="zoofari/img/voluntariado/Voluntariados6.png" alt="" />
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
                        <font color="#028A0F">Voluntariados Disponibles!</font>

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
                            <h5 class="text-center"> ¡ <span style=" color:#028A0F "
                                    class="nombreVoluntariado">
                                    {{ $voluntariadosDisponible->nombre }}</span>!
                            </h5>
                        </div>
                        <div class="cardv-body">
                            <div class="row ">
                                <div class="col d-flex ">
                                    <img src="zoofari/img/Campannas/maps.png" alt="" width="34px" height="34PX">
                                    <p> {{ $voluntariadosDisponible->ubicacion }}.</p>

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
                                    data-nombre="{{ $voluntariadosDisponible->nombre }}">Inscribite ahora</button>
                            @endauth

                            @guest
                                {{-- // The user is not authenticated... --}}
                                <a href="{{ route('login') }}" class="my-button">Inscribite ahora</a>
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
                    <h2 class=" mb-5">¿Por qué realizar un voluntariado?</h2>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center wow fadeInUp"
                        data-wow-delay="0.5s"">
                        <a class=" d-block">
                            <img src="zoofari/img/voluntariado/ambientalismo.png" class="featured-block-image img-fluid"
                                alt="">

                            <p class="featured-block-text">Experiencia <strong> Ambiental</strong></p>
                            <p class="mb-41">
                                Ser voluntario junto a otras personas nos brinda una valiosa experiencia al participar en 
                                actividades que nos ayuden a conectar con la naturaleza, y contribuir de manera significativa.
                            </p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center wow fadeInUp"
                        data-wow-delay="0.5s"">
                        <a class=" d-block">
                            <img src="zoofari/img/voluntariado/sociologia.png" class="featured-block-image img-fluid"
                                alt="">
                            <p class="featured-block-text"><strong>Genera</strong> Impacto</p>
                            <p class="mb-41">
                                El voluntariado genera impacto y promueve el cambio positivo en la sociedad, 
                                permitiéndonos contribuir activamente a mejorar la vida de quienes más lo necesitan.
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center wow fadeInUp"
                        data-wow-delay="0.5s"">
                        <a class=" d-block">
                            <img src="zoofari/img/voluntariado/crecimiento.png" class="featured-block-image img-fluid"
                                alt="">

                            <p class="featured-block-text">Desarrollo <strong> Personal</strong></p>
                            <p class="mb-41">
                                Ser voluntario ayuda a adquirir nuevas habilidades, ampliar nuestra perspectiva y
                                enriquecer nuestra experiencia al interactuar con diferentes comunidades.
                            </p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center wow fadeInUp"
                        data-wow-delay="0.5s"">
                        <a class="d-block">
                            <img src="zoofari/img/voluntariado/caridad.png" class="featured-block-image img-fluid"
                                alt="">
                            <p class="featured-block-text"><strong>Ayudar al</strong> Entorno</p>
                            <p class="mb-41">
                                Ser voluntario permite ayudar en proyectos de conservación ambiental, limpieza y 
                                prácticas sostenibles, contribuyendo a preservar y mejorar el medio ambiente.
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

                        <img src="zoofari/img/voluntariado/Voluntariados9.jpg" class="custom-text-box-image img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-6 col-12">
                        

                        <div id="seccion-formulario" class="col-12">
                            <div class="custom-text-box">
                                <div class="row g-5">
                                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                                        <p><span class="text-primary me-2">#</span>Inscríbete</p>
                                        <h1 class="display-5 mb-4">Formulario para la inscripción</h1>
                                        <p class="mb-4">
                                            Este formulario podrás participar en los voluntariados que
                                            tenga el Corredor Biológico Hojancha-Nandayure.
                                        </p>
                                        <form id="requestForm">
                                            @csrf
                                            <p class="mb-4 text-dark">
                                                Los campos con <span class="text-danger fs-5 fw-bolder">*</span> son
                                                obligatorios
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
                                                        <label for="nombre">Nombre</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <span id="apellidos_error"
                                                        class="text-danger fw-bolder error-messages"></span>
                                                    <span class="text-danger fs-5 ">*</span>
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control bg-light border-0"
                                                            id="apellidos" name="apellidos" placeholder="Your Lastname" />
                                                        <label for="apellidos">Apellidos</label>
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
                                                            <option selected>Selecciona una opcion</option>
                                                            <option value=" Cedula Nacional">Cedula Nacional</option>
                                                            <option value="Pasaporte">Pasaporte</option>
                                                            <option value="Cedula de Residencia">Cedula de Residencia</option>
                                                        </select>
                                                        <label for="tipoidentificacion">Tipo de Identificacion</label>
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
                                                        <label for="numeroIdentificacion">Numero de Identificacion</label>
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
                                                        <label for="lastname">Fecha de Nacimiento</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <span id="edad_error" class="text-danger fw-bolder error-messages"></span>
                                                    <span class="text-danger fs-5 ">*</span>

                                                    <div class="form-floating">
                                                        <input type="int" class="form-control bg-light border-0"
                                                            id="edad" name="edad" placeholder="Your Lastname" />
                                                        <label for="lastname">Edad</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <span class="text-danger fs-5 ">*</span>
                                                    <span id="pais_error" class="text-danger fw-bolder error-messages"></span>
                                                    <div class="form-floating">

                                                        <input type="text" class="form-control bg-light border-0"
                                                            id="pais" name="pais" placeholder="Your Lastname" />
                                                        <label for="lastname">Pais</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <span id="ciudad_error"
                                                        class="text-danger fw-bolder error-messages"></span>
                                                    <span class="text-danger fs-5 ">*</span>
                                                    <div class="form-floating">

                                                        <input type="int" class="form-control bg-light border-0"
                                                            id="ciudad" name="ciudad" placeholder="Your Lastname" />
                                                        <label for="provincia">Provincia o Ciudad </label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <input type="int" class="form-control bg-light border-0"
                                                            id="calle" name="calle" placeholder="Your Lastname" />
                                                        <label for="lastname">Distrito o Calle <span
                                                                class="fs-6 text-secondary fw-light"> ( Opcional )</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <span id="voluntariado_id_error" class="text-danger fw-bolder error-messages"></span>
                                                    <span class="text-danger fs-5 ">*</span>
                                                    <div class="form-floating">
                                                        <select id="voluntariado_id" name="voluntariado_id" class="form-select bg-light mb-3" aria-label="Voluntariado a inscribirse">
                                                            <option selected>Selecciona una opcion</option>
                                                            @foreach ($voluntariadosDisponibles as $voluntariadoDisponible)
                                                                <option value="{{ $voluntariadoDisponible->id }}">{{ $voluntariadoDisponible->nombre }}</option>
                                                            @endforeach
                                                        </select>
                                                        <label for="voluntariado_id">Voluntariado a inscribirse</label>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <input type="hidden" id="estado" name="estado" />
                                            <input type="hidden" id="tipo_persona_id" value="{{ $tipoVoluntario->id }}"
                                                name="tipo_persona_id" />

                                            <div class=" mt-2 col-12">
                                                <button class="btn btn-primary w-100 py-3" id="Enviar" type="submit">
                                                    Enviar
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
