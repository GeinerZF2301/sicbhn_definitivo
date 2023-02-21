
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
              <a href="{{ url('/documentos') }}" class="dropdown-item active">Documentos</a>
            </div>
          </div>
          <a href="{{ url('/contactos') }}" class="nav-item nav-link">Contactos</a>
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
                            <li class="nav-item dropdown">
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
                            </li>
                        @endguest
      </div>
    </nav>

       <!-- Page Header Start -->
   <div
      class="container-fluid header-bgDP py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s">
      <div class="container py-5">
        <h1 class="display-4 text-white mb-3 animated slideInDown">Documentación</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="{{ url('/') }}">Inicio</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
              Documentos
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
              Sobre Nuestra
              <font color="#028A0F">Documentación</font>      

            </h1>
            <p class="mb-4">
            En este apartado se encuentran una serie de documentos de carácter oficial que sirven
            para identificar información acerca del Corredor Biológico Hojancha-Nandayure. 
            <br>
            La documentación publicada cuenta con información recopilada puntual y actualizada. 
            </p>

          </div>
         <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="img-border"> 
               <img class="img-fluid" src="zoofari/img/DocumentosPublicos/documentos.jpg" alt="" />
        </div>
          </div> 
        </div>
      </div>
    </div>
    <!-- About End -->


       <!-- CARDS DE DOCUMENTOS
    <div class="containertiposcampannas-document">
      {{-- @foreach ($tipos as $tipo) --}}
          {{-- <input type="hidden" value="{{ $tipo->id }}" id="idTipoCampanna" class="idTipoCampanna">
          @if ($tipo->id % 2 != 0) --}}
              <div class="cardtipos bg-beige">
                  <div class="d-flex justify-content-center">
                      <img class="ic-document" src="zoofari/img/DocumentosPublicos/folder.png">
                  </div>
                  {{-- <h4 class="textocartas-document">{{ $tipo->Nombre }}</h4>
                  <p class="descripcioncarta-document">{{ $tipo->Descripcion }}</p> --}}
                  <div class="d-flex justify-content-center">
                      <a href="#" class="saber-mas-document btn" style="color:aliceblue">Descargar</a>
                  </div>
              </div>
    
              <div class="cardtipos bg-beige ">
                  <div class="d-flex justify-content-center">
                      <img class="ic-document" src="zoofari/img/DocumentosPublicos/folder.png">
                  </div>
                  {{-- <h4 class="textocartas-document">{{ $tipo->Nombre }}</h4>
                  <p class="descripcioncarta-document">{{ $tipo->Descripcion }}</p> --}}
                  <div class="d-flex justify-content-center">
                     <a href="#" class="saber-mas-document btn" style="color:aliceblue">Descargar</a>
                  </div>
              </div>
     -->


<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
      
        <h1 class="display-5 mb-4 text-center">
          
         ¡Documentos Públicos!
        </h1>

      </div>
    </div>
  </div>
</div>


<div class="container">
        <div class="row g-4 ">
         
       
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="cardd mb-5">
                   
                    <div class="cardd-body ">
                        <div class="row">
                            <div class="col- d-flex justify-content-center">
                                <div class="icono mt-2 mb-2">
                                    <img src="zoofari/img/DocumentosPublicos/docs.png" alt="" weight="50px" height="50px">
                                </div>
                            </div>
                        </div>
                        <div class="row ">                            
                            <div class="col">
                                <div class="cardd-title d-flex justify-content-center">
                                    <h4>Acta de Asistencia</h4>
                                </div>
                                <p class="text-center mt-2 mb-3">  Registro de los participantes de la reunión del 14 de febrero de 2023.</p>
                                <div class="buttons d-flex justify-content-center aligh-items-center mt-2 mb-3">
                                    <a  class="btn btn-Descarga text-decoration-none" href="" id="Descargar "> Descargar </a>
                               </div>
                            </div>
                          
                        </div>

                    </div>

                </div>
            </div>

            
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="cardd mb-5">
                   
                    <div class="cardd-body ">
                        <div class="row">
                            <div class="col- d-flex justify-content-center">
                                <div class="icono mt-2 mb-2">
                                    <img src="zoofari/img/DocumentosPublicos/docs.png" alt="" weight="50px" height="50px">
                                </div>
                            </div>
                        </div>
                        <div class="row ">                            
                            <div class="col">
                                <div class="cardd-title d-flex justify-content-center">
                                    <h4>Acta de Asistencia</h4>
                                </div>
                                <p class="text-center mt-2 mb-3">  Registro de los participantes de la reunión del 14 de febrero de 2023.</p>
                                <div class="buttons d-flex justify-content-center aligh-items-center mt-2 mb-3">
                                    <a  class="btn btn-Descarga text-decoration-none" href="" id="Descargar "> Descargar </a>
                               </div>
                            </div>
                          
                        </div>

                    </div>

                </div>
            </div>

            
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="cardd mb-5">
                   
                    <div class="cardd-body ">
                        <div class="row">
                            <div class="col- d-flex justify-content-center">
                                <div class="icono mt-2 mb-2">
                                    <img src="zoofari/img/DocumentosPublicos/docs.png" alt="" weight="50px" height="50px">
                                </div>
                            </div>
                        </div>
                        <div class="row ">                            
                            <div class="col">
                                <div class="cardd-title d-flex justify-content-center">
                                    <h4>Acta de Asistencia</h4>
                                </div>
                                <p class="text-center mt-2 mb-3">  Registro de los participantes de la reunión del 14 de febrero de 2023.</p>
                                <div class="buttons d-flex justify-content-center aligh-items-center mt-2 mb-3">
                                    <a  class="btn btn-Descarga text-decoration-none" href="" id="Descargar "> Descargar </a>
                               </div>
                            </div>
                          
                        </div>

                    </div>

                </div>
            </div>



          
        
        </div>
    </div>


    @endsection


