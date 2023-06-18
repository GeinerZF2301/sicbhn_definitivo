@extends('layouts.navbar')
@section('content')
    <!-- Navbar Start -->
    @include('componentes.NavBarPrincipal')
    
    <!-- Page Header Start -->
    <div class="container-fluid header-bgHV py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown"> {{ __('messages.PrimerTituloHeaderHorarioVisita') }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ url('/') }}"> {{ __('messages.SegundoTituloHeaderHorarioVisita') }}</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        {{ __('messages.TercerotextoHeaderHorarioVisita') }}
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container">
        <div class="row g-9">
            <div class="col-lg-13 text-center wow fadeInUp" data-wow-delay="0.1s">
                <p><span class="text-primary me-2">{{ __('messages.CuartotextoHeaderHorarioVisita') }} </p>
                <h1 class="display-5 mb-9">
                    {{ __('messages.QuintotextoHeaderHorarioVisita') }}
                    <span class="text-primary">{{ __('messages.SextotextoHeaderHorarioVisita') }}</span>
                </h1>
                <p class="mb-9">
                    {{ __('messages.PrimerTextoHeaderInicio') }}<br>
                    {{ __('messages.SegundoTextoHeaderInicio') }} <br>
                    {{ __('messages.TerceroTextoHeaderHorarioVisita') }}
                </p>
            </div>
        </div>

        <!-- Visiting Hours Start -->
        <div class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-12 wow fadeIn" data-wow-delay="0.3s">
                        <h1 class="display-6 text-center text-white mb-6">{{ __('messages.PrimeraHorarioVisita') }}<br>{{ __('messages.SegundoHorarioVisita') }}</h1>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <span>{{ __('messages.HorarioLunes') }}</span>
                                <span>{{ __('messages.HoraLunes') }}</span>
                            </li>
                            <li class="list-group-item">
                                <span>{{ __('messages.HorarioMartes') }}</span>
                                <span>{{ __('messages.HoraMartes') }}</span>
                            </li>
                            <li class="list-group-item">
                                <span>{{ __('messages.HorarioMiercoles') }}</span>
                                <span>{{ __('messages.HoraMiercoles') }}</span>
                            </li>
                            <li class="list-group-item">
                                <span>{{ __('messages.HorarioJueves') }}</span>
                                <span>{{ __('messages.HoraJueves') }}</span>
                            </li>
                            <li class="list-group-item">
                                <span>{{ __('messages.HorarioViernes') }}</span>
                                <span>{{ __('messages.HoraViernes') }}</span>
                            </li>
                            <li class="list-group-item">
                                <span>{{ __('messages.HorarioSabado') }}</span>
                                <span>{{ __('messages.HoraSabado') }}</span>
                            </li>
                            <li class="list-group-item">
                                <span>{{ __('messages.HorarioDomingo') }}</span>
                                <span>{{ __('messages.HoraDomingo') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Visiting Hours End -->
    @endsection
