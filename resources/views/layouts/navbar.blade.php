<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>SICBHN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="zoofari/img/LogoCorredor.png" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css') }}"
        rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('zoofari/lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('zoofari/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('zoofari/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('zoofari/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('zoofari/css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
            <span class="sr-only">Cargando...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Guanacaste, Costa Rica</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Lunes a Viernes: 08:00 AM - 12:00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+(506) 8670-3535</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1"
                        href="https://www.facebook.com/CorredorBiologico.CBHN"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1"
                        href="https://www.instagram.com/corredor_bio_hojancha_nandayur/?igshid=YmMyMTA2M2Y%3D"><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i
                            class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-panel">
        @yield('content')
    </div>

    <!-- Footer Start -->
    <div class="container-fluid footer bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Más información</h5>
                    <p class="mb-2">
                        <i class="fa fa-map-marker-alt me-3"></i>Guanacaste, Costa Rica
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-phone-alt me-3"></i>+(506) 8670-3535
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-envelope me-3"></i>info.cbhn@gmail.com
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social"
                            href="https://www.facebook.com/CorredorBiologico.CBHN"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social"
                            href="https://www.instagram.com/corredor_bio_hojancha_nandayur/?igshid=YmMyMTA2M2Y%3D"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Enlaces rápidos</h5>
                    <a class="btn btn-link" href="{{ url('/sobrenosotros') }}">Sobre Nosotros</a>
                    <a class="btn btn-link" href="{{ url('/contactos') }}">Contactos</a>
                    <a class="btn btn-link" href="{{ url('/horavisita') }}">Horas de Visita</a>
                    <a class="btn btn-link" href="{{ url('/documentos') }}">Documentos</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4 ">Enlaces populares</h5>
                    <a class="btn btn-link" href="{{ url('/galeria') }}">Galería</a>
                    <a class="btn btn-link" href="{{ url('/voluntariado') }}">Voluntariados</a>
                    <a class="btn btn-link" href="{{ url('/campanna') }}">Campañas</a>
                    <a class="btn btn-link" href="{{ url('/donaciones') }}">Donaciones</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4 ">El Corredor Biológico te da la bienvenida</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email" />
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                            SignUp
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">SICBHN</a>, Todos los derechos reservados.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('zoofari/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('zoofari/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('zoofari/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('zoofari/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('zoofari/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('zoofari/lib/lightbox/js/lightbox.min.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script> --}}
    <!-- Template Javascript -->
    <script src="{{ asset('zoofari/js/main.js') }}"></script>
</body>

</html>
