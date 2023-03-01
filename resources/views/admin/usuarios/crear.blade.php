@extends('layouts.admin')

@section('content')
<div class="row mx-auto py-4 d-flex justify-content-center">
            <span class="mb-4 col-20">
                <h1 class="py-2 text-center text-dark mt-4 fs-2 rounded fw-bold text-uppercase">Registro de Usuarios del
                    Corredor
                    Biológico</h1>
            </span>
            

    @if ($errors->any())
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
            <strong>|Llene todos los campos!</strong>
            @foreach ($errors->all() as $error)
                <span class= "badge badge-danger">Error</span>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    {!! Form::open(array('route'=>'usuarios.store', 'method'=>'POST')) !!}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for= "name">Nombre</label>
                    {!! Form::text('name', null, array('class'=>'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for= "name">Correo</label>
                    {!! Form::text('email', null, array('class'=>'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for= "name">Contraseña</label>
                    {!! Form::text('password', null, array('class'=>'form-control')) !!}
                </div>
            </div> 
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for= "name">Confirmar Contraseña</label>
                    {!! Form::text('confirm-password', null, array('class'=>'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for= "name">Roles</label>
                    {!! Form::select('roles[]', $roles,[], array('class'=>'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button  class="btn btn-primary"  type="submit">Guardar</button>
            </div>        
        </div>
    </div>
    {!! Form::close() !!}



@endsection
