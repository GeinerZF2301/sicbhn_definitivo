@extends('layouts.navbar')
@section('content')
    <!-- Navbar Start -->
    @include('componentes.NavBarPrincipal')
    <!-- Page Header Start -->
    <div class="container-fluid header-bgD py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Donaciones</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ url('/') }}">Inicio</a>


                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        <font color="#028A0F">Donaciones</font>
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
                    {{-- <p><span class="text-primary me-2">#</span>Welcome To Zoofari</p> --}}
                    <h1 class="display-5 mb-4">
                        ¿Por qué debería hacer una
                        <font color="#028A0F">Donación</font>?
                        {{-- <span class="text-primary">Donación</span>? --}}
                    </h1>
                    <p class="mb-4">
                        La ayuda proporcionada al Corredor Biológico Hojancha-Nandayure,
                        permite desarrollar nuevos proyectos y mantener los que ya están implementados.

                    </p>


                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>Donativos en Especie
                    </h5>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>Donativos Monetarios
                    </h5>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>Donativos Alimenticios
                    </h5>

                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="zoofari/img/Donaciones/DonacionesRecuadro.jpg" alt="" />
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
                Tipos de Donaciones
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
                                            <img src="zoofari/img/Donaciones/Alimento.jpg" alt="" weight="50px" height="50px">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col">
                                        <div class="cardA-title d-flex justify-content-center">
                                            <h4>Donativos Alimenticios</h4>
                                        </div>

                                        <div class="buttons d-flex justify-content-center aligh-items-center mt-2 mb-3">
                                            <a class="btn abrirAlimentos btn-Descarga text-decoration-none" href="#"
                                                id="abrirAlimentos">Ver más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Termina cards Alimentos-->


                    <!--Cards especie-->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="cardr mb-5">
                            <div class="cardr-body ">
                                <div class="row">
                                    <div class="col- d-flex justify-content-center">
                                        <div class="icono mt-2 mb-2">
                                            <img src="zoofari/img/Donaciones/Especies.jpg" alt="" weight="50px" height="50px">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col">
                                        <div class="cardr-title d-flex justify-content-center">
                                            <h4>Donativos en Especie</h4>
                                        </div>

                                        <div class="buttons d-flex justify-content-center aligh-items-center mt-2 mb-3">
                                            <a class="abrirMEspecies btn btn-Descarga text-decoration-none" href="#"
                                                id="abrirEspecies">Ver más</a>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Termina cards especie-->
            
                     <!--Cards Monetarias-->
                     <div class=" col-lg-4 col-md-6 col-sm-12">
                                                    <div class="cardM mb-5">
                                                        <div class="cardM-body ">
                                                            <div class="row">
                                                                <div class="col- d-flex justify-content-center">
                                                                    <div class="icono mt-2 mb-2">
                                                                        <img src="zoofari/img/Donaciones/DMonetaria.png" alt="" weight="50px"
                                                                            height="50px">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row ">
                                                                <div class="col">
                                                                    <div class="cardM-title d-flex justify-content-center">
                                                                        <h4>Donativos Monetarios</h4>
                                                                    </div>
            
                                                                    <div
                                                                        class="buttons d-flex justify-content-center aligh-items-center mt-2 mb-3">
                                                                        <a class="btn btn-Descarga text-decoration-none" href="#"
                                                                            id="abrirMonetarias">Ver más</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <!--Termina cards Monetarias-->
            
                                        </div>
                                    </div>
            
            
            
                                    <!--Modal Monetarias-->
                                    <div id="Monetarias" class="modal">
                                        <div class="flex" id="flexMonetarias">
                                            <div class="contenido-modal">
                                                <div class="row d-flex justify-content-end">
                                                    <div
                                                        class="col-lg-1 col-sm-2  d-flex justify-content-lg-start justify-content-sm-end">
                                                        <span class="close" id="closeMonetarias">&times;</span>
            
                                                    </div>
                                                </div>
                                                <div class="row  ">
                                                    <div class="col-lg-12  d-flex justify-content-center mt-2 ">
                                                        <h2 class="text-sm-end mb-1">
                                                            <font color="#028A0F">Donativos Monetarios</font>
                                                        </h2>
                                                    </div>
            
                                                    <div class="modal-body">
                                                        <div class="row d-flex justify-content-center">
                                                            <div class="col-9  ">
                                                                <div class="flex-fill">
                                                                    <p class="text-center">
                                                                        Si deseas contribuir con un aporte económico al Corredor
                                                                        Biológico Hojancha-Nandayure,
                                                                        lo puedes realizar a través de nuestras cuentas bancarias.
                                                                    </p>
                                                                </div>
            
                                                            </div>
                                                            <hr style="background-color:#028A0F ;">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <h5 class=" py-4 d-flex justify-content-center">Cuentas
                                                                        Bancarias</h5>
                                                                </div>
                                                            </div>
            
                                                            <div class="row d-felx justify-content-end">
                                                                <div class="col-lg-8 col-sm-12">
                                                                    <span class="fw-bold">Banco Nacional-IBAN :</span>
                                                                    <span>CR-90015108310026000086</span>
                                                                    <br>
                                                                    <span class="fw-bold">Banco Nacional:</span>
                                                                    <span>100-02-083-600008-7</span>
                                                                    <br>
                                                                    <span class="fw-bold">Cuenta Cliente:</span>
                                                                    <span>15108310026000086</span>
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
                                                            <img src="zoofari/img/Donaciones/Alimento.jpg" weight="70px" height="70px">

                                                        </div>
                                                        <div class="tituloalimentos">
                                                            <h2 class="mb-1">
                                                                <font color="#028A0F">Donativos Alimenticios</font>
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
                                                                        Si deseas contribuir con algún tipo de alimento al Corredor
                                                                        Biológico Hojancha-Nandayure,
                                                                        te dejamos una lista de opciones que te pueden ayudar.
                                                                    </p>
                                                                    <hr style="background-color:#028A0F ;">
                                                                    <span>hola</span>
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
                                                        <div
                                                            class="col-lg-1 col-sm-2  d-flex justify-content-lg-start justify-content-sm-end">
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
                                                                    <font color="#028A0F">Donativos en Especies</font>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </div>
            
            
                                                    <div class="modal-body">
                                                        <div class="row d-flex justify-content-center">
                                                            <div class="col-9  ">
                                                                <div class="flex-fill ">
                                                                    <p class="text-center">
                                                                        Si deseas contribuir con algún tipo de material al Corredor
                                                                        Biológico Hojancha-Nandayure,
                                                                        te dejamos una lista de opciones que te pueden ayudar.
                                                                    </p>
                                                                    <hr style="background-color:#028A0F ;">
                                                                    <div class="row d-flex  ">
                                                                        <div class="col-lg-4 col-md-4 col-sm-12 m-3 ">
                                                                            <ul class="list-group list-group-flush text-center ">
                                                                                <li class="list-group-item">An item</li>
                                                                                <li class="list-group-item">A second item</li>
                                                                                <li class="list-group-item">A third item</li>
                                                                                <li class="list-group-item">A fourth item</li>
                                                                                <li class="list-group-item">And a fifth one</li>
                                                                                <li class="list-group-item">An item</li>
                                                                                <li class="list-group-item">A second item</li>
                                                                                <li class="list-group-item">A third item</li>
                                                                                <li class="list-group-item">A fourth item</li>
            
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
