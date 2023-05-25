@extends('layouts.app')
@section('content')

   <!-- Navbar Start -->
   @include('componentes.NavbarLogin')
   <!-- Page Header Start -->

<section class="vh-100" style=" 
        background: linear-gradient(90deg, #92e09e 0%, #d9e7ff 100%);">

    <div class=" container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <center>
                <div class="col-lg-7">
                    <div class="carddd d-flex">
                        <div class="col-lg-6  d-none d-md-block">
                            <div class="imagen">
                                <img src="/zoofari/img/Login/_ORV2876.webp" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-7">
                            <div class="carddd-body text-black">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="d-flex align-items-center justify-content-center mt-5 mb-5 pb-6">
                                        <span class="h1 fw-bold mb-3 "> Iniciar sesión </span>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <div class="row mb-5">
                                            <center>
                                                <div class="col-md-10 col-sm-6 me-5 ms-5">
                                                    <input id="email" type="email" placeholder="Correo Electrónico"
                                                        class="form-control form-control-sm @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" required
                                                        autocomplete="email" autofocus>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                    
                                                       
                                                    </span>
                                                    @enderror
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <div class="row mb-3">
                                            <center>
                                                <div class="col-md-10 col-sm-6   me-5 ms-5">
                                                    <input id="password" type="password" placeholder="Contraseña"
                                                        class="form-control form-control-sm @error('password') is-invalid @enderror"
                                                        name="password" required autocomplete="current-password">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>Correo electrónico incorrecto <br> o </strong>
                                                        <strong>Contraseña incorrecta  <br> Por favor, inténtalo de nuevo.</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit"> {{ __('Iniciar Sesión')
                                            }}</button>
                                    </div>
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Olvidó su contraseña?') }}
                                        </a>
                                        @endif
                                    </div>
                                    <a class="btn btn-link" href="/register">
                                        {{ __('¿Aún no tienes una cuenta? Regístrate Ahora') }}
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>
</section>
@endsection