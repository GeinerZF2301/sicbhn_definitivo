@extends('layouts.admin')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
          <div >
              <h2 class=""><i class="far fa-user" ></i> Usuarios</h2>
          </div>
            <div align="right">
                <a href="{{ route('usuarios.create') }}" class=  "btn bg-gradient-success"> <i class="fas fa-plus"></i> Crear</a>
            </div>
        </div>
</div> 

@if ($errors->any())
<div class="alert alert-dark alert-dismissible fade show" role="alert">
    <strong>|Revise los campos!</strong>
    @foreach ($errors->all() as $error)
         <span class= "badge badge-danger">{($error}}</span>
    @endforeach
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
     </button>
</div>
@endif



{!! Form::model($user, ['method' => 'PUT', 'route' => ['usuarios.update', $user->id]]) !!}
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
{!! Form::close() !!}



@endsection