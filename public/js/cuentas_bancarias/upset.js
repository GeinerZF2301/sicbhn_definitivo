$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#create-button').click(function() {
        $('#create-modal-title').html('Crear Tipo de Persona');
        $('#saveBtn').html('Guardar');
        $('#tipo_persona').val('')
        $('#descripcion').val('');
    });
    //Logica del cliente para realizar una solicitud POST al servidor y hacer un Store
    var form = $('#createForm')[0];
    $('#saveBtn').click(function(e) {
        e.preventDefault();
        $('.error-messages').html('');
        var formData = new FormData(form);
        console.log(formData);
        $.ajax({
            url: "/tipospersonas/store",
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $('.create-modal').modal('hide');
                if (response) {
                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: response.success,
                        showConfirmButton: false,
                        timer: 1200
                    }).then(function(){
                        location.reload()
                    });
                }
            },
            error: function(error) {
                if (error.status === 422) {
                    var errors = error.responseJSON.errors;
                    console.log(errors);
                    if (errors.hasOwnProperty("tipo_persona")) {
                        $("#tipo_persona_error").html(errors.tipo_persona[0]);
                    }
                    if (errors.hasOwnProperty("descripcion")) {
                        $("#descripcion_error").html(errors.descripcion[0]);
                    }
                } else {
                    console.error(error);
                }
            }
        });
    });

// Logica del cliente que realiza un GET para el metodo Edit Tipo Persona
    $(".editBtn").click(function(e) {
        e.preventDefault();
        $('#edit-modal-title').html('Actualizar Tipo Persona');
        $('.updateBtn').html('Actualizar');
        $('#edit-modal').modal('show');
        var id = $(this).closest('tr').find('td.id').text();
        $.ajax({
            type: 'GET',
            url: "/tipospersonas/{id}/edit",
            data: {
                id: id, 
            },
            success: function (response) {
                $('#edit-id').val(response.id);
                $('#edit_tipo_persona').val(response.tipo_persona);
                $('#edit_descripcion').val(response.descripcion);
                
            },
            error: function(error){
                console.log(error)
            }
        });
    });

//Logica del cliente que realiza una peticion POST al servidor para realizar un Update del registro
    var editform = $('#editForm')[0]
    $('.updateBtn').click(function(e){
        e.preventDefault();
        $('.error-messages').html('');
        let formEdit = new FormData(editform);
        let idRequest = formEdit.get('id');
        console.log(idRequest);
        $.ajax({
            type: "POST",
            url: "/tipospersonas/update/" + idRequest,
            data: formEdit,
            processData: false,
            contentType: false,
            success: function (response) {
                $('.edit-modal').modal('hide');
                if (response) {
                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: response.success,
                        showConfirmButton: false,
                        timer: 1200
                    }).then(function(){
                        location.reload()
                    });
                }
            },
            error: function(error) {
                if (error.status === 422) {
                    var errors = error.responseJSON.errors;
                    console.log(errors);
                    if (errors.hasOwnProperty("tipo_persona")) {
                        $("#edit_tipo_persona_error").html(errors.tipo_persona[0]);
                    }
                    if (errors.hasOwnProperty("descripcion")) {
                        $("#edit_descripcion_error").html(errors.descripcion[0]);
                    }
                } else {
                    console.error(error);
                }
            }
        });
    });
    //Logica del cliente que realiza una solicitud DELETE al servidor
    $('.deleteBtn').click(function(e){
        e.preventDefault();
        let id = $(this).closest('tr').find('td.id').text(); //Obtiene al id de una columna
        Swal.fire({
            title: '??Est??s seguro?',
            text: "No se podr?? revertir esta acci??n!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor:'#d33' ,
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'S??, Eliminar!',
            cancelButtonText: 'Cancelar'
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "DELETE",
                    url: "/tipospersonas/delete/" + id,
                    data:  id,
                    success: function (response) {
                        console.log(response);
                        Swal.fire(
                            '??Eliminado!',
                            'El registro ha sido eliminado correctamente.',
                            'success'
                        ).then(function(){
                            location.reload()
                        });
                    },
                    error: function(error){
                        console.log(error);
                    }
                });              
            }
          })
    });

    //Logica del cliente que realiza una solicitud GET al servidor para el metodo show
    $(".showBtn").click(function(e) {
        e.preventDefault();
        $('#show-modal-title').html('Informaci??n del Tipo de Persona');
        $('#show-modal').modal('show');
        var id = $(this).closest('tr').find('td.id').text();
        console.log(id);
        $.ajax({
            type: 'GET',
            url: "/tipospersonas/{id}/show",
            data: {
                id: id, 
            },
            success: function (response) {
                $('#show_id').val(id);
                $('#show_tipo_persona').val(response.tipo_persona);
                $('#show_descripcion').val(response.descripcion);
                
            },
            error: function(error){
                console.log(error)
            }
        });
    });


});