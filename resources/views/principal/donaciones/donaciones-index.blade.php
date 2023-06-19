@extends('layouts.navbar')
@section('content')
    <!-- Navbar Start -->
    @include('componentes.NavBarPrincipal')
    <!-- Page Header Start -->
    <div class="container-fluid header-bgD py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown"> {{ __('messages.TituloHeaderDonaciones') }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ url('/') }}">{{ __('messages.TextoHeaderInicio') }}</a>


                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        <font color="#028A0F">{{ __('messages.TextoHeaderDonaciones') }}</font>
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
                        {{ __('messages.PrimerTituloDonaciones') }}
                        <font color="#028A0F">{{ __('messages.PrimerTituloDonacionesVerde') }}</font>?

                    </h1>
                    <p class="mb-4">
                        {{ __('messages.PrimerParrafoDonaciones') }}

                    </p>


                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>
                        {{ __('messages.CheckListDonacionesEspecie') }}
                    </h5>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>
                        {{ __('messages.CheckListDonacionesMonetarios') }}
                    </h5>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>
                        {{ __('messages.CheckListDonacionesAlimenticios') }}
                    </h5>

                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="zoofari/img/Donaciones/DonacionesRecuadro.webp" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                {{ __('messages.SegundoTituloDonaciones') }}
            </h1>
            <div class="container mt-5">
                <div class="Hola row g-4 d-flex">


                    <!--Cards Alimentos-->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="cardA mb-5">
                            <div class="cardA-body ">
                                <div class="row">
                                    <div class="col- d-flex justify-content-center">
                                        <div class="icono mt-2 mb-2">
                                            <img src="zoofari/img/Donaciones/Alimento.webp" alt="" weight="50px"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col">
                                        <div class="cardA-title d-flex justify-content-center">
                                            <h4>{{ __('messages.TituloCardDonacionesAlimenticios') }}</h4>
                                        </div>

                                        <div class="buttons d-flex justify-content-center aligh-items-center mt-2 mb-3">
                                            <a class="btn abrirAlimentos btn-Descarga text-decoration-none" href="#"
                                                id="abrirAlimentos">{{ __('messages.BotonVerMasDonacionesAlimenticios') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Termina cards Alimentos-->
                    <!--Cards Monetarias-->
                    <div class=" col-lg-4 col-md-6 col-sm-12">
                        <div class="cardM mb-5">
                            <div class="cardM-body ">
                                <div class="row">
                                    <div class="col- d-flex justify-content-center">
                                        <div class="icono mt-2 mb-2">
                                            <img src="zoofari/img/Donaciones/DMonetaria.webp" alt="" weight="50px"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col">
                                        <div class="cardM-title d-flex justify-content-center">
                                            <h4>{{ __('messages.TituloCardDonacionesMonetarias') }}</h4>
                                        </div>

                                        <div class="buttons d-flex justify-content-center aligh-items-center mt-2 mb-3">
                                            <a class="btn btn-Descarga text-decoration-none" href="#"
                                                id="abrirMonetarias">{{ __('messages.BotonVerMasDonacionesMonetarias') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Termina cards Monetarias-->

                    <!--Cards especie-->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="cardr mb-5">
                            <div class="cardr-body ">
                                <div class="row">
                                    <div class="col- d-flex justify-content-center">
                                        <div class="icono mt-2 mb-2">
                                            <img src="zoofari/img/Donaciones/Especies.webp" alt="" weight="50px"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col">
                                        <div class="cardr-title d-flex justify-content-center">
                                            <h4>{{ __('messages.TituloCardDonacionesEspecie') }}</h4>
                                        </div>

                                        <div class="buttons d-flex justify-content-center aligh-items-center mt-2 mb-3">
                                            <a class="abrirMEspecies btn btn-Descarga text-decoration-none" href="#"
                                                id="abrirEspecies">{{ __('messages.BotonVerMasDonacionesEspecie') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Termina cards especie-->

                </div>
            </div>



            <!--Modal Monetarias-->
            <div id="Monetarias" class="modal">
                <div class="flex" id="flexMonetarias">
                    <div class="contenido-modal">
                        <div class="row d-flex justify-content-end">
                            <div class="col-lg-1 col-sm-2  d-flex justify-content-lg-start justify-content-sm-end">
                                <span class="close" id="closeMonetarias">&times;</span>

                            </div>
                        </div>
                        <div class="row  ">
                            <div class="col-lg-12  d-flex justify-content-center mt-2 ">
                                <h2 class="text-sm-end mb-1">
                                    <font color="#028A0F">{{ __('messages.TituloDentroDonacionesMonetarias') }}</font>
                                </h2>
                            </div>

                            <div class="modal-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-9  ">
                                        <div class="flex-fill">
                                            <p class="text-center">
                                                {{ __('messages.ParrafoDentroDonacionesMonetarias') }}
                                            </p>
                                        </div>

                                    </div>
                                    <hr style="background-color:#028A0F ;">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class=" py-4 d-flex justify-content-center">
                                                {{ __('messages.TituloDentroCuentasBancarias') }}</h5>
                                        </div>
                                    </div>

                                    <div class="row d-flex justify-content-end">
                                        <div class="col-lg-8 col-sm-12">

                                            @foreach ($cuentasBancarias as $cuentasBancaria)
                                                <span class="fw-bold">{{ $cuentasBancaria->entidad_bancaria }} :</span>
                                                <span>{{ $cuentasBancaria->numero_cuenta }} </span>
                                                <br>
                                            @endforeach
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Fin Modal Monetarias-->

            <!--Modal alimentos-->
            <div id="Alimentos" class="modal">
                <div class="flex" id="flexAlimentos">
                    <div class="contenido-modal">
                        <div class="alimentosInfo row d-flex justify-content-center ">
                            <div class="col-10  d-flex justify-content-center mt-2 ">
                                <div class="imagenAlimentos mt-2">
                                    <img src="zoofari/img/Donaciones/Alimento.webp" weight="70px" height="70px">

                                </div>
                                <div class="tituloalimentos">
                                    <h2 class="mb-1">
                                        <font color="#028A0F">{{ __('messages.TituloDentroDonacionesAlimenticios') }}
                                        </font>
                                    </h2>
                                </div>




                            </div>
                            <div class="col-2 d-flex justify-content-center aligh-items-center ">
                                <span class="close" id="closeAlimentos">&times;</span>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col-9  ">
                                    <div class="flex-fill">
                                        <p class="text-center">
                                            {{ __('messages.ParrafoDentroDonacionesAlimenticios') }}
                                        </p>
                                        <hr style="background-color:#028A0F ;">
                                        <div class="row d-flex  ">
                                            <div class="col-lg-4 col-md-4 col-sm-12 m-3 ">
                                                <ul class="list-group list-group-flush text-center ">
                                                    @foreach ($alimentos as $alimento)
                                                        <li class="list-group-item">{{ $alimento->nombre }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Fin Modal alimentos-->


        <!--MOdal Especies-->


        <div id="Especies" class="modalEspecies">
            <div class="flexEspecies" id="flexEspecies">
                <div class="contenido-modal">
                    <div class="row d-flex justify-content-end">
                        <div class="col-lg-1 col-sm-2  d-flex justify-content-lg-start justify-content-sm-end">
                            <span class="close closeEspecies" id="closeEspecies">&times;</span>

                        </div>
                    </div>
                    <div class="row  ">
                        <div class="col-12  d-flex justify-content-center aligh-items-center mt-2 ">
                            <div class="imagen">
                                <img src="img/hoja.png" alt="">
                            </div>
                            <div class="titulo ">
                                <h2>
                                    <font color="#028A0F">{{ __('messages.TituloDentroDonacionesEspecie') }}</font>
                                </h2>
                            </div>
                        </div>
                    </div>


                    <div class="modal-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col-9  ">
                                <div class="flex-fill ">
                                    <p class="text-center">
                                        {{ __('messages.ParrafoDentroDonacionesEspecie') }}
                                    </p>
                                    <hr style="background-color:#028A0F ;">
                                    <div class="row d-flex  ">
                                        <div class="col-lg-4 col-md-4 col-sm-12 m-3 ">
                                            <ul class="list-group list-group-flush text-center ">
                                                @foreach ($herramientas as $herramienta)
                                                    <li class="list-group-item">{{ $herramienta->nombre }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>

            <!--TErmina modal Especies-->



        </div>
    </div>
    <!-- Testimonial End -->

    <script src="zoofari/js/donaciones.js"></script>
@endsection
<!-- Navbar End -->
