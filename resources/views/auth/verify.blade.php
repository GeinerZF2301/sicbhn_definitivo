@extends('layouts.app')

@section('content')
    <!-- Navbar Start -->
    
    <!-- Page Header Start -->

    <section class="vh-100 bg-image" style="
 background: linear-gradient(90deg, #9ebd13 0%, #008552 100%);">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">



                <center>
                    <div class="col-lg-7  ">
                        <div class="carddd d-flex justify-content-center ">
                            <div class="col-lg-6  d-none d-md-block">
                                <div class="imagen">
                                    <img src="/zoofari/img/Login/DSC_0105.webp" alt="">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-8 ">
                                <div class="carddd-body text-black ">


                                    <h1 class="text-uppercase text-center me-4 ms-4 mt-4 mb-4  h1 fw-bold  mb-0">
                                        Verificación de Correo Electrónico</h1>
                                    <div class="card-body">
                                        @if (session('resent'))
                                            <div class="alert alert-success" role="alert">
                                                {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}
                                            </div>
                                        @endif
                                        {{ __('Antes de continuar, verifique su correo electrónico para obtener un enlace de verificación. También revise la carpeta de no correos deseados.') }}
                                        {{ __('Si usted no recibió el correo electrónico') }},
                                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-link p-0 m-0 align-baseline">{{ __('solicite aquí otro enlace seguro') }}</button>.
                                        </form>
                                        <br>
                                        <br>
                                        {{ __('Atentamente, ') }}
                                        <br>
                                        <br>
                                        {{ __('Administración del SICBHN') }}

                                    </div>
                                    <div class="text-center mt-4">
                                        <a href="{{ url('/') }}" class="btn btn-primary">Volver al inicio</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </center>




            </div>
        </div>
        </div>
    </section>
@endsection
