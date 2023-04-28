@extends('layouts.admin')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
@section('content')
    <section>
        <div class="row mx-auto py-4 d-flex justify-content-center">
            <span class="mb-4 col-20">
                <h1 class="py-2 text-center text-dark mt-4 fs-2 rounded fw-bold text-uppercase">Campañas del Corredor
                    Biológico</h1>
            </span>
            <div class="row mb-2">
                <span class="fw-light fs-6">Gestion de las Campañas</span>
            </div>

            <div class="row">
                <div class="d-flex justify-content mt-2 ">
                    @can('crear-Campañas')
                <button id="create-button" type="button" class="btn btn-success mx-2"  data-bs-toggle="modal"
                data-bs-target="#createModal">
                        Crear Campaña
                </button>
                @endcan
                
                <a href="ReporteCampañas" target="_blank" class= "btn btn-primary mx-2"> <i class="fas fa-file-pdf"></i> Generar reporte</a>


                
                    @include('admin.campañas.createModal')
                    
                </div>
            </div>

            <div class="table-container ">
                <div class="card mt-4 rounded shadow-lg bg-white bg-body">
                    <div class="">
                        <div class="table-responsive">
                        <table id="dataTable" class="table table-hover  align-items-center">
                            <thead class="table-container bg-dark text-white text-center text-uppercase fw-light fs-6   ">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($campañas as $campaña)
                                <tr>
                                    {{-- <tr class="text-center"> --}}
                                    <td class="id" name="id" class="budget">{{ $campaña->id }}</td>
                                        <td name="tipo_persona" class="budget">{{ $campaña->nombre }}</td>
                                        <td name="descripcion" class="budget">{{ $campaña->descripcion }}</td>
                                        <div class="d-flex shadow-lg justify-content-between">
                                            {{-- <td class="">  --}}

                                                <td>
                                                <div class="d-flex justify-content-center">
                                            @can('editar-Campañas')
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#editModal"
                                                    class="editBtn rounded btn btn-warning me-2">Editar</button>
                                                    @endcan
                                                <button class=" showBtn shadow btn btn-info rounded me-2" data-bs-toggle="modal"
                                                    data-bs-target="#showModal">Ver más</button>
                                            @can('borrar-Campañas')
                                                <button type="submit"
                                                    class=" deleteBtn  shadow rounded btn btn-danger">Eliminar</button>
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
                @include('admin.campañas.editModal')
                @include('admin.campañas.showModal')
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="js/campañas/upsert.js"></script>
    <script src="js/utilities/dataTable.js"></script>
@endsection
