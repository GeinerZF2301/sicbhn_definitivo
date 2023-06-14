$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    limpiarInputs();
    //Logica del cliente para realizar una solicitud POST al servidor y hacer un Store
    let form = $("#requestForm")[0];
    $("#Enviar").click(function (e) {
        $("#edad").attr("disabled", false);
        $("#estado").val('Pendiente');
        e.preventDefault();
        $(".error-messages").html("");
        var formData = new FormData(form);
        console.log(formData);
        $.ajax({
            url: "/solicitud/nuevoparticipantetaller",
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                Swal.fire({
                    icon: 'success',
                    padding: '4rem',
                    confirmButtonText: 'Aceptar',
                    confirmButtonColor: '#4CAF50',
                    title: response.success,
                    text: 'Gracias por inscribirte. Tu solicitud será revisada por nuestros administradores.',
                    footer: 'Serás notificado al correo electronico que proporcionaste, con la respuesta a tu solicitud.',
                    showClass: {
                      popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                      popup: 'animate__animated animate__fadeOutUp'
                    }
                  }).then(function(){
                    limpiarInputs();
                    window.location.href = '/';
                  });
                  
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
                    if (errors.hasOwnProperty("tipo_persona_id")) {
                        $("#tipo_persona_id_error").html(errors.tipo_persona_id[0]);
                    }
                    if (errors.hasOwnProperty("taller_id")) {
                        $("#taller_id_error").html(errors.taller_id[0]);
                    }
                    } else {
                        console.error(error);
                    }
                    limpiarInputsMensageValidacion();
            }
            
        });
        
    });
});

function calcularEdad() {
    let fechaNacimiento = "";
    let edadInput = "";

    fechaNacimiento = moment($("#fechaNacimiento").val(), "YYYY-MM-DD");
    edadInput = $("#edad");
    let edad = moment().diff(fechaNacimiento, "years");
    if (edad < 0) {
        edad = 0;
    }
     $(edadInput).val(edad);
}
function limpiarInputs(){
    $("#Enviar").html("Enviar");
    $("#nombre").val("");
    $("#apellidos").val("");
    $("#tipoIdentificacion").val("");
    $("#numeroIdentificacion").val("");
    $("#fechaNacimiento")
        .val("")
        .on("change", function () {
            calcularEdad();
        });
    $("#edad").val("").attr("disabled", true);
    $("#pais").val("");
    $("#ciudad").val("");
    $("#calle").val("");
    $("#voluntariado_id").val("");
}

function limpiarMensagesValidacion() {
    $(".error-messages").text("");
    $(".success-mesages").text("");
}

function limpiarInputsMensageValidacion(){
    $("#nombre").on('change', function(){
        limpiarMensagesValidacion()
    });
    $("#apellidos").on('change', function(){
        limpiarMensagesValidacion()
    });
    $("#tipoIdentificacion").on('change', function(){
        limpiarMensagesValidacion()
    });;
    $("#numeroIdentificacion").on('change', function(){
        limpiarMensagesValidacion()
    });
    $("#fechaNacimiento").on('change', function(){
        limpiarMensagesValidacion()
    });
    $("#edad").on('change', function(){
        limpiarMensagesValidacion()
    });
    $("#pais").on('change', function(){
        limpiarMensagesValidacion()
    });
    $("#ciudad").on('change', function(){
        limpiarMensagesValidacion()
    });
    $("#voluntariado_id").on('change', function(){
        limpiarMensagesValidacion()
    });
}