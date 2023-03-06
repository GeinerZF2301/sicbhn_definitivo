@extends('layouts.admin')

@section('content')
<section>
    <div class="row mx-auto py-4 d-flex justify-content-center">
        <span class="mb-4 col-20">
            <h1 class="py-2 text-center text-dark mt-4 fs-2 rounded fw-bold text-uppercase">Documentación del
                Corredor
                Biológico</h1>
        </span>
        <div class="row mb-2">
            <span class="fw-light fs-6">Gestion de la Documentación del Corredor Biológico</span>
        </div>
        <div class="row">
            <div class="d-flex justify-content-between mt-2 ">
            @can('crear-Documento')
                <button id="create-button" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#createModal">
                    Crear Documento
                </button>
            @endcan
                @include('admin.documentos.createModal')
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
                                <th scope="col">Descripcion</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Tipo Documento</th>
                                <th scope="col">acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($documentos as $documento)
                            <tr class="">
                                <td class="id" name="id" class="budget">
                                    {{ $documento->id }}
                                </td>
                                <td name="documento" class="budget">
                                    {{ $documento->nombre }}
                                </td>
                                <td name="descripcion" class="budget">
                                    {{ $documento->descripcion }}
                                </td>
                                @if ($documento->estado == 1)
                                    <td name="estado" class="budget">
                                        Activo
                                    </td>
                                @else
                                    <td name="estado" class="budget">
                                        Inactivo
                                    </td>
                                @endif
                                <td name="documento" class="budget">
                                    {{ $documento->tipo_documento }}
                                </td>
                                <div class="d-flex shadow-lg justify-content-between">
                                    <td class="">
                                    @can('editar-Documento')
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#editModal"
                                            class="editBtn shadow-lg rounded btn btn-warning"><i class="bi bi-pencil-square"></i>  Editar</button>
                                    @endcan
                                        <a href="{{ asset('storage/documentos/'.$documento->file) }}" target="_blank"  class=" shadow-lg btn btn-info rounded"><i class="bi bi-eye"></i>  Ver</a>
                                    @can('borrar-Documento')         
                                        <button type="submit"
                                            class=" deleteBtn  shadow rounded btn btn-danger"><i class="bi bi-trash3-fill"></i> Eliminar  </button>
                                    @endcan
                                    </td>
                                </div>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
            @include('admin.documentos.editModal')
           
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="js/documentos/upsert.js"></script>
<script src="js/utilities/dataTable.js"></script>
@endsection