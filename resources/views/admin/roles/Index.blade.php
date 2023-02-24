@extends('layouts.admin')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
          <div >
              <h2 class=""><i class="far fa-user" ></i> Roles</h2>
          </div>
            <div align="right">
                @can('crear-rol')
                <a style="margin-bottom: 1rem;"  href="{{ route('roles.create') }}" class=  "btn bg-gradient-success"> <i class="fas fa-plus"></i> Crear</a>
                @endcan
            </div>
        </div>
</div> 

<div class="card">
    <div class="table-responsive" >
    <table class="table align-items-center mb-0">
            <thead style="">
           
            <th >Rol</th>
            <th >Acciones</th>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                       
                        <td>{{$role->name}}</td>
                    
                     
                        <td>
                        @can('editar-rol')
                        <a class="btn btn-info" href="{{ route('roles.edit', $role->id)}}">Editar</a>
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

@endsection