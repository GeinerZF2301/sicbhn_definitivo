
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
          @can('ver-administracion')
          <a href="{{ url('/admin') }}" class="nav-item nav-link">Administración</a>
          @endcan
        </div>
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

    
    <!-- Page Header Start -->
    <div
      class="container-fluid header-bgSN py-5 mb-5 wow fadeIn"
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




 <!-- About Start -->
 <div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        {{-- <p><span class="text-primary me-2">#</span>Welcome To Zoofari</p> --}}
        <h1 class="display-5 mb-4">
          Acerca del Corredor Biológico
          <font color="#028A0F">Hojancha-</font>
          <font color="#ffed4a">Nandayure</font>
          
          {{-- <span class="text-primary">Donación</span>? --}}
        </h1>
        <p class="mb-4">
          El Corredor Biológico Hojancha-Nandayure (CBHN), se encuentra ubicado en la Provincia de
          Guanacaste, en los cantones de Hojancha y Nandayure, de ahí su nombre. Tiene una extensión de
          41 832 hectáreas, abarcando el 25% del área del cantón de Hojancha y el 75% del área de
          Nandayure. 
          <br>
          <br>

        El Corredor Biológico Hojancha-Nandayure (CBHN) se encuentra ubicado en la región climática del
         Pacífico Norte, abarcando parte de dos subregiones climáticas: occidental de la península de
        Nicoya (PN1: de sequía) y central del Pacífico Norte (PN2: lluvioso con influencia monzónica).
        </p>

    
      </div>
    </div>
  </div>
</div>
<!-- About End -->




<!-- Funciones del corredor -->
<h1 class="display-5 mb-4 text-center">
          
  Funciones del Corredor Biológico
 </h1>

<div class="card-container">
  <div class="card" style="background-color: #4caf50;">
    <p class="card-text">Administración y gestión de actividades del POA</p>
  </div>
  <div class="card" style="background-color: #4caf50;">
    <p class="card-text">Formulación, gestión y evaluación de Proyectos</p>
  </div>
  <div class="card" style="background-color: #4caf50;">
    <p class="card-text">Coordinación de sesiones y reuniones del CL</p>
  </div>
  <div class="card" style="background-color: #4caf50;">
    <p class="card-text">Autoevaluación de Gestión del corredor</p>
  </div>
  <div class="card" style="background-color: #4caf50;">
    <p class="card-text">Nuestras actividades dependen mucho de los representantes
      institucionales</p>
  </div>
</div>

<!-- funciones del corredor End -->



<!-- Misión y visión Start -->
  
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        
        <h1 class="display-5 mb-4">
          ¡Nuestra
          <span class="text-primary">Misión</span>!
        </h1>
        <p class="mb-4">
        El Corredor Biológico Hojancha-Nandayure es una suma de voluntades institucionales y de la sociedad civil, 
        que buscan mejorar la conectividad entre Áreas Silvestres Protegidas y gestionar de manera integral la biodiversidad
         a través de la educación ambiental, la producción sostenible y el fortalecimiento de capacidades locales.
        </p>
     
        <h1 class="display-5 mb-4">
          ¡Nuestra
          <span class="text-primary">Visión</span>!
        </h1>
        <p class="mb-4">
        Es un paisaje sostenible que brinda conectividad ecológica, en donde las comunidades y la biodiversidad conviven en armonía.

        </p>
      
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="img-border">
          <img class="img-fluid" src="zoofari/img/SN.jpg" alt="" />
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Misión y visión End -->




<!-- Miembros Start --

'''''''''''''''''''NOTA````````````````````````````

FAltan agregar miembros


.......>Yo subì las fotos
.......>SOlo faltan 2 miembros de conseguir la foto  
              ASADA y Centro Agrìcola
              

-->
<div class="container-xxl py-5">
  <div class="container">
    <div
      class="row g-5 mb-5 align-items-end wow fadeInUp"
      data-wow-delay="0.1s"
    >
        <div class="col-lg-6">
          <h1 class="display-5 mb-0">
            <span class="text-primary">Miembros</span> del comité
          </h1>
        </div>          
    </div>


    <div class="row g-4">

      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-4">
          <div class="col-12">
            <a
              class="animal-item"
              href="img/SobreNosotros/Miembros/munihojancha.jpeg"
              data-lightbox="animal"
            >
              <div class="position-relative">
                <img class="img-fluid miembros-img" src="zoofari/img/SobreNosotros/Miembros/munihojancha.jpeg" href=" " alt="" />
                <div class="animal-text p-4">
                  <p class="text-white small text-uppercase mb-0">Municipalidad de Hojancha</p>
                  <h5 class="text-white mb-0">Miembro</h5>
                </div>
              </div>
            </a>
          </div>



          <div class="col-12">
            <a
              class="animal-item"
              href="img/SobreNosotros/Miembros/sinac.png"
              data-lightbox="animal"
            >
              <div class="position-relative">
                <img class="img-fluid miembros-img" src="zoofari/img/SobreNosotros/Miembros/sinac.png" alt="" />
                <div class="animal-text p-4">
                <p class="text-white small text-uppercase mb-0">SINAC</p>
                  <h5 class="text-white mb-0">Miembro</h5>
                </div>
              </div>
            </a>
          </div>




   
          <div class="col-12">
            <a
              class="animal-item"
              href="img/SobreNosotros/Miembros/panamericanWoods.jpeg"
              data-lightbox="animal"
            >
              <div class="position-relative">
                <img class="img-fluid miembros-img" src="zoofari/img/SobreNosotros/Miembros/panamericanWoods.jpeg" alt="" />
                <div class="animal-text p-4">
                <p class="text-white small text-uppercase mb-0">WOODS</p>
                  <h5 class="text-white mb-0">Miembro</h5>
                </div>
              </div>
            </a>
          </div>



        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="row g-4">

          <div class="col-12">
            <a
              class="animal-item"
              href="img/SobreNosotros/Miembros/logo offbeattravel.jpeg"
              data-lightbox="animal"
            >
              <div class="position-relative">
                <img class="img-fluid miembros-img" src="zoofari/img/SobreNosotros/Miembros/logo offbeattravel.jpeg"  alt="" />
                <div class="animal-text p-4">
                  <p class="text-white small text-uppercase mb-0">Offbeat Travel</p>
                  <h5 class="text-white mb-0">Miembro</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12">
            <a
              class="animal-item"
              href="img/SobreNosotros/Miembros/Logo Final MTF.jpg"
              data-lightbox="animal"
            >
              <div class="position-relative">
                <img class="img-fluid miembros-img" src="zoofari/img/SobreNosotros/Miembros/Logo Final MTF.jpg" alt="" />
                <div class="animal-text p-4">
                  <p class="text-white small text-uppercase mb-0">MTF Teca</p>
                  <h5 class="text-white mb-0">Elephant</h5>
                </div>
              </div>
            </a>
          </div>

           <div class="col-12">
            <a
              class="animal-item"
              href="img/SobreNosotros/Miembros/Logo gestion ambiental Muni Nandayure.jpeg"
              data-lightbox="animal"
            >
              <div class="position-relative">
                <img class="img-fluid miembros-img" src="zoofari/img/SobreNosotros/Miembros/Logo gestion ambiental Muni Nandayure.jpeg" alt="" />
                <div class="animal-text p-4">
                <p class="text-white small text-uppercase mb-0">Gestion Ambiental</p>
                  <h5 class="text-white mb-0">Miembro</h5>
                </div>
              </div>
            </a>
          </div>





          




        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="row g-4">
          <div class="col-12">
            <a
              class="animal-item"
              href="img/SobreNosotros/Miembros/monteAlto.png"
              data-lightbox="animal"
            >
              <div class="position-relative">
                <img class="img-fluid miembros-img" src="zoofari/img/SobreNosotros/Miembros/monteAlto.png" alt="" />
                <div class="animal-text p-4">
                  <p class="text-white small text-uppercase mb-0">Reserva Monte Alto</p>
                  <h5 class="text-white mb-0">Miembro</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12">
            <a
              class="animal-item"
              href="img/SobreNosotros/Msplogo.jpg"
              data-lightbox="animal"
            >
              <div class="position-relative">
                <img class="img-fluid miembros-img" src="zoofari/img/SobreNosotros/Miembros/Msplogo.jpg" alt="" />
                <div class="animal-text p-4">
                  <p class="text-white small text-uppercase mb-0">Ministerio de Salud</p>
                  <h5 class="text-white mb-0">Miembro</h5>
                </div>
              </div>
            </a>
          </div>
{{-- /////////////// --}}



 <div class="col-12">
  <a
    class="animal-item"
    href="img/SobreNosotros/Miembros/fundecodes.jpeg"
    data-lightbox="animal"
  >
    <div class="position-relative">
      <img class="img-fluid miembros-img" src="zoofari/img/SobreNosotros/Miembros/fundecodes.jpeg" alt="" />
      <div class="animal-text p-4">
      <p class="text-white small text-uppercase mb-0">Fundecodes</p>
        <h5 class="text-white mb-0">Miembro</h5>
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
      
  <h1 class="display-5 mb-4 text-center">
    
   Colaboradores
  </h1>

</div>
  <div class="cards-container-">
    <div class="card-">
      <a href="https://www.chorotega.una.ac.cr">
      <img src="../zoofari/img/SobreNosotros/logosede.png" alt="Image 1">
    </div>
    <div class="card-">
      <a href="https://www.facebook.com/nicoyasistemas/">
      <img src="../zoofari/img/SobreNosotros/logocarrera.png" alt="Image 2">
    </div>
    <div class="card-">
       <a href="https://www.instagram.com/jose_venegas_photography/">
      <img src="../zoofari/img/SobreNosotros/jose-venegas.png"alt="Image 3">
    </div>
  </div>

<!-- colaboradores end -->


<!-- EQUIPO DESARROLLADOR-->


 {{-- <div class="container-circle">
  <div class="circle">
    <img src="../zoofari/img/SobreNosotros/Melany.jpeg" alt="Circle Image 1">
  </div>
  <div class="">
    <h6 class="Nombre-Desarrolladores">Melany Lawson Méndez</h6> 
    <p class="texto">Front End Developer</p>
  </div>
  <div class="circle">
    <img src="../zoofari/img/SobreNosotros/Geiner.jpg" alt="Circle Image 2">
    <h6>Geiner Zúñiga Flores</h6>
    <p>Full Stack Developer Developer</p>
  </div>
  <div class="circle">
    <img src="../zoofari/img/SobreNosotros/jose-venegas.png" alt="Circle Image 3">
    <h6>Kriscia Campos Cárdenas</h6>
    <p>Front End Developer</p>
  </div>
  <div class="circle">
    <img src="../zoofari/img/SobreNosotros/jose-venegas.png" alt="Circle Image 4">
    <h6>Alfieri Mora Jiménez</h6>
    <p>holaaaaaaaa</p>
  </div>
  <div class="circle">
    <img src="../zoofari/img/SobreNosotros/jose-venegas.png" alt="Circle Image 5">
    <h6>María del Mar Acón Vargas</h6>
    <p>Front End Developer</p>
  </div>
</div>  --}}


<br>
<br>
<br>

<center>
  <h1 class="display-5 mb-4 text-center">
          
    Equipo Desarrollador
   </h1>
<div class="card-Desarrolladores">
  <img src="../zoofari/img/SobreNosotros/Melany.jpeg" alt="Imagen 1">
  <div class="card-text-Desarrolladores">
    <h2>Melany Lawson Méndez</h2>
    <p>Front End Developer</p>
  </div>
</div>

<div class="card-Desarrolladores">
  <img src="../zoofari/img/SobreNosotros/Mar.jpeg"  alt="Imagen 2">
  <div class="card-text-Desarrolladores">
    <h2>Título de la tarjeta 2</h2>
    <p>Texto de la tarjeta 2</p>
  </div>
</div>

<div class="card-Desarrolladores">
  <img src="../zoofari/img/SobreNosotros/Geiner.jpg" alt="Imagen 3">
  <div class="card-text-Desarrolladores">
    <h2>Título de la tarjeta 3</h2>
    <p>Texto de la tarjeta 3</p>
  </div>
</div>

<div class="card-Desarrolladores">
  <img src="../zoofari/img/SobreNosotros/Melany.jpeg" alt="Imagen 4">
  <div class="card-text-Desarrolladores">
    <h2>Título de la tarjeta 4</h2>
    <p>Texto de la tarjeta 4</p>
  </div>
</div>

<div class="card-Desarrolladores">
  <img src="../zoofari/img/SobreNosotros/Melany.jpeg" alt="Imagen 5">
  <div class="card-text-Desarrolladores">
    <h2>Título de la tarjeta 5</h2>
    <p>Texto de la tarjeta 5</p>
  </div>
</div>
</center>



<!-- EQUIPO DESARROLLADOR END-->






















{{-- <div class="card-container">
  <div class="card" style="background-color: #4caf50;">
    <h3></h3>
    <p>Administración y gestión de actividades del POA.</p>
  </div>
  <div class="card" style="background-color: #4caf50;">
    <h3>Card 2</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
  <div class="card" style="background-color: #4caf50;">
    <h3>Card 3</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
  <div class="card" style="background-color: #4caf50;">
    <h3>Card 4</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
  <div class="card" style="background-color: #4caf50;">
    <h3>Card 5</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
</div> --}}






  




{{-- <div class="containerfunciones">
  <div class="title-Funciones text-uppercase text-center "> 
    <h2>Funciones del Corredor Biológico</h2>   
</div>
{{-- <div class="shadow-lg p-3 mb-5 bg-body rounded" >
  <h1  class="text-center" class="display-5 mb-4">
    Funciones del Corredor Biológico
  </h1>
</div> --}}

{{-- </div> --}} 

{{-- <div class="container">
  <div class="row">
    <div class="col-3">
      <div class="card">
        <img src="../zoofari/img/SobreNosotros/mision.jpg" alt="Vision del CBHN" class="card-img-top">
        <div class="card-body">
          <h1 class="card-title">Misión</h1>
          <p class="card-text">El Corredor Biológico Hojancha-Nandayure es una suma de voluntades institucionales y de la sociedad civil, 
            que buscan mejorar la conectividad entre Áreas Silvestres Protegidas y gestionar de manera integral la biodiversidad a través
             de la educación ambiental, la producción sostenible y el fortalecimiento de capacidades locales.</p>

        </div>
      </div>

    </div>

    <div class="col-3">
      <div class="card">
        <img src="../zoofari/img/SobreNosotros/vision.jpg" alt="Vision del CBHN" class="card-img-top">
        <div class="card-body">
          <h1 class="card-title" class="text align-center">Visión</h1>
          <p class="card-text">Ser un paisaje sostenible que brinda conectividad ecológica,
             en donde las comunidades y la biodiversidad conviven en armonía.</p>

        </div>
      </div>

    </div>

  </div>

</div> --}}


    
  



{{-- <div class="containertiposcampannas">
          <div class="cardtipos bg-mision ">
              <div class="d-flex justify-content-center">
                  <img class="ic" src="zoofari/img/Campannas/recycle.png">
                  <h3>Misión</h3>
              </div>
              <div class="d-flex justify-content-center">
              </div>
          </div>

          <div class="cardtipos bg-vision ">
              <div class="d-flex justify-content-center">
                  <img class="ic" src="zoofari/img/Campannas/recycle.png">
                  <h3>Visión</h3>
              </div>
              <div class="d-flex justify-content-center">
              </div>
          </div> --}}



          
   
           

    
    {{-- <!-- MyV Start -->
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
    <!-- MyV End --> --}}

    
    {{-- <!-- Funciones Start -->
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
    <!-- Funciones End --> --}}
    @endsection