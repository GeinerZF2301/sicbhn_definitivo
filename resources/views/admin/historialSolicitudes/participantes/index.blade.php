@extends('layouts.admin')

@section('content')
    <section>
        <div class="row mx-auto py-4 d-flex justify-content-center">
            <span class="mb-4 col-20">
                <h1 class="py-2 text-center text-dark mt-4 fs-2 rounded fw-bold text-uppercase">Historial de solicitudes de
                    participantes de talleres del Corredor Biologico
                </h1>
            </span>
            <div class="table-container ">
                <div class="card mt-4 rounded shadow-lg bg-white bg-body">
                    <div class="">
                        <table id="dataTable" class="table table-hover  align-items-center">
                            <thead class="table-container bg-dark text-white text-center text-uppercase fw-light fs-6  ">
                                <tr>
                                    <th style="display: none" scope="col">Código</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Número de identificación</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($historialParticipantes as $participante)
                                    <tr class="text-center">
                                        <td style="display: none" name="id" id="id" class="budget id">
                                            {{ $participante->id }}
                                        </td>
                                        <td name="tipo_persona" class="budget">
                                            {{ $participante->nombre }}
                                        </td>
                                        <td name="descripcion" class="budget">
                                            {{ $participante->apellidos }}
                                        </td>
                                        <td name="numero_identificacion" class="budget">
                                            {{ $participante->numero_identificacion }}
                                        </td>
                                        @if ($participante->estado === 'Aprobado')
                                            <td name="tipo_persona" class="budget">
                                                <span class="bg-success text-light rounded-pill p-2">
                                                    {{ $participante->estado }} </span>
                                            </td>
                                        @else
                                            <td name="tipo_persona" class="budget">
                                                <span class="bg-danger text-light rounded-pill p-2">
                                                    {{ $participante->estado }} </span>
                                            </td>
                                        @endif
                                        <div class="d-flex shadow-lg justify-content-between">
                                            <td class="">
                                                <button class=" showBtn shadow btn btn-info rounded" data-bs-toggle="modal"
                                                    data-bs-target="#showModal">Ver <i class="bi bi-info-circle-fill"></i>
                                                </button>
                                            </td>
                                        </div>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
                @include('admin.solicitudes.showModal')
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="js/solicitudes/talleres/upsert.js"></script>
    <script src="js/utilities/dataTable.js"></script>
@endsection
