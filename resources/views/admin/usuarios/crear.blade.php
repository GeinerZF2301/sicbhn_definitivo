@extends('layouts.admin')

@section('content')
<div class="row mx-auto py-4 d-flex justify-content-center">
    <div class="col-12">
        <h1 class="py-2 text-center text-dark mt-4 fs-2 rounded fw-bold text-uppercase">Registro de Usuarios del Corredor Biológico</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
            <strong>Llene todos los campos!</strong>
            @foreach ($errors->all() as $error)
                <span class="badge badge-danger">Error</span>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="col-12">
        {!! Form::open(array('route'=>'usuarios.store', 'method'=>'POST')) !!}
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                {!! Form::text('name', null, array('class'=>'form-control', 'placeholder'=>'Ingrese el nombre')) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Correo</label>
                                {!! Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Ingrese el correo')) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                {!! Form::text('password', null, array('class'=>'form-control', 'placeholder'=>'Ingrese la contraseña')) !!}
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="confirm-password">Confirmar Contraseña</label>
                                {!! Form::text('confirm-password', null, array('class'=>'form-control', 'placeholder'=>'Confirme la contraseña')) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="roles">Roles</label>
                                {!! Form::select('roles[]', $roles, [], array('class'=>'form-control', 'placeholder'=>'Seleccione un rol')) !!}
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
@endsection
