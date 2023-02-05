
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
          <a href="{{ url('/') }}" class="nav-item nav-link">Inicio</a>
          <a href="{{ url('/voluntariado') }}" class="nav-item nav-link">Voluntariados</a>
          <a href="{{ url('/campanna') }}" class="nav-item nav-link">Campañas</a>
          <a href="{{ url('/donaciones') }}" class="nav-item nav-link active">Donaciones</a>
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
        </div>
        <a href="{{ route('login') }}" class="btn btn-warning"
          >Iniciar Sesión<i class="fa fa-right ms-0"></i
        ></a>
        <a href="{{ route('register') }}" class="btn btn-success"
          >Registrarse<i class="fa fa-right ms-0"></i
        ></a>
      </div>
    </nav>
   <!-- Page Header Start -->
   <div
      class="container-fluid header-bgD py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s">
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
            <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
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
            <i class="fa fa-paw fa-3x text-primary mb-3"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
            <p class="text-white mb-0">Total Animal</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.3s"
          >
            <i class="fa fa-users fa-3x text-primary mb-3"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
            <p class="text-white mb-0">Daily Vigitors</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.5s"
          >
            <i class="fa fa-certificate fa-3x text-primary mb-3"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
            <p class="text-white mb-0">Total Membership</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.7s"
          >
            <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
            <p class="text-white mb-0">Save Wild Life</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Facts End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <h1
          class="display-5 text-center mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
        >
          Tipos de Donaciones
        </h1>
        <div
          class="owl-carousel testimonial-carousel wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="testimonial-item text-center">
            <img
              class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
              src="zoofari/img/Donaciones/DEspecie.png"
              style="width: 100px; height: 100px"
            />
            <div class="testimonial-text rounded text-center p-4">
              <h5 class="mb-1">Donativos en Especie</h5>
              <span class="fst-italic">Profession</span>
              <p>
              Si deseas contribuir con algún tipo de material al Corredor Biológico Hojancha-Nandayure,
              te dejamos una lista de opciones que te pueden ayudar.
              </p>
            </div>
          </div>
          <div class="testimonial-item text-center">
            <img
              class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
              src="zoofari/img/Donaciones/DMonetaria.png"
              style="width: 100px; height: 100px"
            />
            <div class="testimonial-text rounded text-center p-4">
              <h5 class="mb-1">Donativos Monetarios</h5>
              <p>
              Si deseas contribuir con un aporte económico al Corredor Biológico Hojancha-Nandayure,
              lo puedes realizar a través de nuestras cuentas bancarias.
              </p>
              <h5 class=" py-4 d-flex justify-content-center">Cuentas Bancarias</h5>
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
          <div class="testimonial-item text-center">
            <img
              class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
              src="zoofari/img/Donaciones/DAlimentos.png"
              style="width: 100px; height: 100px"
            />
            <div class="testimonial-text rounded text-center p-4">
              <h5 class="mb-1">Donativos Alimenticios</h5>
              <p>
                Si deseas contribuir con algún tipo de alimento al Corredor Biológico Hojancha-Nandayure,
                te dejamos una lista de opciones que te pueden ayudar.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->
    @endsection
    <!-- Navbar End -->


    