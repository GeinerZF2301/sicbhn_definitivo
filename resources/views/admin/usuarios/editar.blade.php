@extends('layouts.admin')

@section('content')
    <div class="row mx-auto py-4 d-flex justify-content-center">
        <div class="col-12">
            <h1 class="py-2 text-center text-dark mt-4 fs-2 rounded fw-bold text-uppercase">Edición de Usuarios del Corredor
                Biológico</h1>
        </div>

        @if ($errors->any())
            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                <strong>|Revise los campos!</strong>
                @foreach ($errors->all() as $error)
                    <span class="badge badge-danger">{{ $error }}</span>
                @endforeach
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="row">
            <div class="col-12">
                {!! Form::model($user, ['method' => 'PUT', 'route' => ['usuarios.update', $user->id]]) !!}
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su nombre']) !!}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Correo</label>
                                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su correo']) !!}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Roles</label>
                                    {!! Form::select('roles[]', $roles, [], ['class' => 'form-control', 'placeholder' => 'Seleccione un rol']) !!}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit">Guardar</button>
                                <a href="/usuarios" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    @endsection
