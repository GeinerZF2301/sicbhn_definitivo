$(document).ready(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let method = 'create';
    obtenerTiposPersona(method);
   
    //Peticion o solicitud POST para calcular la edad de la Persona
   
    $('#create-button').click(function() {
        let method = 'create';
        $('#create-modal-title').html('Crear un Registro de Persona');
        $('#saveBtn').html('Guardar');
        $('#nombre').val('')
        $('#apellidos').val('');
        $('#tipo_identificacion').val('');
        $('#numero_identificacion').val('');
        $('#fecha_de_nacimiento').val('').on('change', function(){
            calcularEdad(method);
        });
        $('#edad').val('').attr('disabled', true);
        $('#pais').val('');
        $('#ciudad').val('');
        $('#calle').val('');
        $('#tipo_persona_id').val('');
    });

  
    //Logica del cliente para realizar una solicitud POST al servidor y hacer un Store
    var form = $('#createForm')[0];
    $('#saveBtn').click(function(e) {
        $('#edad').attr('disabled', false);
        e.preventDefault();
        $('.error-messages').html('');
        var formData = new FormData(form);
        $.ajax({
            url: "/personas/store",
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
                    if (errors.hasOwnProperty("nombre")) {
                        $("#nombre_error").html(errors.nombre[0]);
                    }
                    if (errors.hasOwnProperty("apellidos")) {
                        $("#apellidos_error").html(errors.apellidos[0]);
                    }
                    if (errors.hasOwnProperty("tipo_identificacion")) {
                        $("#tipo_identificacion_error").html(errors.tipo_identificacion[0]);
                    }
                    if (errors.hasOwnProperty("numero_identificacion")) {
                        $("#numero_identificacion_error").html(errors.numero_identificacion[0]);
                    }
                   
                    if (errors.hasOwnProperty("fecha_de_nacimiento")) {
                        $("#fecha_de_nacimiento_error").html(errors.fecha_de_nacimiento[0]);
                    }
                    if (errors.hasOwnProperty("edad")) {
                        $("#edad_error").html(errors.edad[0]);
                    }
                    if (errors.hasOwnProperty("pais")) {
                        $("#pais_error").html(errors.pais[0]);
                    }
                    if (errors.hasOwnProperty("ciudad")) {
                        $("#ciudad_error").html(errors.ciudad[0]);
                    }
                    if (errors.hasOwnProperty("calle")) {
                        $("#calle_error").html(errors.calle[0]);
                    }
                    if (errors.hasOwnProperty("edad")) {
                        $("#edad_error").html(errors.apellidos[0]);
                    }
                    if (errors.hasOwnProperty("tipo_persona_id")) {
                        $("#tipo_persona_id_error").html(errors.tipo_persona_id[0]);
                    }

                } else {
                    console.error(error);
                }
                console.log(error);
            }
        });
    });
    
    let editMethod = 'edit';
    obtenerTiposPersona(editMethod);
// Logica del cliente que realiza un GET para el metodo Edit Tipo Persona
    $(".editBtn").click(function(e) {
        let url = "/personas/{id}/edit";
        let method = 'edit';
        $('#edit_edad').val('').attr('disabled', true);
        e.preventDefault();
        $('#edit-modal-title').html('Actualizar Persona');
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
            url: "/personas/update/" + idRequest,
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
                    url: "/personas/delete/" + id,
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

    method = 'show';
    obtenerTiposPersona(method);
    //Logica del cliente que realiza una solicitud GET al servidor para el metodo show
    $(".showBtn").click(function(e) {
        e.preventDefault();
        let url = "/personas/{id}/show";
        let method = 'show';
        let id = $(this).closest('tr').find('td.id').text();
        $('#show-modal-title').html('Información del Tipo de Persona');
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
                $('#edit_nombre').val(response.nombre);
                $('#edit_apellidos').val(response.apellidos);
                $('#edit_tipo_identificacion').val(response.tipo_identificacion);
                $('#edit_numero_identificacion').val(response.numero_identificacion);
                $('#edit_fecha_de_nacimiento').val(response.fecha_de_nacimiento).on('change', function(){
                    calcularEdad(method);
                });
                $('#edit_edad').val(response.edad);
                $('#edit_pais').val(response.pais);
                $('#edit_ciudad').val(response.ciudad);
                $('#edit_calle').val(response.calle);
                $('#edit_tipo_persona_id').val(response.tipo_persona_id);
        
            }else{
                $('#show_id').val(response.id);
                $('#show_nombre').val(response.nombre);
                $('#show_apellidos').val(response.apellidos);
                $('#show_tipo_identificacion').val(response.tipo_identificacion);
                $('#show_numero_identificacion').val(response.numero_identificacion);
                $('#show_fecha_de_nacimiento').val(response.fecha_de_nacimiento).on('change', function(){
                    calcularEdad(method);
                });
                $('#show_edad').val(response.edad);
                $('#show_pais').val(response.pais);
                $('#show_ciudad').val(response.ciudad);
                $('#show_calle').val(response.calle);
                $('#show_tipo_persona_id').val(response.tipo_persona_id);
            }
        },
        error: function(error){
            console.log(error)
        }
    });
}

 //Peticion o solicitud GET para obtener los tipos de persona
function obtenerTiposPersonaCreate(){
    $.ajax({
        type: 'GET',
        url: "/personas/create",
        success: function (response) {
            let select  = $('#tipo_persona_id')
            $.each(response, function(index,item){
            let option = $('<option></option').attr('value', item.id).text(item.tipo_persona)
                $(select).append(option);
            }); 
        },
        error: function(error){
            console.log(error)
        }
    });
}
//Peticion o solicitud GET para el metodo Edit
function obtenerTiposPersona(method){
    let select = '';
    let option = '';
    $.ajax({
        type: 'GET',
        url: "/personas/create",
        success: function (response) {
            if(method === 'create'){
                select  = $('#tipo_persona_id')
                $.each(response, function(index,item){
                option = $('<option></option').attr('value', item.id).text(item.tipo_persona)
                    $(select).append(option);
                }); 
            }
            else if(method === 'edit'){
                select  = $('#edit_tipo_persona_id')
                $.each(response, function(index,item){
                option = $('<option></option').attr('value', item.id).text(item.tipo_persona)
                    $(select).append(option);
                }); 
            }
            else{
                select  = $('#show_tipo_persona_id')
                $.each(response, function(index,item){
                option = $('<option></option').attr('value', item.id).text(item.tipo_persona)
                    $(select).append(option);
                }); 
            }
        },
        error: function(error){
            console.log(error)
        }
    });
}
function calcularEdad(method){
    let fechaNacimiento = '';
    let edadInput = '';
        if(method.toLowerCase() === 'create'){
            fechaNacimiento = moment($('#fecha_de_nacimiento').val(), 'YYYY-MM-DD');
            edadInput = $('#edad'); 
        }
        else{
            fechaNacimiento = moment($('#edit_fecha_de_nacimiento').val(), 'YYYY-MM-DD');
            edadInput = $('#edit_edad'); 
        }
    let edad = moment().diff(fechaNacimiento, 'years');
        if(edad < 0){
            edad = 0;
        }
    $(edadInput).val(edad);    
}
