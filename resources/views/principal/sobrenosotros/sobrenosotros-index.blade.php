@extends('layouts.navbar')
@section('content')
    <!-- Navbar Start -->
    @include('componentes.NavBarPrincipal')
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid header-bgSN py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">
                {{ __('messages.TituloHeaderSobreNosotros') }}
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ url('/') }}"> {{ __('messages.TextoHeaderInicio') }}</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        {{ __('messages.TextoHeaderSobreNosotros') }}
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
                        {{ __('messages.PrimerTituloSobreNosotros') }}
                        <font color="#028A0F">{{ __('messages.SegundoTituloSobreNosotros') }}</font>
                        <font color="#ffed4a">{{ __('messages.TerceroTituloSobreNosotros') }}</font>
                    </h1>
                    <p class="mb-4">
                        {{ __('messages.PrimerParrafoSobreNosotros') }}
                        <br>
                        <br>

                        {{ __('messages.SegundoParrafoSobreNosotros') }}
                    </p>


                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="/zoofari/img/SN.webp" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->




    <!-- Funciones del corredor -->
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto wow fadeInUp" data-wow-delay="0.5s"
        style="max-width: 600px;">
        <h5 class="fw-bold text-primary text-uppercase">{{ __('messages.PrimerTituloFunciones') }}</h5>
        <h1 class="mb-0">{{ __('messages.SegundoTituloFunciones') }}</h1>
    </div>

    <div class="card-container">
        <div class="card" style="background-color: #4caf50;">
            <p class="card-text">{{ __('messages.CardsFuncionesAdministracion') }}</p>
        </div>
        <div class="card" style="background-color: #4caf50;">
            <p class="card-text">{{ __('messages.CardsFuncionesFormulacion') }}</p>
        </div>
        <div class="card" style="background-color: #4caf50;">
            <p class="card-text">{{ __('messages.CardsFuncionesCoordinacion') }}</p>
        </div>
        <div class="card" style="background-color: #4caf50;">
            <p class="card-text">{{ __('messages.CardsFuncionesAutoevaluacion') }}</p>
        </div>
        <div class="card" style="background-color: #4caf50;">
            <p class="card-text">{{ __('messages.CardsFuncionesNuestrasActividades') }}</p>
        </div>
    </div>

    <!-- funciones del corredor End -->



    <!-- Misión y visión Start -->

    <div class="container-xxl py-5">
        <div class="container mv">
            <div class="row g-5">

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="zoofari/img/SobreNosotros/SBNII.webp" alt="" />
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">

                    <h1 class="display-5 mb-4">
                        {{ __('messages.PrimerTituloMision') }}
                        <span class="text-primary">{{ __('messages.SegundoTituloMision') }}</span>!
                    </h1>
                    <p class="mb-4">
                        {{ __('messages.TextoMision') }}
                    </p>

                    <h1 class="display-5 mb-4">
                        {{ __('messages.PrimerTituloVision') }}
                        <span class="text-primary">{{ __('messages.SegundoTituloVision') }}</span>!
                    </h1>
                    <p class="mb-4">
                        {{ __('messages.TextoVision') }}

                    </p>

                </div>

            </div>
        </div>
    </div>

    <!-- Misión y visión End -->


    <!-- Miembros -->
    <div class="container-xxl py-5">
        <div class="container ">
            <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">{{ __('messages.PrimerTituloMiembros') }}</h5> <br>
                    <h1 class="mb-0">{{ __('messages.SegundoTituloMiembros') }}</h1>
                </div>
            </div>


            <div class="row g-4">

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="animal-item" href="https://www.sinac.go.cr/ES/Paginas/default.aspx">
                                <div class="position-relative">
                                    <img class="img-fluid miembros-img"
                                        src="zoofari/img/SobreNosotros/Miembros/LogoSinac.webp" href=" "
                                        alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">{{ __('messages.1CardMiembrosTilulo') }}</p>
                                        <h5 class="text-white mb-0">{{ __('messages.1CardMiembrosDescripcion') }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>



                        <div class="col-12">
                            <a class="animal-item"
                                href="https://www.facebook.com/people/Gesti%C3%B3n-Ambiental-Municipalidad-de-Hojancha/100064327226544/">
                                <div class="position-relative">
                                    <img class="img-fluid miembros-img"
                                        src="zoofari/img/SobreNosotros/Miembros/GestionAmbientalHojancha.webp"
                                        alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">{{ __('messages.4CardMiembrosTilulo') }}</p>
                                        <h5 class="text-white mb-0">{{ __('messages.4CardMiembrosDescripcion') }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12">
                            <a class="animal-item" href="https://www.panamericanwoods.net/about-us">
                                <div class="position-relative">
                                    <img class="img-fluid miembros-img"
                                        src="zoofari/img/SobreNosotros/Miembros/panamericanWoods.webp" alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">{{ __('messages.7CardMiembrosTilulo') }}</p>
                                        <h5 class="text-white mb-0">{{ __('messages.7CardMiembrosDescripcion') }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12">
                            <a class="animal-item">
                                <div class="position-relative">
                                    <img class="img-fluid miembros-img"
                                        src="zoofari/img/SobreNosotros/Miembros/AsadaMorote.webp" alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">{{ __('messages.10CardMiembrosTilulo') }}</p>
                                        <h5 class="text-white mb-0">{{ __('messages.10CardMiembrosDescripcion') }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row g-4">

                        <div class="col-12">
                            <a class="animal-item" href="https://fundecodes.org/">
                                <div class="position-relative">
                                    <img class="img-fluid miembros-img"
                                        src="zoofari/img/SobreNosotros/Miembros/fundecodes.webp" alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">{{ __('messages.2CardMiembrosTilulo') }}</p>
                                        <h5 class="text-white mb-0">{{ __('messages.2CardMiembrosDescripcion') }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="animal-item" href="https://www.facebook.com/MTFTeca/?locale=es_LA">
                                <div class="position-relative">
                                    <img class="img-fluid miembros-img"
                                        src="zoofari/img/SobreNosotros/Miembros/Logo Final MTF.webp" alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">{{ __('messages.5CardMiembrosTilulo') }}</p>
                                        <h5 class="text-white mb-0">{{ __('messages.5CardMiembrosDescripcion') }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12">
                            <a class="animal-item" href="https://www.offbeattravel.us/">
                                <div class="position-relative">
                                    <img class="img-fluid miembros-img"
                                        src="zoofari/img/SobreNosotros/Miembros/logo offbeattravel.webp" alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">{{ __('messages.8CardMiembrosTilulo') }}</p>
                                        <h5 class="text-white mb-0">{{ __('messages.8CardMiembrosDescripcion') }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="animal-item">
                                <div class="position-relative">
                                    <img class="img-fluid miembros-img"
                                        src="zoofari/img/SobreNosotros/Miembros/monteAlto.webp" alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">{{ __('messages.3CardMiembrosTilulo') }}</p>
                                        <h5 class="text-white mb-0">{{ __('messages.3CardMiembrosDescripcion') }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="animal-item" href="https://www.ministeriodesalud.go.cr/">
                                <div class="position-relative">
                                    <img class="img-fluid miembros-img"
                                        src="zoofari/img/SobreNosotros/Miembros/LogoMinisterioSalud2.webp"
                                        alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">{{ __('messages.6CardMiembrosTilulo') }}</p>
                                        <h5 class="text-white mb-0">{{ __('messages.6CardMiembrosDescripcion') }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12">
                            <a class="animal-item"
                                href="https://www.nandayure.go.cr/index.php/mn-gestionmunicipal/mn-areaadministrativa/mn-gestion-ambiental">
                                <div class="position-relative">
                                    <img class="img-fluid miembros-img"
                                        src="zoofari/img/SobreNosotros/Miembros/Logo gestion ambiental Muni Nandayure.webp"
                                        alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">{{ __('messages.9CardMiembrosTilulo') }}</p>
                                        <h5 class="text-white mb-0">{{ __('messages.9CardMiembrosDescripcion') }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="animal-item" href="https://cacnandayure.com/">
                                <div class="position-relative">
                                    <img class="img-fluid miembros-img"
                                        src="zoofari/img/SobreNosotros/Miembros/CentroAgrícolaNandayure.webp"
                                        alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">{{ __('messages.11CardMiembrosTilulo') }}</p>
                                        <h5 class="text-white mb-0">{{ __('messages.11CardMiembrosDescripcion') }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Miembros End -->

    <!-- colaboradores -->

    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">{{ __('messages.PrimerTituloColaboradores') }}</h5> <br>
            <h1 class="mb-0">{{ __('messages.SegundoTituloColaboradores') }}</h1>
        </div>

    </div>
    <div class="cards-container- wow fadeInUp" data-wow-delay="0.1s">
        <div class="card-" data-wow-delay="0.1s">
            <a href="https://www.chorotega.una.ac.cr">
                <img src="../zoofari/img/SobreNosotros/logosede.webp" alt="Image 1"> </a>
        </div>
        <div class="card- wow fadeInUp" data-wow-delay="0.1s">
            <a href="https://www.facebook.com/nicoyasistemas/">
                <img src="../zoofari/img/SobreNosotros/logocarrera.webp" alt="Image 2"> </a>
        </div>
        <div class="card- wow fadeInUp" data-wow-delay="0.1s">
            <a href="https://www.instagram.com/jose_venegas_photography/">
                <img src="../zoofari/img/SobreNosotros/jose-venegas.webp"alt="Image 3"> </a>
        </div>
    </div>

    <!-- colaboradores end -->



    <!-- EQUIPO DESARROLLADOR-->
    <br>
    <br>
    <br>

    <center>
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto wow fadeInUp" data-wow-delay="0.1s"
            style="max-width: 600px;">
            <h4 class="fw-bold text-primary text-uppercase">{{ __('messages.PrimerTituloEquipoDesarrollador') }}</h4>
            <h1 class="mb-0">{{ __('messages.SegundoTituloEquipoDesarrollador') }}</h1>
        </div>

        <div class="card-Desarrolladores wow fadeInUp" data-wow-delay="0.1s"">
            <img src="../zoofari/img/SobreNosotros/Geiner_EquipoD.webp" alt="Imagen 5">
            <a href="">
                <div class="card-text-Desarrolladores">
                    <h2>{{ __('messages.1NombreTituloEquipoDesarrollador') }}</h2>
                    <p>{{ __('messages.1CardEquipoDesarrollador') }}</p>
                </div>
            </a>
        </div>

        <div class="card-Desarrolladores wow fadeInUp" data-wow-delay="0.1s"">
            <img src="../zoofari/img/SobreNosotros/Melany_EquipoD.webp" alt="Imagen 2">
            <a href="http://linkedin.com/in/melany-lawson-méndez-00a48027b">
                <div class="card-text-Desarrolladores">
                    <h2>{{ __('messages.2NombreTituloEquipoDesarrollador') }}</h2>
                    <p>{{ __('messages.2CardEquipoDesarrollador') }}</p>
                </div>
            </a>
        </div>

        <div class="card-Desarrolladores wow fadeInUp" data-wow-delay="0.1s"">
            <img src="../zoofari/img/SobreNosotros/Mar_EquipoD.webp" alt="Imagen 3">
            <a href="">
            <div class="card-text-Desarrolladores">
                <h2>{{ __('messages.3NombreTituloEquipoDesarrollador') }}</h2>
                <p>{{ __('messages.3CardEquipoDesarrollador') }}</p>
            </div>
            </a>
        </div>

        <div class="card-Desarrolladores wow fadeInUp" data-wow-delay="0.1s"">
            <img src="../zoofari/img/SobreNosotros/Kris_EquipoD.webp" alt="Imagen 4">
            <a href="https://www.linkedin.com/in/kriscia-campos-c%C3%A1rdenas-46b937276/">
                <div class="card-text-Desarrolladores">
                    <h2>{{ __('messages.4NombreTituloEquipoDesarrollador') }}</h2>
                    <p>{{ __('messages.4CardEquipoDesarrollador') }}</p>
                </div>
            </a>
        </div>

        <div class="card-Desarrolladores wow fadeInUp" data-wow-delay="0.1s"">
            <img src="../zoofari/img/SobreNosotros/Alfieri_EquipoD.webp" alt="Imagen 1">
            <a href="https://www.linkedin.com/in/alfieri-mora-2bb34625a/">
                <div class="card-text-Desarrolladores">
                    <h2>{{ __('messages.5NombreTituloEquipoDesarrollador') }}</h2>
                    <p>{{ __('messages.5CardEquipoDesarrollador') }}</p>
                </div>
            </a>
        </div>
    </center>

    <!-- EQUIPO DESARROLLADOR END-->
@endsection
