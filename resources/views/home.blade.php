@extends('layouts.navbar')
@section('content')

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <a href="index.html" class="navbar-brand p-0">
        <img class="img-fluid me-3" src="zoofari/img/LogoCorredor.png" alt="Icon" />
        <h1 class="m-0 text-primary">SICBHN</h1>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
          <a href="{{ url('/') }}" class="nav-item nav-link active">Inicio</a>
          <a href="{{ url('/voluntariado') }}" class="nav-item nav-link">Voluntariados</a>
          <a href="{{ url('/campannas') }}" class="nav-item nav-link">Campañas</a>
          <a href="{{ url('/donaciones') }}" class="nav-item nav-link">Donaciones</a>
          <div class="nav-item dropdown">
            <a href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Sobre Nosotros</a>
              
            <div class="dropdown-menu rounded-0 rounded-bottom m-0">
              <a href="{{ url('/sobrenosotros') }}" class="dropdown-item">Sobre nosotros</a>
              <a href="{{ url('/galeria') }}" class="dropdown-item">Galería</a>
              <a href="{{ url('/horavisita') }}" class="dropdown-item">Horas de visita</a>
              <a href="{{ url('/documentos') }}" class="dropdown-item">Documentos</a>
            </div>
          </div>
          <a href="{{ url('/contactos') }}" class="nav-item nav-link">Contactos</a>
          @can('ver-administracion')
          <a href="{{ url('/admin') }}" class="nav-item nav-link">Administración</a>
         @endcan
          </div>
          
        
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="btn btn-warning"
                              >Iniciar Sesión<i class="fa fa-right ms-0"></i
                            ></a>
                            @endif

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-success"
                              >Registrarse<i class="fa fa-right ms-0"></i
                            ></a>
                            @endif
                        @else
                            
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            
                        @endguest
                       

        
        
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-dark p-0 mb-5">
      <div class="row g-0 flex-column-reverse flex-lg-row">
        <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
          <div
            class="header-bg h-100 d-flex flex-column justify-content-center p-5"
          >
            <h1 class="display-4 text-light mb-5">
              Corredor Biológico Hojancha-Nandayure
            </h1>
            <div class="d-flex align-items-center pt-4 animated slideInDown">
              <a href="" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5"
                >Más información</a
              >
              <button
                type="button"
                class="btn-play"
                data-bs-toggle="modal"
                data-src="https://youtu.be/JcxND65b0QI"
                data-bs-target="#videoModal"
              >
                <span></span>
              </button>
              <h6 class="text-white m-0 ms-4 d-none d-sm-block">Mirar Video</h6>
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
    <div
      class="modal modal-video fade"
      id="videoModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content rounded-0">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Conoce el Corredor Biológico</h3>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <!-- 16:9 aspect ratio -->
            <div class="ratio ratio-16x9">
              <iframe
                class="embed-responsive-item"
                src=""
                id="video"
                allowfullscreen
                allowscriptaccess="always"
                allow="autoplay"
              ></iframe>
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
              <img class="img-fluid" src="zoofari/img/inicio/FotoPrincipal3.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div
      class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-4">
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.1s"
          >
          
            <i class="fa fa-dove fa-3x text-primary mb-3"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up">257</h1>
            <p class="text-white mb-0">Especies de <br>
              Aves</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.3s"
          >
            <i class="fa fa-regular fa-paw fa-3x text-primary mb-3"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up">65</h1>
            <p class="text-white mb-0">Especies de <br>
              Mamíferos</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.5s"
          >
            <i class="fa fa-frog fa-3x text-primary mb-3"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up">40</h1>
            <p class="text-white mb-0">Especies de <br>
              Reptiles y Anfibios</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.7s"
          >
            <i class="fa fa-globe fa-3x text-primary mb-3"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up">41.800</h1>
            <p class="text-white mb-0">Hectáreas de <br>
              Extensión territorial</p>
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
            <p><span class="text-primary me-2">#</span>Nuestros servicios</p>
            <h1 class="display-5 mb-0">
              Ven a conocer más acerca de los servicios del
              <span class="text-primary">Corredor Biológico</span>
            </h1>
          </div>
          <div class="col-lg-6">
            <div
              class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5"
            >
              <i class="fa fa-3x fa-mobile-alt text-white"></i>
              <div class="ms-4">
                <p class="text-white mb-0">Llamar para más información</p>
                <h2 class="text-white mb-0">+ (506) 8670-3535</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row gy-5 gx-4">
          <div
            class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <img class="img-fluid mb-3" src="zoofari/img/icon/icon1.png" alt="Icon" />
            <h5 class="mb-3">Fotografías</h5>
            <span
              >Dentro de las instalaciones verdes puedes tomar fotografías,
              para que puedas conservar tu experiencia.</span
            >
          </div>
          <div
            class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
            data-wow-delay="0.3s"
          >
            <img class="img-fluid mb-3" src="zoofari/img/icon/icon2.png" alt="Icon" />
            <h5 class="mb-3">Parqueo seguro</h5>
            <span
              >Podrás encontrar el área del parqueo para que tus vehículos
              estén dentro de las instalaciones seguras.</span
            >
          </div>
          <div
            class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
            data-wow-delay="0.5s"
          >
            <img class="img-fluid mb-3" src="zoofari/img/icon/icon3.png" alt="Icon" />
            <h5 class="mb-3">Guías turísticos</h5>
            <span
              >Encontrarás personal autorizado
              y capacitado para poder llevar acabo las excursiones.</span
            >
          </div>
          <div
            class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
            data-wow-delay="0.7s"
          >
            <img class="img-fluid mb-3" src="zoofari/img/icon/icon4.png" alt="Icon" />
            <h5 class="mb-3">Senderos seguros</h5>
            <span
              >Durante tu caminata, explora el bosque de manera segura
              con nuestros senderos seguros. </span
            >
          </div>
          <div
            class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <img class="img-fluid mb-3" src="zoofari/img/icon/icon5.png" alt="Icon" />
            <h5 class="mb-3">Hospedaje</h5>
            <span
              >Contamos con un pequeño hospedaje para nuestros visitantes
              de largo o que busquen realizar una pasantía.</span
            >
          </div>
          <div
            class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
            data-wow-delay="0.3s"
          >
            <img class="img-fluid mb-3" src="zoofari/img/icon/icon6.png" alt="Icon" />
            <h5 class="mb-3">Zonas de comida</h5>
            <span
              >Para que tu experiencia sea más agradable, recuerda
              que existen espacios para zonas de comida.</span
            >
          </div>
          <div
            class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
            data-wow-delay="0.5s"
          >
            <img class="img-fluid mb-3" src="zoofari/img/icon/icon7.png" alt="Icon" />
            <h5 class="mb-3">Fauna</h5>
            <span
              >En el Corredor Biológico se registran alrededor de 
              365 especies de animales. ¡Ven a conocer!</span
            >
          </div>
          <div
            class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
            data-wow-delay="0.7s"
          >
            <img class="img-fluid mb-3" src="zoofari/img/icon/icon8.png" alt="Icon" />
            <h5 class="mb-3">Flora</h5>
            <span
              >Poseemos una gran variedad de biodiversidad con 
              un registro de alrededor de 591 especies de plantas.</span
            >
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->




    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <h1
          class="display-5 text-center mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
        >
          Opiniones de nuestros visitantes
        </h1>
        <div
          class="owl-carousel testimonial-carousel wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="testimonial-item text-center">
            <img
              class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
              src="zoofari/img/inicio/MarFoto.jpg"
              style="width: 100px; height: 100px"
            />
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
            <img
              class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
              src="zoofari/img/inicio/AlfieriFoto.jpg"
              style="width: 100px; height: 100px"
            />
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
            <img
              class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
              src="zoofari/img/inicio/MelanyFoto.jpg"
              style="width: 100px; height: 100px"
            />
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