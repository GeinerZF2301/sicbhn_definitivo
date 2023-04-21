@extends('layouts.app')

@section('content')


  <!-- Navbar Start -->
  @include('componentes.NavbarLogin')
  <!-- Page Header Start -->
  {{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Restablecer contraseña') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Enviar enlace para restablecer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}


<section class="vh-100" style=" 
        background: rgb(23,112,30);
background: -moz-linear-gradient(189deg, rgba(23,112,30,1) 0%, rgba(47,130,41,1) 48%, rgba(14,200,47,1) 100%);
background: -webkit-linear-gradient(189deg, rgba(23,112,30,1) 0%, rgba(47,130,41,1) 48%, rgba(14,200,47,1) 100%);
background: linear-gradient(189deg, rgba(23,112,30,1) 0%, rgba(47,130,41,1) 48%, rgba(14,200,47,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=" #17701e",endColorstr="#0ec82f" ,GradientType=1); ">

    <div class=" container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <center>
                <div class="col-lg-7">
                    <div class="carddd d-flex">
                        <div class="col-lg-6  d-none d-md-block">
                            <div class="imagen">
                                <img src="zoofari/img/Login/ooo.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-7">
                            <div class="carddd-body text-black me-3">

                                
                                <div class="d-flex align-items-center  ms-3 mt-3 mb-3 pb-1">
                                    <span class="h2 fw-bold   mb-0">Corredor Biológico Hojancha
                                        Nandayure</span>
                                </div>

                                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Reestablecer Contraseña </h5>

                                            @if (session('status'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('status') }}
                                                </div>
                                            @endif
        
                                            <form method="POST" action="{{ route('password.email') }}">
                                                @csrf

                                                <div class="form-outline mb-4">                        
                                                    <div class="row mb-3">
                                                        <center>
                            
                                                            <div class="col-md-10 col-sm-6  ms-4">
                                                            
                                                                <input id="email" type="email" placeholder="Correo Electrónico"
                                                                class="form-control form-control-md @error('email') is-invalid @enderror"
                                                                name="email" value="{{ old('email') }}" required
                                                                autocomplete="email" autofocus>

                                
                                                                @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </center>
                                                    </div>
                                                </div>

                                                <div class="form-outline mb-4">                        
                                                    <div class="row mb-3">
                                                        <center>
                                                            <div class="col-md-6 d-flex justify-content-center">
                                                                <button class="btn btn-dark  btn-lg btn-block"type="submit" class="btn btn-success">
                                                                    {{ __('Continuar') }}
                                                                </button>
                                                            </div>
                                                        </center>
                                                    </div>
                                                </div>
                                            </form>




                            </div>
                        </div>


                    </div>
                </div>
            </center>

        </div>
    </div>


</section>
@endsection
