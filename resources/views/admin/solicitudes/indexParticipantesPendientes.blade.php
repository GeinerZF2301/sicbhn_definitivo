@extends('layouts.admin')

@section('content')
    <section>
        <div class="row mx-auto py-4 d-flex justify-content-center">
            <span class="mb-4 col-20">
                <h1 class="py-2 text-center text-dark mt-4 fs-2 rounded fw-bold text-uppercase">Gestión de las solicitudes de participantes del Corredor
                    Biológico</h1>
            </span>
            @if (!isset($participantesPendientes) || $participantesPendientes->isEmpty())
            <span class="mb-4 col-12">
                <h2 class="py-2 text-center text-light bg-danger mt-4 fs-2 fw-bold ">No hay solicitudes de participantes pendientes</h2>
            </span>
             @else 
            <div class="row mb-2">
                <span class="fw-light fs-6">Gestión de las solicitudes de los participantes de talleres</span>
            </div>
                <div class="table-container">
                    <div class="card mt-4 rounded shadow-lg bg-white bg-body">
                        <div class="">
                            <table id="dataTable" class="table table-hover  align-items-center">
                                <thead class="table-container bg-dark text-white text-center text-uppercase fw-light fs-6  ">
                                    <tr>
                                        <th style="display: none" scope="col">ID</th>
                                        <th style="display: none" scope="col">TallerID</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellidos</th>
                                        <th scope="col">Taller a Inscribirse</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($participantesPendientes as $persona)
                                        <tr class="text-center">
                                            <td style="display: none" class="id" name="id" class="budget">
                                                {{ $persona->id }}
                                            </td>
                                            <td style="display: none" class="tallerId" name="tallerId" class="budget">
                                                {{ $persona->taller_id }}
                                            </td>
                                            <input type="hidden" name="id" class="id">
                                            <td name="tipo_persona" class="budget">
                                                {{ $persona->nombre }}
                                            </td>
                                            <td name="descripcion" class="budget">
                                                {{ $persona->apellidos }}
                                            </td>
                                            <td name="numero_identificacion" class="budget">
                                                {{ $persona->taller_nombre }}
                                            </td>
                                            <td name="tipo_persona" class="budget">
                                                <span class="bg-warning text-light rounded-pill p-2"> {{ $persona->estado }} </span>
                                            </td>
                                            <div class="d-flex shadow-lg justify-content-between">
                                                <td class="">
                                            
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#editModal"
                                                        class="approveBtn rounded btn btn-success">Aprobar <i class="bi bi-check-circle-fill"></i></button>
                                            
                                                    <button class=" showBtn shadow btn btn-info rounded" data-bs-toggle="modal"
                                                        data-bs-target="#showModal">Ver <i class="bi bi-info-circle-fill"></i> </button>
                                                    
                                                    <button type="submit"
                                                        class=" rejectBtn  shadow rounded btn btn-danger">Rechazar <i class="bi bi-clipboard-x-fill"></i></button>
                                                </td>
                                            </div>
                                        </tr>
                                    @endforeach
                                        <input type="hidden" value="Aprobado" name="estado" id="estado">
                                </tbody>
                            </table>


                        </div>
                    </div>
                    @include('admin.solicitudes.showModal')
                </div>
            @endif 
        </div>
    </section>
@endsection

@section('js')
    <script src="js/solicitudes/talleres/upsert.js"></script>
    <script src="js/solicitudes/voluntariados/upsert.js"></script>
    <script src="js/utilities/dataTable.js"></script>
@endsection
