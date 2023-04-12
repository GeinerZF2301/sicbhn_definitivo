@extends('layouts.admin')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
                <div class="d-flex justify-content mt-2 ">
                    
                        @can('crear-usuario') 
                        <a style="margin-bottom: 1rem;"  href="{{ route('usuarios.create') }}" class=  "btn btn-success"> <i class="fas fa-plus"></i>  Crear usuario</a>
                        @endcan
                        <a style="margin-bottom: 1rem;" href="PDF/reporteUsuarios.php" target="_blank" class= "btn btn-primary mx-2"> <i class="fas fa-file-pdf"></i> Generar reporte</a>
                    
                    
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
                                @can('editar-usuario') 
                                <a class="editBtn rounded btn btn-warning" href="{{ route('usuarios.edit', $usuario->id)}}">Editar</a>
                                @endcan

                                {!! Form::open(['method' => 'DELETE', 'route' =>['usuarios.destroy', $usuario->id], 'style' => 'display:inline' ]) !!}
                                @can('borrar-usuario') 
                                    {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                    @endcan
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