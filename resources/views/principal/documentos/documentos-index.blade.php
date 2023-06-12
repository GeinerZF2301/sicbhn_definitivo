@extends('layouts.navbar')
@section('content')
<!-- Navbar Start -->

@include('componentes.NavBarPrincipal')

<!-- Page Header Start -->
<div class="container-fluid header-bgDP py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
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

 
<div class="container-xxl py-5">
  <div class="container">
    <div class="row">
      @foreach ($documentosPublicos as $documentoPublico)
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="cardd mb-5">
          <div class="cardd-body">
            <div class="d-flex justify-content-center">
              <div class="icono mt-2 mb-2">
                <img src="zoofari/img/DocumentosPublicos/docs.png" alt="" width="50px" height="50px">
              </div>
            </div>
            <div class="text-center mt-3">
              <h4>{{$documentoPublico->nombre}}</h4>
            </div>
            <p class="text-center mt-2 mb-3">{{$documentoPublico->descripcion}}</p>
            <div class="d-flex justify-content-center align-items-center mt-2 mb-3">
              <a class="btn btn-Descarga text-decoration-none"
                href="{{ asset('storage/documentos/'.$documentoPublico->file) }}" target="_blank">Ver</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
 
@endsection 