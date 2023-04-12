$(document).ready(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var method = 'create';
    obtenerPersonasDonantes(method);
   
    //Peticion o solicitud POST para calcular la edad de la Persona
   
    $('#create-button').click(function() {
        limpiarMensagesValidacion()
        let method = 'create';
        $('#create-modal-title').html('Crear un Registro de Donacion Monetaria');
        $('#saveBtn').html('Guardar');
        $('#fecha_donacion').val('')
        $('#fecha_recibido').val('');
        $('#monto').val('');
        $('#persona_donante_id').val('');
    });

    //Logica del cliente para realizar una solicitud POST al servidor y hacer un Store
    var form = $('#createForm')[0];
    $('#saveBtn').click(function(e) {
        e.preventDefault();
        $('.error-messages').html('');
        var formData = new FormData(form);
        $.ajax({
            url: "/donacionMonetaria/store",
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
                console.log(response);
            },
            error: function(error) {
                if (error.status === 422) {
                    var errors = error.responseJSON.errors;
                    console.log(errors);
                    if (errors.hasOwnProperty("fecha_donacion")) {
                        $("#fecha_donacion_error").html(errors.fecha_donacion[0]);
                    }
                    if (errors.hasOwnProperty("fecha_recibido")) {
                        $("#fecha_recibido_error").html(errors.fecha_recibido[0]);
                    }
                    if (errors.hasOwnProperty("descripcion")) {
                        $("#descripcion_error").html(errors.descripcion[0]);
                    }
                    if (errors.hasOwnProperty("numero_identificacion")) {
                        $("#numero_identificacion_error").html(errors.numero_identificacion[0]);
                    }
                   
                    if (errors.hasOwnProperty("fecha_de_nacimiento")) {
                        $("#fecha_de_nacimiento_error").html(errors.fecha_de_nacimiento[0]);
                    }
                    if (errors.hasOwnProperty("monto")) {
                        $("#monto_error").html(errors.monto[0]);
                    }
                    if (errors.hasOwnProperty("persona_donante_id")) {
                        $("#persona_donante_id_error").html(errors.persona_donante_id[0]);
                    }  

                } else {
                    console.error(error);
                }
                console.log(error);
            }
        });
    });
    
    let editMethod = 'edit';
    obtenerPersonasDonantes(editMethod);
// Logica del cliente que realiza un GET para el metodo Edit Tipo Persona
    $(".editBtn").click(function(e) {
        let url = "/donacionMonetaria/{id}/edit";
        let method = 'edit';
        e.preventDefault();
        $('#edit-modal-title').html('Actualizar Donacion');
        $('.updateBtn').html('Actualizar');
        $('#edit-modal').modal('show');
        var id = $(this).closest('tr').find('td.id').text();
        obtenerRegistroPorId(url, id, method);
    });

//Logica del cliente que realiza una peticion POST al servidor para realizar un Update del registro
    var editform = $('#editForm')[0]
    $('.updateBtn').click(function(e){
        $('#edit_edad').attr('disabled', false);
        e.preventDefault();
        $('.error-messages').html('');
        let formEdit = new FormData(editform);
        var idRequest = formEdit.get('id');
        $.ajax({
            type: "POST",
            url: "/donacionMonetaria/update/" + idRequest,
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
                // 'fecha_donacion',
                // 'fecha_recibido',
                // 'descripcion',
                // 'monto',
                // 'persona_donante_id'
            },
            error: function(error) {
                if (error.status === 422) {
                    var errors = error.responseJSON.errors;
                    console.log(errors);
                    if (errors.hasOwnProperty("entidad_bancaria")) {
                        $("#edit_entidad_bancaria_error").html(errors.entidad_bancaria[0]);
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
                    url: "/donacionMonetaria/delete/" + id,
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

    showMethod = 'show';
    obtenerPersonasDonantes(showMethod);
    //Logica del cliente que realiza una solicitud GET al servidor para el metodo show
    $(".showBtn").click(function(e) {
        e.preventDefault();
        let url = "/donacionMonetaria/{id}/show";
        let method = 'show';
        let id = $(this).closest('tr').find('td.id').text();
        $('#show-modal-title').html('Información de la donacion');
        $('#show-modal').modal('show');
        obtenerRegistroPorId(url, id, method);
    });


});
function obtenerRegistroPorId(url, id, method){
    $.ajax({
        type: 'GET',
        url: url,
        data: {
            id: id, 
        },
        success: function (response) {
            if(method === 'edit'){
                $('#edit_id').val(response.id);
                $('#edit_fecha_donacion').val(response.fecha_donacion);
                $('#edit_fecha_recibido').val(response.fecha_recibido);
                $('#edit_descripcion').val(response.descripcion);
                $('#edit_monto').val(response.monto);
                $('#edit_persona_donante_id').val(response.persona_donante_id);
            }else{
                $('#show_id').val(response.id);
                $('#show_fecha_donacion').val(response.fecha_donacion);
                $('#show_fecha_recibido').val(response.fecha_recibido);
                $('#show_descripcion').val(response.descripcion);
                $('#show_monto').val(response.monto);
                $('#show_persona_donante_id').val(response.persona_donante_id);
            }
        },
        error: function(error){
            console.log(error)
        }
    });
}

 //Peticion o solicitud GET para obtener los tipos de persona

//Peticion o solicitud GET para el metodo Edit
function obtenerPersonasDonantes(method){
    let select = '';
    let option = '';
    $.ajax({
        type: 'GET',
        url: "/donacionMonetaria/create",
        success: function (response) {
            if(method === 'create'){
                select  = $('#persona_donante_id')
                $.each(response, function(index,item){
                option = $('<option></option').attr('value', item.id).text(item.nombre + ' ' + item.apellidos);
                    $(select).append(option);
                }); 
            }
            else if(method === 'edit'){
                select  = $('#edit_persona_donante_id')
                $.each(response, function(index,item){
                    option = $('<option></option').attr('value', item.id).text(item.nombre + ' ' + item.apellidos);
                    $(select).append(option);
                }); 
            }
            else{
                select  = $('#show_persona_donante_id')
                $.each(response, function(index,item){
                    option = $('<option></option').attr('value', item.id).text(item.nombre + ' ' + item.apellidos);
                    $(select).append(option);
                }); 
            }
        },
        error: function(error){
            console.log(error)
        }
    });
}

function limpiarMensagesValidacion() {
    $(".error-messages").text("");
}