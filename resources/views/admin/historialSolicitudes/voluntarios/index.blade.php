@extends('layouts.admin')

@section('content')
    <section>
        <div class="row mx-auto py-4 d-flex justify-content-center">
            <span class="mb-4 col-20">
                <h1 class="py-2 text-center text-dark mt-4 fs-2 rounded fw-bold text-uppercase">Historial de solicitudes de voluntarios del Corredor Biologico
                  </h1>
            </span>
                <div class="table-container ">
                    <div class="card mt-4 rounded shadow-lg bg-white bg-body">
                        <div class="">
                            <table id="dataTable" class="table table-hover  align-items-center">
                                <thead class="table-container bg-dark text-white text-center text-uppercase fw-light fs-6  ">
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellidos</th>
                                        <th scope="col">Número de identificación</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($historialVoluntarios as $voluntario)
                                        <tr class="text-center">
                                        <input value="{{$voluntario->id}}" name="id" id="id" type="hidden">
                                            <td name="tipo_persona" class="budget">
                                                {{ $voluntario->nombre }}
                                            </td>
                                            <td name="descripcion" class="budget">
                                                {{ $voluntario->apellidos }}
                                            </td>
                                            <td name="numero_identificacion" class="budget">
                                                {{ $voluntario->numero_identificacion }}
                                            </td>
                                            @if ( $voluntario->estado === 'Aprobado')
                                                <td name="tipo_persona" class="budget">
                                                    <span class="bg-success text-light rounded-pill p-2"> {{ $voluntario->estado }} </span>
                                                </td>
                                            @else
                                                <td name="tipo_persona" class="budget">
                                                    <span class="bg-danger text-light rounded-pill p-2"> {{ $voluntario->estado }} </span>
                                                </td>
                                            @endif
                                            
                                            <div class="d-flex shadow-lg justify-content-between">
                                                <td class="">
                                                    <button class=" showBtn shadow btn btn-info rounded" data-bs-toggle="modal"
                                                        data-bs-target="#showModal">Ver <i class="bi bi-info-circle-fill"></i> </button>   
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
    <script src="js/solicitudes/voluntariados/upsert.js"></script>
    <script src="js/utilities/dataTable.js"></script>
@endsection
