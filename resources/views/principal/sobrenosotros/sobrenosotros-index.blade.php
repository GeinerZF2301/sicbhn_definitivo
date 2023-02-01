
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
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
          <a href="{{ url('/') }}" class="nav-item nav-link">Inicio</a>
          <a href="{{ url('/voluntariado') }}" class="nav-item nav-link">Voluntariados</a>
          <a href="{{ url('/campanna') }}" class="nav-item nav-link">Campañas</a>
          <a href="{{ url('/donaciones') }}" class="nav-item nav-link">Donaciones</a>
          <div class="nav-item dropdown">
            <a href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Sobre Nosotros</a
            >
            <div class="dropdown-menu rounded-0 rounded-bottom m-0">
              <a href="{{ url('/sobrenosotros') }}" class="dropdown-item active">Sobre nosotros</a>
              <a href="{{ url('/galeria') }}" class="dropdown-item">Galería</a>
              <a href="{{ url('/horavisita') }}" class="dropdown-item">Horas de visita</a>
              <a href="{{ url('/documentos') }}" class="dropdown-item">Documentos</a>
            </div>
          </div>
          <a href="{{ url('/contactos') }}" class="nav-item nav-link">Contactos</a>
        </div>
        <a href="" class="btn btn-warning"
          >Iniciar Sesión<i class="fa fa-right ms-0"></i
        ></a>
        <a href="" class="btn btn-success"
          >Registrarse<i class="fa fa-right ms-0"></i
        ></a>
      </div>
    </nav>
    <!-- Navbar End -->

    
    <!-- Page Header Start -->
    <div
      class="container-fluid header-bg py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-4 text-white mb-3 animated slideInDown">
        Sobre Nosotros
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="{{ url('/') }}">Inicio</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
              Sobre Nosotros
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->



    
    <!-- MyV Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div
            class="row g-5 mb-5 align-items-end wow fadeInUp"
            data-wow-delay="0.1s"
            >
                    <div class="col-lg-6">
                        <p><span class="text-primary me-2">#</span>Membership</p>
                        <h1 class="display-5 mb-0">
                        You Can Be A Proud Member Of
                        <span class="text-primary">Zoofari</span>
                        </h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <a class="btn btn-primary py-3 px-5" href="">Special Pricing</a>
                    </div>
            </div>

                <div class="row g-4">
                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="membership-item position-relative">
                                    <img class="img-fluid" src="img/animal-lg-1.jpg" alt="" />
                                    <h1 class="display-1">01</h1>
                                    <h4 class="text-white mb-3">Popular</h4>
                                    <h3 class="text-primary mb-4">$99.00</h3>
                                    <p><i class="fa fa-check text-primary me-3"></i>10% discount</p>
                                    <p>
                                        <i class="fa fa-check text-primary me-3"></i>2 adult and 2 child
                                    </p>
                                    <p>
                                        <i class="fa fa-check text-primary me-3"></i>Free animal
                                        exhibition
                                    </p>
                                    <a class="btn btn-outline-light px-4 mt-3" href="">Get Started</a>
                                </div>
                            </div>


                            
                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="membership-item position-relative">
                                    <img class="img-fluid" src="img/animal-lg-2.jpg" alt="" />
                                    <h1 class="display-1">02</h1>
                                    <h4 class="text-white mb-3">Standard</h4>
                                    <h3 class="text-primary mb-4">$149.00</h3>
                                    <p><i class="fa fa-check text-primary me-3"></i>15% discount</p>
                                    <p>
                                        <i class="fa fa-check text-primary me-3"></i>4 adult and 4 child
                                    </p>
                                    <p>
                                        <i class="fa fa-check text-primary me-3"></i>Free animal
                                        exhibition
                                    </p>
                                    <a class="btn btn-outline-light px-4 mt-3" href="">Get Started</a>
                                </div>
                            </div>


                          
                </div>
        </div>
    </div>
    <!-- MyV End -->

    
    <!-- Funciones Start -->
    <div class="container-xxl py-5">

        <div class="container">
                <h1
                class="display-5 text-center mb-5 wow fadeInUp"
                data-wow-delay="0.1s"
                >
                Funciones
                </h1>
            <div
            class="owl-carousel testimonial-carousel wow fadeInUp"
            data-wow-delay="0.1s"
            >
                <div class="testimonial-item text-center">
                    <!--
                    <img
                    class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
                    src="zoofari/img/testimonial-1.jpg"
                    style="width: 100px; height: 100px"
                    />

-->
                    <div class="testimonial-text rounded text-center p-4">
                        <p>
                        Administración y gestión de actividades del POA.
                        </p>
                    
                    </div>
                </div>

                <div class="testimonial-item text-center">
                     <!--
                    <img
                    class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
                    src="zoofari/img/testimonial-2.jpg"
                    style="width: 100px; height: 100px"
                    />
                -->
                    <div class="testimonial-text rounded text-center p-4">
                    <p>
                    Formulación, gestión y evaluación de Proyectos.
                    </p>
                 
                    </div>
                </div>


                <div class="testimonial-item text-center">
                         <!--
                    <img
                    class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
                    src="zoofari/img/testimonial-3.jpg"
                    style="width: 100px; height: 100px"
                    />
                    -->
                    <div class="testimonial-text rounded text-center p-4">
                    <p>
                    Coordinación de sesiones y reuniones del CL.
                    </p>
                 
                    </div>
                </div>

                <div class="testimonial-item text-center">
                         <!--
                    <img
                    class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
                    src="zoofari/img/testimonial-3.jpg"
                    style="width: 100px; height: 100px"
                    />
                    -->
                    <div class="testimonial-text rounded text-center p-4">
                    <p>
                    Autoevaluación de Gestión del corredor.
                    </p>
                 
                    </div>
                </div>

                <div class="testimonial-item text-center">
                         <!--
                    <img
                    class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
                    src="zoofari/img/testimonial-3.jpg"
                    style="width: 100px; height: 100px"
                    />
                    -->
                    <div class="testimonial-text rounded text-center p-4">
                    <p>
                    Nuestras actividades dependen mucho de los representantes institucionales.
                    </p>
                 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Funciones End -->
    @endsection