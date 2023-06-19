@extends('layouts.app')

@section('content')
    <!-- Navbar Start -->
    @include('componentes.NavbarLogin')
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


                                    <h1 class="text-uppercase text-center me-4 ms-4 mt-4 mb-4  h1 fw-bold  mb-0"> {{ __('messages.1RegisterInicio') }}</h1>

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf



                                        <div class="row d-flex justify-content-center align-items-center ">

                                            <div class="col-md-10 col-sm-11 mb-3 me-2 ms-2  ">

                                                <input id="name" type="text" placeholder=" {{ __('messages.2RegisterInicio') }}"
                                                    class="form-control @error('name') is-invalid @enderror form-control-md"
                                                    name="name" value="{{ old('name') }}" required autocomplete="name"
                                                    autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ __('messages.3RegisterInicio') }}
                                                    </span>
                                                @enderror
                                            </div>


                                            <div class="col-md-10 col-sm-11 mb-3 ">
                                                <input id="email" type="email" placeholder=" {{ __('messages.4RegisterInicio') }}"
                                                    class="form-control @error('email') is-invalid @enderror form-control-md"
                                                    name="email" value="{{ old('email') }}" required
                                                    autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ __('messages.5RegisterInicio') }}
                                                    </span>
                                                @enderror
                                            </div>




                                            <div class="col-md-10 col-sm-11 mb-3">
                                                <input id="password" type="password" placeholder=" {{ __('messages.6RegisterInicio') }}"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ __('messages.7RegisterInicio') }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-10 col-sm-11 mb-3">
                                            <input id="password-confirm" type="password" placeholder=" {{ __('messages.8RegisterInicio') }}"
                                                class="form-control form-control-md" name="password_confirmation" required
                                                autocomplete="new-password">
                                            @error('password-confirm')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ __('messages.9RegisterInicio') }}
                                                </span>
                                            @enderror
                                        </div>

                                        <br>

                                        <div class="row ">
                                            <div class="col-md-12 justify-content-center mt-1 mb-4 ">
                                                <button type="submit" class="btnregister btn btn-primary">
                                                    {{ __('messages.10RegisterInicio') }}
                                                </button>
                                            </div>
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
        </div>
    </section>
@endsection
