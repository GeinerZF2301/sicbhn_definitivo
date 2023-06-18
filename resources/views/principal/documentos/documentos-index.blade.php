@extends('layouts.navbar')
@section('content')
<!-- Navbar Start -->

@include('componentes.NavBarPrincipal')

<!-- Page Header Start -->
<div class="container-fluid header-bgDP py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <h1 class="display-4 text-white mb-3 animated slideInDown">{{ __('messages.PrimerTituloHeaderDocumentacion') }}</h1>
    <nav aria-label="breadcrumb animated slideInDown">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a class="text-white" href="{{ url('/') }}">{{ __('messages.SegundoTituloHeaderDocumentacion') }}</a>
        </li>
        <li class="breadcrumb-item text-primary active" aria-current="page">
          {{ __('messages.TercerotextoHeaderDocumentacion') }}
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
          {{ __('messages.CuartotextoHeaderDocumentacion') }}
          <font color="#028A0F">{{ __('messages.QuintoTextoHeaderDocumentacion') }}</font>

        </h1>
        <p class="mb-4">
          {{ __('messages.PrimerTextoHeaderInicio') }}
          <br>
          {{ __('messages.SegundoTextoHeaderInicio') }}
        </p>

      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="img-border">
          <img class="img-fluid" src="zoofari/img/DocumentosPublicos/documentos.webp" alt="" />
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

          {{ __('messages.PrimerTituloDocumentacion') }}
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
                <img src="zoofari/img/DocumentosPublicos/docs.webp" alt="" width="50px" height="50px">
              </div>
            </div>
            <div class="text-center mt-3">
              <h4>{{$documentoPublico->nombre}}</h4>
            </div>
            <p class="text-center mt-2 mb-3">{{$documentoPublico->descripcion}}</p>
            <div class="d-flex justify-content-center align-items-center mt-2 mb-3">
              <a class="btn btn-Descarga text-decoration-none"
                href="{{ asset('storage/documentos/'.$documentoPublico->file) }}" target="_blank">{{ __('messages.PrimerbotonDocumentacion') }}</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
 
@endsection 
