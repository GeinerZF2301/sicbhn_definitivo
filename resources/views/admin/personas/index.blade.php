@extends('layouts.admin')

@section('content')
    <section>
        <div class="row mx-auto py-4 d-flex justify-content-center">
            <span class="mb-4 col-20">
                <h1 class="py-2 text-center text-dark mt-4 fs-2 rounded fw-bold text-uppercase">Gestión de Personas del Corredor
                    Biológico</h1>
            </span>
            <div class="row mb-2">
                <span class="fw-light fs-6">Gestión de Personas</span>
            </div>
            <div class="row">
                <div class="d-flex justify-content-between mt-2 ">
                    @can('crear-Persona')
                    <button id="create-button" type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#createModal">
                        Crear  Persona
                    </button>
                    @endcan
                    @include('admin.personas.createModal')
                </div>
            </div>

            <div class="table-container ">
                <div class="card mt-4 rounded shadow-lg bg-white bg-body">
                    <div class="">
                        <table id="dataTable" class="table table-hover  align-items-center">
                            <thead class="table-container bg-dark text-white text-center text-uppercase fw-light fs-6  ">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Número de identificación</th>
                                    <th scope="col">Tipo de Persona</th>
                                    <th scope="col">acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($personas as $persona)
                                    <tr class="text-center">
                                        <td class="id" name="id" class="budget">
                                            {{ $persona->id }}
                                        </td>
                                        <td name="tipo_persona" class="budget">
                                            {{ $persona->nombre }}
                                        </td>
                                        <td name="descripcion" class="budget">
                                            {{ $persona->apellidos }}
                                        </td>
                                        <td name="numero_identificacion" class="budget">
                                            {{ $persona->numero_identificacion }}
                                        </td>
                                        <td name="tipo_persona" class="budget">
                                            {{ $persona->tipoPersona->tipo_persona ?? 'None' }}
                                        </td>
                                        <div class="d-flex shadow-lg justify-content-between">
                                            <td class="">
                                            @can('editar-Persona')
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#editModal"
                                                    class="editBtn rounded btn btn-warning">Editar</button>
                                            @endcan
                                                <button class=" showBtn shadow btn btn-info rounded" data-bs-toggle="modal"
                                                    data-bs-target="#showModal">Ver más</button>
                                                @can('borrar-Persona')
                                                <button type="submit"
                                                    class=" deleteBtn  shadow rounded btn btn-danger">Eliminar</button>
                                                @endcan
                                            </td>
                                        </div>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
                @include('admin.personas.editModal')
                @include('admin.personas.showModal')
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="js/personas/upsert.js"></script>
    <script src="js/utilities/dataTable.js"></script>
@endsection
