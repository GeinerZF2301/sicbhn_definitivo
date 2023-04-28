@extends('layouts.admin')

@section('content')
    <section>
        <div class="row mx-auto py-4 d-flex justify-content-center">
            <span class="mb-4 col-20">
                <h1 class="py-2 text-center text-dark mt-4 fs-2 rounded fw-bold text-uppercase">Cuentas Bancarias del
                    Corredor
                    Biológico</h1>
            </span>
            <div class="row mb-2">
                <span class="fw-light fs-6">Gestión de las Cuentas Bancarias</span>
            </div>
            <div class="row">
                <div class="d-flex justify-content-between mt-2 ">
                    @can('crear-CuentasBancarias')
                        <button id="create-button" type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#createModal">
                            Agregar Cuentas Bancarias
                        </button>
                    @endcan
                    @include('admin.cuentaBancaria.createModal')
                </div>
            </div>

            <div class="table-container ">
                <div class="card mt-4 rounded shadow-lg bg-white bg-body">
                    <div class="">
                        <div class="table-responsive">
                        <table id="dataTable" class="table table-hover  align-items-center">
                            <thead class="table-container bg-dark text-white text-center text-uppercase fw-light fs-6  ">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Entidad Bancaria</th>
                                    <th scope="col">Número de Cuenta</th>
                                    <th scope="col">Estado </th>
                                    <th scope="col">acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articulos as $articulo)
                                <tr>
                                    {{-- <tr class="text-center"> --}}
                                        <td class="id" name="id" class="budget">{{ $articulo->id }}</td>
                                        <td name="tipo_persona" class="budget">{{ $articulo->entidad_bancaria }}</td>
                                        <td name="descripcion" class="budget">{{ $articulo->numero_cuenta }}</td>
                                        <td name="descripcion" class="budget">{{ $articulo->estado }}</td>
                                       

                                        <div class="d-flex shadow-lg justify-content-between">
                                            {{-- <td class=""> --}}
                                                <td>
                                                    <div class="d-flex justify-content-center">

                                                @can('editar-CuentasBancarias') 
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#editModal"
                                                    class="editBtn rounded btn btn-warning me-2">Editar</button>
                                                @endcan
                                                <button class="showBtn shadow btn btn-info rounded me-2" data-bs-toggle="modal"
                                                    data-bs-target="#showModal">Ver más</button>
                                                @can('borrar-CuentasBancarias')
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
                @include('admin.cuentaBancaria.editModal')
                @include('admin.cuentaBancaria.showModal')
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="js/utilities/dataTable.js"></script>
    <script src="js/cuentas_bancarias/upsert.js"></script>
@endsection
