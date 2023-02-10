<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href={{asset('css/admin-styles.css')}}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
</head>
<body>
    <div class="button-container">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Crear Tipo de Persona
        </button>
    </div>
    <div class="contenedor">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form id="ajaxForm">
                @csrf
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-title"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Tipo de Persona</label>
                                <input type="text" class="form-control" name="tipo_persona" id="tipo_persona"
                                    placeholder="Escriba el tipo de persona">
                                <span id="typeError" class="text-danger"></span>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Descripcion</label>
                                <input type="text" class="form-control" name="descripcion" id="descripcion"
                                    placeholder="Escriba una pequeña descripción">
                                <span id="descriptionError" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" id="saveBtn" class="btn btn-primary"></button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>

   
</body>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#modal-title').html('Crear Tipo de Persona')
    $('#saveBtn').html('Guardar tipo de Persona')

    var form = $('#ajaxForm')[0];

    $('#saveBtn').click(function() {
        var formData = new FormData(form);
        $.ajax({
            url: "{{ route('tipospersonas.store') }}",
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                console.log(response.success);
            },
            error: function(error) {
                if (error.status === 422) {
                    var errors = error.responseJSON.errors;
                    console.log(errors);
                    if (errors.hasOwnProperty("name")) {
                        $("#typeError").html(errors.tipo_persona[0]);
                    }
                    if (errors.hasOwnProperty("description")) {
                        $("#descriptionError").html(errors.descripcion[0]);
                    }
                } else {
                    console.error(error);
                }
            }
        });
    });
});
</script>
</html>
   