@extends('layouts.admin')

@section('content')
    <section>
        <div class="row mx-auto py-4 d-flex justify-content-center">
            <span class="mb-4 col-20">
                <h1 class="py-2 text-center text-dark mt-4 fs-2 rounded fw-bold text-uppercase">Tipos de Persona del
                    Corredor
                    Biológico</h1>
            </span>
            <div class="row mb-2">
                <span class="fw-light fs-6">Gestion de los tipos de Persona</span>
            </div>
            <div class="row">
                <div class="d-flex justify-content-between mt-2 ">
                    @can('crear-TipoPersona')
                        <button id="create-button" type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#createModal">
                            Crear Tipo de Persona
                        </button>
                    @endcan
                    @include('admin.tipopersonas.createModal')
                </div>
            </div>

            <div class="table-container">
                <div class="card mt-4 rounded shadow-lg bg-white bg-body">
                    <div class="">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover align-items-center">
                                <thead class="table-container bg-dark text-white text-center text-uppercase fw-light fs-6">
                                    <tr>

                                        <th scope="col">Tipo de Persona</th>
                                        <th scope="col">Descripcion</th>
                                        <th scope="col">acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tipo_personas as $tipo_persona)
                                        <tr>

                                            <td name="tipo_persona" class="budget">{{ $tipo_persona->tipo_persona }}</td>
                                            <td name="descripcion" class="budget">{{ $tipo_persona->descripcion }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    @can('editar-TipoPersona')
                                                        <button type="button" data-bs-toggle="modal"
                                                            data-bs-target="#editModal"
                                                            class="editBtn rounded btn btn-warning me-2">Editar</button>
                                                    @endcan
                                                    <button class="showBtn shadow btn btn-info rounded me-2"
                                                        data-bs-toggle="modal" data-bs-target="#showModal">Ver más</button>
                                                    @can('borrar-TipoPersona')
                                                        <button type="submit"
                                                            class="deleteBtn shadow rounded btn btn-danger">Eliminar</button>
                                                    @endcan
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



                @include('admin.tipopersonas.editModal')
                @include('admin.tipopersonas.showModal')
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="js/tipo_persona/upsert.js"></script>
    <script src="js/utilities/dataTable.js"></script>
@endsection
