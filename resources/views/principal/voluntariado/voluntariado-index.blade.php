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
          <a href="{{ url('/voluntariado') }}" class="nav-item nav-link active">Voluntariados</a>
          <a href="{{ url('/campanna') }}" class="nav-item nav-link">Campañas</a>
          <a href="{{ url('/donaciones') }}" class="nav-item nav-link ">Donaciones</a>
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
   <!-- Page Header Start -->
   <div
      class="container-fluid header-bgV py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s">
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
                        <div class="featured-block d-flex justify-content-center align-items-center wow fadeInUp" data-wow-delay="0.5s"">
                            <a class="d-block">
                                <img src="zoofari/img/voluntariado/ambientalismo.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text">Experiencia <strong> Ambiental</strong></p>
                                <p class="mb-41">
                                Ser voluntariado junto a personas que tienen conocimientos para brindarte en este
                                contexto ambiental.
                                </p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center wow fadeInUp" data-wow-delay="0.5s"">
                            <a class="d-block">
                                <img src="zoofari/img/voluntariado/sociologia.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text"><strong>Genera</strong> Impacto</p>
                                <p class="mb-41">
                                Ser voluntariado junto a personas que tienen conocimientos para brindarte en este
                                contexto ambiental.
                                </p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center wow fadeInUp" data-wow-delay="0.5s"">
                            <a class="d-block">
                                <img src="zoofari/img/voluntariado/crecimiento.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text">Desarrollo <strong> Personal</strong></p>
                                <p class="mb-41">
                                Ser voluntariado junto a personas que tienen conocimientos para brindarte en este
                                contexto ambiental.
                                </p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center wow fadeInUp" data-wow-delay="0.5s"">
                            <a href="donate.html" class="d-block">
                                <img src="zoofari/img/voluntariado/caridad.png" class="featured-block-image img-fluid" alt="">

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


        <div class="container-xxl py-5">
          <div class="container">
              <div class="row g-5">
                  <div class="col-lg-12  wow fadeInUp" data-wow-delay="0.1s">
  
                      <h1 class="display-4 text-center mb-4">
                          <font color="#028A0F">Voluntariados Disponibles!</font>
  
                      </h1>
  
                  </div>
              </div>
          </div>
      </div>


      <div class="container mt-5 mb-5">
          <div class="row row-cols-1 row-cols-md-3 g-4">

            
<div class="col-sm-12 col-md-6  col-lg-4">
  <div class="cardv">
              <div class="cardv-title mt-2">
                  <h5 class="text-center"> ¡Voluntariado en <font color="#028A0F">Recoleccion!</font> </h5>                      
              </div>
          <div class="cardv-body">
              <div class="row ">
                  <div class="col d-flex ">
                      <img src="zoofari/img/Campannas/maps.png" alt="" width="34px" height="34PX">
                      <p> Rio Nosara, Hojancha, Guanacaste, Costa Rica.</p>
              
                  </div>
              </div>
              <div class="row">
                  <div class="col-4">
                    <img src="zoofari/img/Campannas/calendario.png" alt="">
                  </div>
                  <div class="col-4">
                    <img src="zoofari/img/Campannas/reloj.png" alt="">
                  </div>
                  <div class="col-4">
                    <img src="zoofari/img/voluntariado/altavoz.png" alt="">
                  </div>
              </div>
              <div class="row">
                  <div class="col-4">                            
                      <p>14-04-2023</p>
                  </div>
                  <div class="col-4">                            
                      <p>8:00pm </p>
                  </div>
                  <div class="col-4">                           
                      <p>Rosa López Turcios</p>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                      <p>Plantar árboles y preservar la naturaleza en los alrededores del río Nosara</p>
                  </div>
              </div>       

          </div>
  </div>
</div>
             
            
          </div>
      </div>



        
        <section class="section-padding section-bg" id="section_2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                      
                        <img src="zoofari/img/voluntariado/Voluntariados9.jpg"
                            class="custom-text-box-image img-fluid" alt="">
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
            <form method= "post">
              <div class="row g-3">
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" class="form-control bg-light border-0"
                      id="name"
                      placeholder="Your Name"
                    />
                    <label for="name">Nombre</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="lastname"
                      class="form-control bg-light border-0"
                      id="lastname"
                      placeholder="Your Lastname"
                    />
                    <label for="lastname">Apellidos</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="email"
                      class="form-control bg-light border-0"
                      id="email"
                      placeholder="Your Email"
                    />
                    <label for="email">Correo Electrónico</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text"
                      class="form-control bg-light border-0"
                      id="voluntariado"
                      placeholder="voluntariado"
                    />
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
@endsection
