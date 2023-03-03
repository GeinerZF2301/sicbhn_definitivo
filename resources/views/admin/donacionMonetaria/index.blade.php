@extends('layouts.admin')

@section('content')
    <section>
        <div class="row mx-auto py-4 d-flex justify-content-center">
            <span class="mb-4 col-20">
                <h1 class="py-2 text-center text-dark mt-4 fs-2 rounded fw-bold text-uppercase">Donaciones Monetarias del
                    Corredor Biológico</h1>
            </span>
            <div class="row mb-2">
                <span class="fw-light fs-6">Gestión de donaciones monetarias</span>
            </div>
            <div class="row">
                <div class="d-flex justify-content-between mt-2 ">
                    @can('crear-DonacionMonetarias') 
                    <button id="create-button" type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#createModal">
                        Crear donación Monetaria
                    </button>
                    @endcan
                    @include('admin.donacionMonetaria.createModal')
                </div>
            </div>

            <div class="table-container">
                <div class="card mt-4 rounded shadow-lg bg-white bg-body">
                    <div class="">
                        <table id="dataTable" class="table table-hover  align-items-center">
                            <thead class="table-container bg-dark text-white text-center text-uppercase fw-light fs-6  ">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Fecha de Donacion</th>
                                    <th scope="col">Fecha de Recepción </th>
                                    <th scope="col">Monto </th>
                                    <th scope="col">Donante</th>
                                    <th scope="col">acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($donaciones as $donacion)
                                    <tr class="">
                                        <td class="id" name="id" class="budget">
                                            {{ $donacion->id }}
                                        </td>
                                        <td name="fecha_donacion" class="budget">
                                            {{ $donacion->fecha_donacion }}
                                        </td>
                                        <td name="fecha_recibido" class="budget">
                                            {{ $donacion->fecha_recibido }}
                                        </td>
                                        <td name="monto" class="budget">
                                            {{ $donacion->monto }}
                                        </td>
                                        <td name="persona_donante_id" class="budget">
                                            {{ $donacion->persona_donante_id }}
                                        </td>
                                        <div class="d-flex shadow-lg justify-content-between">
                                            <td class="">
                                                @can('editar-DonacionMonetarias') 
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#editModal"
                                                    class="editBtn rounded btn btn-warning">Editar</button>
                                                @endcan
                                                <button class=" showBtn shadow btn btn-info rounded" data-bs-toggle="modal"
                                                    data-bs-target="#showModal">Ver más</button>
                                                @can('borrar-DonacionMonetarias') 
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
                    @include('admin.donacionMonetaria.editModal')
                    @include('admin.donacionMonetaria.showModal')
                </div>
            </div>

        </div>
    </section>
@endsection

@section('js')
    <script src="js/utilities/dataTable.js"></script>
@endsection
