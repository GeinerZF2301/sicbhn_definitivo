@extends('layouts.admin')

@section('content')
<div class="row mx-auto py-4 d-flex justify-content-center">
            <span class="mb-4 col-20">
                <h1 class="py-2 text-center text-dark mt-4 fs-2 rounded fw-bold text-uppercase">Registro de Usuarios del
                    Corredor
                    Biológico</h1>
            </span>
            <div class="row mb-2">
                <span class="fw-light fs-6">Gestión de los usuarios</span>
            </div>

        <div class="row">
                <div  class="d-flex justify-content-between mt-2 ">
                    <div align="right">
                        <a style="margin-bottom: 1rem;"  href="{{ route('usuarios.create') }}" class=  "btn btn-primary"> <i class="fas fa-plus"></i>  Crear usuario</a>
                    </div>
                </div>
        </div> 

        <div class="table-container">
                <div class="card mt-4 rounded shadow-lg bg-white bg-body">
                    <div class="">
                        <table id="dataTable" class="table table-hover  align-items-center">
                            <thead class="table-container bg-dark text-white text-center text-uppercase fw-light fs-6  ">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Rol</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($usuarios as $usuario)

                            <tr class="">
                                        <td class="id" name="id" class="budget">
                                            {{$usuario->id}}
                                        </td>
                                        <td name="Nombre" class="budget">
                                            {{$usuario->name}}
                                        </td>
                                        <td name="E-mail" class="budget">
                                            {{$usuario->email}}
                                        </td>

                            <td>
                                @if(!empty($usuario->getRoleNames()))
                                @foreach ($usuario->getRoleNames() as $rolName)
                                    <h5><span>{{$rolName}}</span></h5>
                                @endforeach
                                @endif
                            </td>
                            <td>
                                <a class="editBtn rounded btn btn-warning" href="{{ route('usuarios.edit', $usuario->id)}}">Editar</a>
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
    </div>     
</div> 
@endsection
@section('js')
    <script src="js/utilities/dataTable.js"></script>
@endsection