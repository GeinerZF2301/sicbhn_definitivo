@extends('layouts.admin')
@section('content')
<div class="row mx-auto py-4 d-flex justify-content-center">
    <span class="mb-4 col-20">
        <h1 class="py-2 text-center text-dark mt-4 fs-2 rounded fw-bold text-uppercase">Edición  de roles del
            Corredor
            Biológico</h1>
    </span>

            @if ($errors->any())
                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                    <strong>¡Revise los campos!</strong>
                    @foreach ($errors->all() as $error)
                        <span class="badge badge-danger">{{ $error }}</span>
                    @endforeach
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            {!! Form::model($role, ['method' => 'PATCH', 'route' => ['roles.update', $role->id]]) !!}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="">Nombre del Rol:</label>
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="">Permisos para este Rol:</label>
                        <br />
                        <div class=" row  py-8 mx-auto d-flex justify-content-center">
                            @foreach ($permission as $value)
                            <div class="col-2">

                                <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermission) ? true : false, ['class' => 'name']) }}
                                    {{ $value->name }}</label>
                                <br />
                                

                            </div>
                                
                            @endforeach
                            <div class="col-2">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <a href="/roles" class="btn btn-danger">Cancelar</a>
                </div>

            </div>
            {!! Form::close() !!}

        </div>
@endsection
