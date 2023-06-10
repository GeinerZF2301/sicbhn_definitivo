@extends('layouts.admin')

@section('content')
<div class="row mx-auto py-4 d-flex justify-content-center">
            <span class="mb-4 col-20">
                <h1 class="py-2 text-center text-dark mt-4 fs-2 rounded fw-bold text-uppercase">Registro de roles del
                    Corredor Biológico</h1>
            </span>
            <div class="row mb-2">
                <span class="fw-light fs-6">Gestión de los usuarios</span>
            </div>
    <div class="row">
            <div  class="d-flex justify-content-between mt-2 ">
                <div align="right">
                    @can('crear-rol')
                    <a style="margin-bottom: 1rem;"  href="{{ route('roles.create') }}" class=  "btn btn-primary"> <i class="fas fa-plus"></i> Crear rol</a>
                    @endcan
                </div>
            </div>
    </div> 

    <div class="table-container">
        <div class="card mt-4 rounded shadow-lg bg-white bg-body">
            <div class="">
                <table id="dataTable" class="table table-hover  align-items-center">
                    <thead class="table-container bg-dark text-white text-center text-uppercase fw-light fs-6  ">
                        <tr>
                            
                            <th scope="col">Rol</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                            <tr class="">
                            
                                <td name="Nombre" class="budget">
                                    {{$role->name}}
                                </td>

                                <td>
                                @can('editar-rol')
                                <a class="editBtn rounded btn btn-warning" href="{{ route('roles.edit', $role->id)}}">Editar</a>
                                @endcan

                                @can('borrar-rol')
                                    {!! Form::open(['method' => 'DELETE', 'route' =>['roles.destroy', $role->id], 'style' => 'display:inline' ]) !!}
                                        {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
    
                <div class="pagination justify-content-end">
                </div>
                
            </div>
        </div>
    </div>     
</div>
@endsection
@section('js')
    <script src="js/utilities/dataTable.js"></script>
@endsection