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


                                    <h1 class="text-uppercase text-center me-4 ms-4 mt-4 mb-4  h1 fw-bold  mb-0">{{ __('messages.1VereificacionInicio') }}</h1>
                                    <div class="card-body">
                                        @if (session('resent'))
                                            <div class="alert alert-success" role="alert">
                                                {{ __('messages.2VereificacionInicio') }}
                                            </div>
                                        @endif
                                        {{ __('messages.3VereificacionInicio') }}
                                        {{ __('messages.4VereificacionInicio') }},
                                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-link p-0 m-0 align-baseline">{{ __('messages.5VereificacionInicio') }}</button>.
                                        </form>
                                        <br>
                                        <br>
                                        {{ __('messages.6VereificacionInicio') }}
                                        <br>
                                        <br>
                                        {{ __('messages.7VereificacionInicio') }}

                                    </div>
                                    <div class="text-center mt-4">
                                        <a href="{{ url('/') }}" class="btn btn-primary">{{ __('messages.8VereificacionInicio') }}</a>
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
