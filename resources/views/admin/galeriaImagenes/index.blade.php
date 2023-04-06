@extends('layouts.admin')

@section('content')
<section>
    <div class="row mx-auto py-4 d-flex justify-content-center">
        <span class="mb-4 col-20">
            <h1 class="py-2 text-center text-dark mt-4 fs-2 rounded fw-bold text-uppercase">Galería del
                Corredor
                Biológico</h1>
        </span>
        <div class="row mb-2">
            <span class="fw-light fs-6">Gestion de la Galeria del Corredor Biológico</span>
        </div>
        <div class="row">
            <div class="d-flex justify-content-between mt-2 ">
            @can('crear-Galeria')
                <button id="create-button" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#createModal">
                    Crear Imagen
                </button>
                @endcan
                @include('admin.galeriaImagenes.createModal')
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
                                <th scope="col">Estado</th>
                                <th scope="col">Categoria Imagen</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($imagenes as $imagen)
                            <tr class="">
                                <td class="id" name="id" class="budget">
                                    {{ $imagen->id }}
                                </td>
                                <td name="documento" class="budget">
                                    {{ $imagen->nombre }}
                                </td>
                                
                                @if ($imagen->estado == 1)
                                    <td name="estado" class="budget">
                                        Visible
                                    </td>
                                @else
                                    <td name="estado" class="budget">
                                        No Visible
                                    </td>
                                @endif
                                <td name="documento" class="budget">
                                    {{ $imagen->categoria_imagen }}
                                </td>
                                <td name="imagen" class="budget">
                                   <img class="rounded-circle" style="max-width: 100px;" src="{{ asset('storage/imagenes/'.$imagen->file ) }}" >
                                </td>
                                <div class="d-flex shadow-lg justify-content-between">
                                    <td class="">
                                    @can('editar-Galeria')
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#editModal"
                                            class="editBtn shadow-lg rounded btn btn-warning"><i class="bi bi-pencil-square"></i>  Editar</button>
                                        <a href="{{ asset('storage/imagenes/'.$imagen->file) }}" target="_blank"  class=" shadow-lg btn btn-info rounded"><i class="bi bi-eye"></i> Ver Imagen</a>
                                    @endcan    
                                    @can('borrar-Galeria')    
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
            @include('admin.galeriaImagenes.editModal')
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="js/galeria/upsert.js"></script>
<script src="js/utilities/dataTable.js"></script>
@endsection