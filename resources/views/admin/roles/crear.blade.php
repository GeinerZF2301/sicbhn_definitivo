@extends('layouts.admin')

@section('content')
    <div class="row mx-auto py-4 d-flex justify-content-center">
        <span class="mb-4 col-20">
            <h1 class="py-2 text-center text-dark mt-4 fs-2 rounded fw-bold text-uppercase">Creacion de roles del
                Corredor
                Biológico</h1>
        </span>

        @if ($errors->any())
            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                <strong>|Llene todos los campos!</strong>
                @foreach ($errors->all() as $error)
                    <span class="badge badge-danger">Error</span>
                @endforeach
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="">Nombre del Rol:</label>
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="">Permisos para este Rol:</label>
                    <br />
                    <div class=" row  py-8 mx-auto d-flex justify-content-center">
                        @foreach ($permission as $value)
                            <div class="col-2">

                                <label>{{ Form::checkbox('permission[]', $value->id, false, ['class' => 'name']) }}
                                    {{ $value->name }}</label>
                                <br />

                            </div>
                        @endforeach
                        <div class="col-2">

                            <input type="checkbox" name="select-all" id="select-all" />
                            <label for="">Seleccionar todos los permisos</label>

                        </div>
                    </div>


                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="/roles" class="btn btn-danger">Cancelar</a>
        {!! Form::close() !!}
    </div>
@endsection

@section('js')
    <script>
        // Listen for click on toggle checkbox
        $('#select-all').click(function(event) {
            if (this.checked) {
                // Iterate each checkbox
                $(':checkbox').each(function() {
                    this.checked = true;
                });
            } else {
                $(':checkbox').each(function() {
                    this.checked = false;
                });
            }
        });
    </script>
@endsection
