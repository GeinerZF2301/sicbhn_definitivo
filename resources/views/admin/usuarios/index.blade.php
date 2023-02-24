@extends('layouts.admin')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
          <div >
              <h2 class=""><i class="far fa-user" ></i> Usuarios</h2>
          </div>
            <div align="right">
                <a style="margin-bottom: 1rem;"  href="{{ route('usuarios.create') }}" class=  "btn bg-gradient-success"> <i class="fas fa-plus"></i> Crear</a>
            </div>
        </div>
</div> 

<div class="card">
    <div class="table-responsive" >
        <table class="table align-items-center mb-0">
            <thead style="">
            <th style="display: none;">ID</th>
            <th >Nombre</th>
            <th >E-mail</th>
            <th >Rol</th>
            <th >Acciones</th>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td style="display: none; ">{{$usuario->id}}</td>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->email}}</td>
                        <td>
                            @if(!empty($usuario->getRoleNames()))
                            @foreach ($usuario->getRoleNames() as $rolName)
                                <h5><span>{{$rolName}}</span></h5>
                            @endforeach
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-info" href="{{ route('usuarios.edit', $usuario->id)}}">Editar</a>
                            {!! Form::open(['method' => 'DELETE', 'route' =>['usuarios.destroy', $usuario->id], 'style' => 'display:inline' ]) !!}
                                {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination justify-content-end">
            {{ $usuarios->links() }}
            
        </div>
    </div>
</div>

@endsection