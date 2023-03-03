@extends('layouts.navbar')
@section('content')
    <!-- Navbar Start -->
    @include('componentes.NavBarPrincipal')
    <!-- Page Header Start -->
    <!-- Page Header Start -->
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
                    <button class="my-button">Registrate ahora</button>

                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="zoofari/img/voluntariado/Voluntariados6.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12 text-center mx-auto wow fadeInUp" data-wow-delay="0.4s"">
                    <h2 class="mb-5">¿Por qué realizar un voluntariado?</h2>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center wow fadeInUp"
                        data-wow-delay="0.5s"">
                        <a class="d-block">
                            <img src="zoofari/img/voluntariado/ambientalismo.png" class="featured-block-image img-fluid"
                                alt="">

                            <p class="featured-block-text">Experiencia <strong> Ambiental</strong></p>
                            <p class="mb-41">
                                Ser voluntariado junto a personas que tienen conocimientos para brindarte en este
                                contexto ambiental.
                            </p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center wow fadeInUp"
                        data-wow-delay="0.5s"">
                        <a class="d-block">
                            <img src="zoofari/img/voluntariado/sociologia.png" class="featured-block-image img-fluid"
                                alt="">
                            <p class="featured-block-text"><strong>Genera</strong> Impacto</p>
                            <p class="mb-41">
                                Ser voluntariado junto a personas que tienen conocimientos para brindarte en este
                                contexto ambiental.
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center wow fadeInUp"
                        data-wow-delay="0.5s"">
                        <a class="d-block">
                            <img src="zoofari/img/voluntariado/crecimiento.png" class="featured-block-image img-fluid"
                                alt="">

                            <p class="featured-block-text">Desarrollo <strong> Personal</strong></p>
                            <p class="mb-41">
                                Ser voluntariado junto a personas que tienen conocimientos para brindarte en este
                                contexto ambiental.
                            </p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center wow fadeInUp"
                        data-wow-delay="0.5s"">
                        <a href="donate.html" class="d-block">
                            <img src="zoofari/img/voluntariado/caridad.png" class="featured-block-image img-fluid"
                                alt="">
                            <p class="featured-block-text"><strong>Ayudar al</strong> Entorno</p>
                            <p class="mb-41">
                                Ser voluntariado junto a personas que tienen conocimientos para brindarte en este
                                contexto ambiental.
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
z
                    <img src="zoofari/img/voluntariado/Voluntariados9.jpg" class="custom-text-box-image img-fluid"
                        alt="">
                </div>
                <div class="col-lg-6 col-12">
                    <!-- <div class="custom-text-box">
                                          <h2 class="mb-2">Our Story</h2>
                                          <h5 class="mb-3">Kind Heart Charity, Non-Profit Organization</h5>
                                          <p class="mb-0">This is a Bootstrap 5.2.2 CSS template for charity organization websites.
                                              You can feel free to use it. Please tell your friends about TemplateMo website. Thank
                                              you.</p>
                                      </div> -->
                    <div class="col-12">
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
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <input type="text" name="nombre" class="form-control bg-light border-0"
                                                        id="nombre" placeholder="Your Name" />
                                                    <label for="nombre">Nombre</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control bg-light border-0"
                                                        id="lastname" name="apellidos" placeholder="Your Lastname" />
                                                    <label for="apellidos">Apellidos</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="lastname">Tipo de Identificacion</label>
                                                <select class="form-select bg-light form-select-lg mb-3 "
                                                    name="tipo_identificacion" id="tipoIdentificacion"
                                                    aria-label=".form-select-lg example"">
                                                    <option selected>Selecciona una opcion</option>
                                                    <option value="Cédula Nacional">Cédula Nacional</option>
                                                    <option value="Cédula de Residencia">Cédula de Residencia</option>
                                                    <option value="Pasaporte">Pasaporte</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control bg-light border-0"
                                                        id="numeroIdentificacion" name="numero_identificacion" placeholder="Your Lastname" />
                                                    <label for="numeroIdentificacion">Numero de Identificacion</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <input type="date" name="fecha_de_nacimiento" class="form-control bg-light border-0"
                                                        id="fechaNacimiento" placeholder="Your Lastname" />
                                                    <label for="lastname">Fecha de Nacimiento</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <input type="int" class="form-control bg-light border-0"
                                                        id="edad" name="edad" placeholder="Your Lastname" />
                                                    <label for="lastname">Edad</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control bg-light border-0"
                                                        id="pais" name="pais" placeholder="Your Lastname" />
                                                    <label for="lastname">Pais</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <input type="int" class="form-control bg-light border-0"
                                                        id="ciudad" name="ciudad" placeholder="Your Lastname" />
                                                    <label for="lastname">Provincia o Ciudad</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <input type="int" class="form-control bg-light border-0"
                                                        id="distrito" name="calle" placeholder="Your Lastname" />
                                                    <label for="lastname">Distrito o Calle </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="int" class="form-control bg-light border-0"
                                                    id="voluntariados" placeholder="voluntariado" />
                                                <label for="voluntariado">Voluntariado a inscribirse</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">
                                                Enviar
                                            </button>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="js/solicitudVoluntariado/solicitudPost.js"></script>

@endsection

