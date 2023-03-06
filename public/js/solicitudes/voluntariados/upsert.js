$(document).ready(function () {
    
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    obtenerTiposPersona();
    $(".showBtn").click(function(e) {
        let id = $('.id').val();
        e.preventDefault();
        $('#show-modal-title').html('Información de la Persona Solicitante');
        $('#show-modal').modal('show');
        console.log(id);
        // $.ajax({
        //     type: 'GET',
        //     url: '/personas/{id}/show',
        //     data: {
        //         id: id, 
        //     },
        //     success: function (response) {
        //             $('#show_id').val(response.id);
        //             $('#show_nombre').val(response.nombre);
        //             $('#show_apellidos').val(response.apellidos);
        //             $('#show_tipo_identificacion').val(response.tipo_identificacion);
        //             $('#show_numero_identificacion').val(response.numero_identificacion);
        //             $('#show_fecha_de_nacimiento').val(response.fecha_de_nacimiento);
        //             $('#show_edad').val(response.edad);
        //             $('#show_pais').val(response.pais);
        //             $('#show_ciudad').val(response.ciudad);
        //             $('#show_calle').val(response.calle);
        //             $('#show_tipo_persona_id').val(response.tipo_persona_id);
        //         },
            
        //     error: function(error){
        //         console.log(error)
        //     }
        // });
    });
});

$(".approveBtn").click(function(e) {
    let url = '/personas/updateapprovedstatus/{id}';
    let id = $('#id').val();
    e.preventDefault();
    actualizarEstadoAprobadoPersona(id, url);
});
$(".rejectBtn").click(function(e) {
    let url = '/personas/updatearejectstatus/{id}';
    let id = $('#id').val();
    e.preventDefault();
    actualizarEstadoRechazadoPersona(id, url);
});


function obtenerTiposPersona(){
    $.ajax({
        type: 'GET',
        url: "/personas/create",
        success: function (response) {
            let select  = $('#show_tipo_persona_id')
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

function actualizarEstadoAprobadoPersona(id, url){
    $.ajax({
        type: 'POST',
        url: url,
        data: {
            id: id, 
        },
        success: function (response) {
            if (response) {
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: response.success,
                    showConfirmButton: false,
                    timer: 1400
                }).then(function(){
                    location.reload()
                });
            }
            console.log(response);
        },
        error: function(error){
            console.log(error)
        }
    });
}

function actualizarEstadoRechazadoPersona(id, url){
    Swal.fire({
        title: '¿Seguro que deseas rechazar esta solicitud?',
        text: "No se podrá revertir esta acción!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor:'#d33' ,
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Sí, Rechazar!',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'POST',
                url: url,
                data: {
                    id: id, 
                },
                success: function (response) {
                    console.log(response);
                    Swal.fire(
                        '¡Rechazada!',
                        'La solicitud ha sido rechazada correctamente.',
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
}