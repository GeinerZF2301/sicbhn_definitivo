
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
            {{-- <p><span class="text-primary me-2">#</span>Welcome To Zoofari</p> --}}
            <h1 class="display-5 mb-4">
              Sobre Nuestra
              <font color="#028A0F">Documentación</font>
              {{-- <span class="text-primary">Donación</span>? --}}
            </h1>
            <p class="mb-4">
            En este apartado se encuentran una serie de documentos de carácter oficial que sirven
            para identificar información acerca del Corredor Biológico Hojancha-Nandayure. 
            <br>
            La documentación publicada cuenta con información recopilada puntual y actualizada. 
            </p>

          </div>
          {{-- <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="img-border"> 
               <img class="img-fluid" src="zoofari/img/Donaciones/DonacionesRecuadro.jpg" alt="" />
            </div>
          </div> --}}
        </div>
      </div>
    </div>
    <!-- About End -->


       <!-- CARDS DE DOCUMENTOS-->
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
     <!-- FIN DE CARDS DOCUMENTOS -->

    @endsection


