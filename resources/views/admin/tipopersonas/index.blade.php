@extends('layouts.admin')

@section('content')
    <section>
        <div class="row mx-auto py-4 d-flex justify-content-center">
            <span class="mb-4 col-20">
                <h1 class="py-2 text-center text-dark mt-4 fs-2 rounded fw-bold text-uppercase">Tipos de Persona</h1>
            </span>
            <div class="row mb-5">
                <span class="fw-light fs-6">Gestion de los tipos de Persona</span>
            </div>
            <div class="row">
                <div class="d-flex justify-content-between mt-2 ">
                    <a href="categorias/create" class="btn btn-success pull-right fw-light fs-6">Crear</a>
                </div>
            </div>
            <div class="row mx-auto">
                <div class="card mt-4 rounded shadow-lg bg-white bg-body">
                    <div class="row ">
                        <table class=" table align-items-center table-ligth " class="col-2">
                            <thead class=" bg-dark text-white text-center text-uppercase fw-light fs-6  ">
                                <tr>
                                    <th scope="col">Tipo de Persona</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tipo_personas as $tipo_persona)
                                    <tr class="text-center">
                                        <td name="Nombre" class="budget">
                                            {{ $tipo_persona->tipo_persona }}
                                        </td>
                                        <td name="Descripcion" class="budget">
                                            {{ $tipo_persona->descripcion }}
                                        </td>
                                        <div class="d-flex justify-content-between">
                                            <td>
                                                <button type="submit"
                                                    class=" shadow rounded btn btn-danger">Editar</button>
                                                <a href="#"
                                                    class=" shadow btn btn-info rounded">Ver</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class=" shadow rounded btn btn-danger">Eliminar</button>
                                            </td>
                                        </div>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </section>
@endsection
