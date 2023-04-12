@extends('layouts.app')
@section('content')
    {{-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuérdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar Sesión') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidó su contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  --}}




    <section class="vh-100"
        style=" 
        background: rgb(23,112,30);
background: -moz-linear-gradient(189deg, rgba(23,112,30,1) 0%, rgba(47,130,41,1) 48%, rgba(14,200,47,1) 100%);
background: -webkit-linear-gradient(189deg, rgba(23,112,30,1) 0%, rgba(47,130,41,1) 48%, rgba(14,200,47,1) 100%);
background: linear-gradient(189deg, rgba(23,112,30,1) 0%, rgba(47,130,41,1) 48%, rgba(14,200,47,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#17701e",endColorstr="#0ec82f",GradientType=1); ">

                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <center>
                            <div class="col-lg-7">
                                <div class="carddd d-flex">
                                    <div class="col-lg-6  d-none d-md-block">
                                     <div class="imagen">
                                        <img src="zoofari/img/Login/aaaa.jpg" alt="">
                                     </div>

                                    </div>
                                    <div class="col-lg-6 col-sm-7">
                                        <div class="carddd-body text-black">

                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf


                                                <div class="d-flex align-items-center mt-3 mb-3 pb-1">

                                                    <span class="h1 fw-bold  me-2 ms-2 mb-0">Corredor Biológico Hojancha Nandayure</span>
                                                </div>

                                                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Iniciar sesión en su
                                                    cuenta
                                                </h5>

                                                <div class="form-outline mb-4">
                                                    <div class="row mb-3">
                                                        <center>
                                                            <div class="col-md-10 col-sm-6 me-5 ms-5">
                                                                <input id="email" type="email"
                                                                    placeholder="Correo Electrónico"
                                                                    class="form-control form-control-sm @error('email') is-invalid @enderror"
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
                                                            <div class="col-md-10 col-sm-6   me-5 ms-5">
                                                                <input id="password" type="password" placeholder="Contraseña"
                                                                    class="form-control form-control-sm @error('password') is-invalid @enderror"
                                                                    name="password" required autocomplete="current-password">

                                                                @error('password')
        <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
    @enderror
                                                            </div>
                                                        </center>
                                                    </div>

                                                </div>


                                                <div class="pt-1 mb-4">
                                                    <button class="btn btn-dark btn-lg btn-block" type="submit">
                                                        {{ __('Iniciar Sesión') }}</button>
                                                </div>

                                            <div class="row d-flex d-block justify-content-center mb-2">
                                                <div class="col-10 ">
                                                   
                                                        <div class="form-check">
                                                            <input class="form-check-input " type="checkbox" name="remember"
                                                                id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                            <label class="form-check-label" for="remember">
                                                                {{ __('Recuérdame') }}
                                                            </label>
                                                        </div>


                                                         @if (Route::has('password.request'))
                                                        <a class="btn btn-link mb-1px" href="{{ route('password.request') }}">
                                                            {{ __('Olvidó su contraseña?') }}
                                                        </a>
                                                        @endif
                                                   

                                                    <a class="btn btn-link" href="/register">
                                                        {{ __('¿Aún no tienes una cuenta? Regístrate Ahora') }}
                                                    </a>
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
