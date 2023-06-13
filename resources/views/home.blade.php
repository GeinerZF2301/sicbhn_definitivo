@extends('layouts.navbar')
@section('content')
    <!-- Navbar Start -->
    @include('componentes.NavBarPrincipal')

    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-dark p-0 mb-5">
        <div class="row g-0 flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
                <div class="header-bg h-100 d-flex flex-column justify-content-center p-5">
                    <h1 class="display-4 text-light mb-5">
                        {{ __('messages.TituloHero') }} Hojancha-Nandayure
                    </h1>
                    <div class="d-flex align-items-center pt-4 animated slideInDown">
                        <a href="/sobrenosotros"
                            class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5">{{ __('messages.TextoBotonMasInformacion') }}</a>
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-bs-target="#videoModal">
                            <span></span>
                        </button>





                        <h6 class="text-white m-0 ms-4 d-none d-sm-block">{{ __('messages.TextoBotonVerVideo') }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="zoofari/img/inicio/FotoPrincipal1.webp" alt="" />
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="zoofari/img/inicio/FotoPrincipal4.webp" alt="" />
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="zoofari/img/inicio/FotoPrincipal5.webp" alt="" />
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="zoofari/img/inicio/FotoPrincipal2.webp" alt="" />
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="zoofari/img/inicio/FotoPrincipal7.webp" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">{{ __('messages.TextoModalVideo') }}
                        <span class="text-primary">{{ __('messages.TextoModalVideoVerde') }}</span>
                    </h3>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive" style="height: 0; padding-bottom: 56.25%; position: relative;">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/32WfcSD8J1Q"
                            allowfullscreen
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p><span class="text-primary me-2">#</span>{{ __('messages.PrimerHashtagInicio') }}</p>
                    <h1 class="display-5 mb-4">
                        {{ __('messages.PrimerTituloInicio') }}
                        <span class="text-primary">{{ __('messages.PrimerTituloInicioVerde') }}
                    </h1>
                    <p class="mb-4">
                        {{ __('messages.PrimerParrafoInicio') }}</p>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>{{ __('messages.CheckListInicioVoluntariados') }}
                    </h5>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>{{ __('messages.CheckListInicioCampañas') }}
                    </h5>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>{{ __('messages.CheckListInicioDonaciones') }}
                    </h5>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>{{ __('messages.CheckListInicioGaleria') }}
                    </h5>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="{{ url('/sobrenosotros') }}">{{ __('messages.SegundoTextoBotonMasInformacion') }}</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="zoofari/img/inicio/MapaPrincipal2.webp" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">

                    <i class="fa fa-dove fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">257</h1>
                    <p class="text-white mb-0">{{ __('messages.TextoContadorAves') }}<br> </p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-regular fa-paw fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">65</h1>
                    <p class="text-white mb-0">{{ __('messages.TextoContadorMamiferos') }} <br></p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-frog fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">40</h1>
                    <p class="text-white mb-0">{{ __('messages.TextoContadorReptilesAnfibios') }} <br>
                    </p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-globe fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">41.800</h1>
                    <p class="text-white mb-0">{{ __('messages.TextoContadorExtensionTerritorial') }}<br></p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Facts End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>{{ __('messages.SegundoHashtagInicio') }}</p>
                    <h1 class="display-5 mb-0">
                        {{ __('messages.SegundoTituloInicio') }}
                    </h1>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5">
                        <i class="fa fa-3x fa-mobile-alt text-white"></i>
                        <div class="ms-4">
                            <p class="text-white mb-0">{{ __('messages.TextoNumeroDeTelefono') }}</p>
                            <h2 class="text-white mb-0">+ (506) 8670-3535</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid mb-3" src="zoofari/img/icon/icon1.webp" alt="Icon" />
                    <h5 class="mb-3">{{ __('messages.TituloServiciosCamarasTrampa') }}</h5>
                    <span>{{ __('messages.TextoServiciosCamarasTrampa') }}</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid mb-3" src="zoofari/img/icon/icon2.webp" alt="Icon" />
                    <h5 class="mb-3">{{ __('messages.TituloServiciosGestionResiduos') }}</h5>
                    <span>{{ __('messages.TextoServiciosGestionResiduos') }}</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid mb-3" src="zoofari/img/icon/icon3.webp" alt="Icon" />
                    <h5 class="mb-3">{{ __('messages.TituloServiciosControlDelitos') }}</h5>
                    <span>{{ __('messages.TextoServiciosControlDelitos') }}</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <img class="img-fluid mb-3" src="zoofari/img/icon/icon4.webp" alt="Icon" />
                    <h5 class="mb-3">{{ __('messages.TituloServiciosConectividadEstructural') }}</h5>
                    <span>{{ __('messages.TextoServiciosConectividadEstructural') }}</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid mb-3" src="zoofari/img/icon/icon5.webp" alt="Icon" />
                    <h5 class="mb-3">{{ __('messages.TituloServiciosConservacion') }}</h5>
                    <span>{{ __('messages.TextoServiciosConservacion') }}</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid mb-3" src="zoofari/img/icon/icon6.webp" alt="Icon" />
                    <h5 class="mb-3">{{ __('messages.TituloServiciosReducirFactores') }}</h5>
                    <span>{{ __('messages.TextoServiciosReducirFactores') }}</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid mb-3" src="zoofari/img/icon/icon7.webp" alt="Icon" />
                    <h5 class="mb-3">{{ __('messages.TituloServiciosTrabajoComunidades') }}</h5>
                    <span>{{ __('messages.TextoServiciosTrabajoComunidades') }}</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <img class="img-fluid mb-3" src="zoofari/img/icon/icon8.webp" alt="Icon" />
                    <h5 class="mb-3">{{ __('messages.TituloServiciosPromocionSistemasAgropecuarios') }}</h5>
                    <span>{{ __('messages.TextoServiciosPromocionSistemasAgropecuarios') }}
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->




    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                {{ __('messages.TituloParticipantesActividades') }}
            </h1>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
                        src="zoofari/img/inicio/Persona.webp" style="width: 100px; height: 100px" />
                    <div class="testimonial-text rounded text-center p-4">
                        <h5 class="mb-1">{{ __('messages.TituloPrimerTallerAbonoOrganico') }}</h5>
                        <p>
                            {{ __('messages.TextoPrimerTallerAbonoOrganico') }}
                        </p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
                        src="zoofari/img/inicio/Persona.webp" style="width: 100px; height: 100px" />
                    <div class="testimonial-text rounded text-center p-4">
                        <h5 class="mb-1">{{ __('messages.TituloSegundoTallerAbonoOrganico') }}</h5>
                        <p>
                            {{ __('messages.TextoSegundoTallerAbonoOrganico') }}
                        </p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
                        src="zoofari/img/inicio/Persona.webp" style="width: 100px; height: 100px" />
                    <div class="testimonial-text rounded text-center p-4">
                        <h5 class="mb-1">{{ __('messages.TituloTallerObservacionAves') }}</h5>
                        <p>
                            {{ __('messages.TextoTallerObservacionAves') }}
                        </p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
                        src="zoofari/img/inicio/Persona.webp" style="width: 100px; height: 100px" />
                    <div class="testimonial-text rounded text-center p-4">
                        <h5 class="mb-1">{{ __('messages.TituloTallerUsoAgroquimicos') }}</h5>
                        <p>
                            {{ __('messages.TextoTallerUsoAgroquimicos') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
