@extends('layouts.app')

@section('content')


  <!-- Navbar Start -->
  @include('componentes.NavbarLogin')

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
                                <img src="/zoofari/img/Login/DSC_0071-5.webp" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-7">
                            <div class="carddd-body text-black me-3">

                                
                                <div class="d-flex align-items-center  ms-5 mt-5 mb-5 pb-1">
                                    <span class="h2 fw-bold   mb-0">{{ __('messages.1SolicitudContraseñaInicio') }}</span>
                                </div>

                                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">{{ __('messages.2SolicitudContraseñaInicio') }}</h5>

                                            @if (session('status'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ __('messages.6SolicitudContraseñaInicio') }}
                                                </div>
                                            @endif
        
                                            <form method="POST" action="{{ route('password.email') }}">
                                                @csrf

                                                <div class="form-outline mb-4">                        
                                                    <div class="row mb-3">
                                                        <center>
                            
                                                            <div class="col-md-10 col-sm-6  ms-4">
                                                            
                                                                <input id="email" type="email" placeholder="{{ __('messages.3SolicitudContraseñaInicio') }}"
                                                                class="form-control form-control-md @error('email') is-invalid @enderror"
                                                                name="email" value="{{ old('email') }}" required
                                                                autocomplete="email" autofocus>

                                
                                                                @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        {{ __('messages.4SolicitudContraseñaInicio') }}
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
                                                                    {{ __('messages.5SolicitudContraseñaInicio') }}
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
