@extends('layouts.app')

@section('content')

@include('componentes.NavbarLogin')

<section class="vh-100" style=" 
     background: linear-gradient(90deg, #92e09e 0%, #d9e7ff 100%);">

    <div class=" container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <center>
                <div class="col-lg-7">
                    <div class="carddd d-flex">
                        <div class="col-lg-6  d-none d-md-block">
                            <div class="imagen">
                                <img src="/zoofari/img/Login/DSC_0087-8.webp" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-7">
                            <div class="carddd-body text-black me-3">

                                
                                <div class="d-flex align-items-center  ms-3 mt-3 mb-3 pb-1">
                                    <span class="h2 fw-bold   mb-0">{{ __('messages.1CambiarContraseñaInicio') }}</span>
                                </div>

                                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">{{ __('messages.2CambiarContraseñaInicio') }}</h5>

                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf
            
                                    <input type="hidden" name="token" value="{{ $token }}">
            
                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('messages.3CambiarContraseñaInicio') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="email" type="email" placeholder="{{ __('messages.4CambiarContraseñaInicio') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ __('messages.5CambiarContraseñaInicio') }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="row mb-3">
                                        <label for="password"   class="col-md-4 col-form-label text-md-end">{{ __('messages.6CambiarContraseñaInicio') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="password" type="password" placeholder="{{ __('messages.7CambiarContraseñaInicio') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ __('messages.8CambiarContraseñaInicio') }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="row mb-3">
                                        <label for="password-confirm"   class="col-md-4 col-form-label text-md-end">{{ __('messages.9CambiarContraseñaInicio') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" placeholder="{{ __('messages.10CambiarContraseñaInicio') }}" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
            
                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button class="btn btn-dark  btn-lg btn-block"type="submit" class="btn btn-success">
                                                {{ __('messages.11CambiarContraseñaInicio') }}
                                            </button>
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