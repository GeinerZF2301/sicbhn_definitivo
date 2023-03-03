@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verificación de Correo Electrónico') }}</div>

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
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('solicite aquí otro enlace seguro') }}</button>.
                    </form>
                    <br>
                    <br>
                    {{ __('Atentamente, ') }}
                    <br>
                    <br>
                    {{ __('Administración del SICBHN') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
