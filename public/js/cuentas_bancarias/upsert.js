$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#create-button').click(function() {
        limpiarMensagesValidacion();
        $('#create-modal-title').html('Crear nueva cuenta Bancaria');
        $('#saveBtn').html('Guardar');
        $('#entidad_bancaria').val('')
        $('#numero_cuenta').val('');
        $('#estado').val('');
    });
    //Logica del cliente para realizar una solicitud POST al servidor y hacer un Store
    var form = $('#createForm')[0];
    $('#saveBtn').click(function(e) {
        e.preventDefault();
        $('.error-messages').html('');
        var formData = new FormData(form);
        console.log(formData);
        $.ajax({
            url: "/cuentaBancaria/store",
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
                    if (errors.hasOwnProperty("entidad_bancaria")) {
                        $("#entidad_bancaria_error").html(errors.entidad_bancaria[0]);
                    }
                    if (errors.hasOwnProperty("numero_cuenta")) {
                        $("#numero_cuenta_error").html(errors.numero_cuenta[0]);
                    }
                    if (errors.hasOwnProperty("estado")) {
                        $("#estado_error").html(errors.estado[0]);
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
        $('#edit-modal-title').html('Actualizar Cuenta Bancaria');
        $('.updateBtn').html('Actualizar');
        $('#edit-modal').modal('show');
        var id = $(this).closest('tr').find('td.id').text();
        $.ajax({
            type: 'GET',
            url: "/cuentaBancaria/{id}/edit",
            data: {
                id: id, 
            },
            success: function (response) {
                $('#edit-id').val(response.id);
                $('#edit_entidad_bancaria').val(response.entidad_bancaria);
                $('#edit_numero_cuenta').val(response.numero_cuenta);
                $('#edit_estado').val(response.estado);
                
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
            url: "/cuentaBancaria/update/" + idRequest,
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
                    if (errors.hasOwnProperty("entidad_bancaria")) {
                        $("#edit_entidad_bancaria_error").html(errors.entidad_bancaria[0]);
                    }
                    if (errors.hasOwnProperty("numero_cuenta")) {
                        $("#edit_numero_cuenta_error").html(errors.numero_cuenta[0]);
                    }
                    if (errors.hasOwnProperty("estado")) {
                        $("#edit_estado_error").html(errors.estado[0]);
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
            title: '¿Estás seguro?',
            text: "No se podrá revertir esta acción!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor:'#d33' ,
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, Eliminar!',
            cancelButtonText: 'Cancelar'
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "DELETE",
                    url: "/cuentaBancaria/delete/" + id,
                    data:  id,
                    success: function (response) {
                        console.log(response);
                        Swal.fire(
                            '¡Eliminado!',
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
        $('#show-modal-title').html('Información del Tipo de Persona');
        $('#show-modal').modal('show');
        var id = $(this).closest('tr').find('td.id').text();
        console.log(id);
        $.ajax({
            type: 'GET',
            url: "/cuentaBancaria/{id}/show",
            data: {
                id: id, 
            },
            success: function (response) {
                $('#show_id').val(response.id);
                $('#show_entidad_bancaria').val(response.entidad_bancaria);
                $('#show_numero_cuenta').val(response.numero_cuenta);
                $('#show_estado').val(response.estado);
                
            },
            error: function(error){
                console.log(error)
            }
        });
    });


});

function limpiarMensagesValidacion() {
    $(".error-messages").text("");
}