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
                    <a href="" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5">{{
                        __('messages.TextoBotonMasInformacion') }}</a>
                    <button type="button" class="btn-play" data-bs-toggle="modal"
                        data-src="https://youtu.be/JcxND65b0QI" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                    <h6 class="text-white m-0 ms-4 d-none d-sm-block">{{ __('messages.TextoBotonVerVideo') }}</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="owl-carousel header-carousel">
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="zoofari/img/inicio/FotoPrincipal1.jpg" alt="" />
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="zoofari/img/inicio/FotoPrincipal4.jpg" alt="" />
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="zoofari/img/inicio/FotoPrincipal5.jpg" alt="" />
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="zoofari/img/inicio/FotoPrincipal2.jpg" alt="" />
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="zoofari/img/inicio/FotoPrincipal7.jpg" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Conoce el Corredor Biológico</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
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
                    <p><span class="text-primary me-2">#</span>Bienvenidos a nuestra experiencia</p>
                    <h1 class="display-5 mb-4">
                        ¿Conoces acerca del Corredor Biológico
                        <span class="text-primary">Hojancha-Nandayure</span>?
                    </h1>
                    <p class="mb-4">
                        El Corredor Biológico Hojancha-Nandayure (CBHN) se encuentra ubicado en los Cantones de
                        Hojancha y Nandayure en la provincia de Guanacaste. <br>
                        Dentro del Corredor Biológico existe una gran biodiversidad de flora y fauna.
                        Te invitamos a conocer más acerca de nuestras actividades y conectarte con la naturaleza.
                        Sé parte de la familia del Corredor Biológico Hojancha-Nandayure.
                    </p>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>Voluntariados
                    </h5>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>Campañas
                    </h5>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>Donaciones
                    </h5>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>Galería de fotos
                    </h5>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="{{ url('/sobrenosotros') }}">Más información</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="zoofari/img/inicio/MapaPrincipal2.png" alt="" />
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
                <p class="text-white mb-0">{{__('messages.TextoContadorAves')}}<br> </p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-regular fa-paw fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">65</h1>
                <p class="text-white mb-0">{{__('messages.TextoContadorMamiferos')}} <br></p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-frog fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">40</h1>
                <p class="text-white mb-0">{{__('messages.TextoContadorReptilesAnfibios')}} <br>
                    </p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-globe fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">41.800</h1>
                <p class="text-white mb-0">{{__('messages.TextoContadorExtensionTerritorial')}}<br></p>
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
                <p><span class="text-primary me-2">#</span>{{__('messages.SegundoHashtagInicio')}}</p>
                <h1 class="display-5 mb-0">
                    {{__('messages.SegundoTituloInicio')}}
                    <span class="text-primary">Monte Alto</span>
                </h1>
            </div>
            <div class="col-lg-6">
                <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5">
                    <i class="fa fa-3x fa-mobile-alt text-white"></i>
                    <div class="ms-4">
                        <p class="text-white mb-0">{{__('messages.TextoNumeroDeTelefono')}}</p>
                        <h2 class="text-white mb-0">+ (506) 8670-3535</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gy-5 gx-4">
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid mb-3" src="zoofari/img/icon/icon1.png" alt="Icon" />
                <h5 class="mb-3">Monitoreo por cámaras trampa</h5>
                <span>Algunos actores de nuestro comité local como MTF Teca, Panamerican Woods,
                    Monte Alto realizan monitoreo de fauna silvestre.</span>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <img class="img-fluid mb-3" src="zoofari/img/icon/icon2.png" alt="Icon" />
                <h5 class="mb-3">Incidencia en la gestión integral de residuos</h5>
                <span>La municipalidad de Hojancha y Nandayure nos hacen partícipes del proceso de gestión
                    para propiciar ambientes saludables.</span>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <img class="img-fluid mb-3" src="zoofari/img/icon/icon3.png" alt="Icon" />
                <h5 class="mb-3">Control y prevención de delitos ambientales</h5>
                <span>Mediante los esfuerzos por la educación ambiental.</span>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <img class="img-fluid mb-3" src="zoofari/img/icon/icon4.png" alt="Icon" />
                <h5 class="mb-3">Fortalecimiento de la conectividad estructural</h5>
                <span>Promoviendo sistemas productivos que generen conectividad y restaurar áreas deforestadas.</span>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid mb-3" src="zoofari/img/icon/icon5.png" alt="Icon" />
                <h5 class="mb-3">Conservación</h5>
                <span>Sensibilización de la importancia de los servicios ecosistémicos que provee el CBHN
                    del sector productivo y civil.</span>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <img class="img-fluid mb-3" src="zoofari/img/icon/icon6.png" alt="Icon" />
                <h5 class="mb-3">Reducir los factores de riesgo y vulnerabilidad</h5>
                <span>De los elementos focales de manejo: bosque, fauna, ecosistema marino costero,
                    hídrico y suelos.</span>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <img class="img-fluid mb-3" src="zoofari/img/icon/icon7.png" alt="Icon" />
                <h5 class="mb-3">Trabajo en comunidades</h5>
                <span>Campañas de limpieza de ríos, calles, resforestaciones, educación ambiental.</span>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <img class="img-fluid mb-3" src="zoofari/img/icon/icon8.png" alt="Icon" />
                <h5 class="mb-3">Promoción de sistemas agropecuarios sustentables</h5>
                <span>Y con mayor capacidad de resilencia a los cambios climáticos.
                    El sector agropecuario fomra parte de nuestras alianzas: MAG, cámara de ganaderos, centros agrícolas.
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
            Opiniones de nuestros visitantes
        </h1>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item text-center">
                <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
                    src="zoofari/img/inicio/MarFoto.jpg" style="width: 100px; height: 100px" />
                <div class="testimonial-text rounded text-center p-4">
                    <p>
                        El recorrido que tuvé en el Corredor Biológico Hojancha-Nandayure
                        fue una experiencia de conexión con la naturaleza.
                    </p>
                    <h5 class="mb-1">María Acón</h5>
                    <span class="fst-italic">Estudiante</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
                    src="zoofari/img/inicio/AlfieriFoto.jpg" style="width: 100px; height: 100px" />
                <div class="testimonial-text rounded text-center p-4">
                    <p>
                        En mi recorrdido por el Corredor Biológico Hojancha-Nandayure lo que
                        más me impresionó fueron las zonas verdes, las vistas, y la fauna del lugar.
                        Sin lugar a dudas volvería a visitar el Corredor Biológico.
                    </p>
                    <h5 class="mb-1">Alfieri Mora</h5>
                    <span class="fst-italic">Estudiante</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
                    src="zoofari/img/inicio/MelanyFoto.jpg" style="width: 100px; height: 100px" />
                <div class="testimonial-text rounded text-center p-4">
                    <p>
                        El servicio al cliente y la atención que tuvieron
                        los guías y encargados de la actividad fueron una de las
                        mejores experiencias que tuvé en mi voluntariado en el
                        Corredor Biológico Hojancha-Nandayure.
                    </p>
                    <h5 class="mb-1">Melany Lawson</h5>
                    <span class="fst-italic">Estudiante</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
@endsection