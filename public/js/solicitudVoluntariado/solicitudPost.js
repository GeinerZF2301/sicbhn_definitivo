$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    
    $("#Enviar").html("Enviar");
    $("#nombre").val("");
    $("#apellidos").val("");
    $("#tipo_identificacion").val("");
    $("#numero_identificacion").val("");
    $("#fechaNacimiento")
        .val("")
        .on("change", function () {
            calcularEdad();
        });
    $("#edad").val("").attr("disabled", true);
    $("#pais").val("");
    $("#ciudad").val("");
    $("#calle").val("");
    $("#tipo_persona_id").val("");

    //Logica del cliente para realizar una solicitud POST al servidor y hacer un Store
    let form = $("#requestForm")[0];
    $("#saveBtn").click(function (e) {
        $("#edad").attr("disabled", false);
        e.preventDefault();
        $(".error-messages").html("");
        var formData = new FormData(form);
        console.log(formData);
        // $.ajax({
        //     url: "/personas/store",
        //     method: "POST",
        //     data: formData,
        //     contentType: false,
        //     processData: false,
        //     success: function(response) {
        //         $('.create-modal').modal('hide');
        //         if (response) {
        //             Swal.fire({
        //                 position: 'top-center',
        //                 icon: 'success',
        //                 title: response.success,
        //                 showConfirmButton: false,
        //                 timer: 1200
        //             }).then(function(){
        //                 location.reload()
        //             });
        //         }
        //         console.log(response);
        //     },
        //     error: function(error) {
        //         if (error.status === 422) {
        //             var errors = error.responseJSON.errors;
        //             console.log(errors);
        //             if (errors.hasOwnProperty("nombre")) {
        //                 $("#nombre_error").html(errors.nombre[0]);
        //             }
        //             if (errors.hasOwnProperty("apellidos")) {
        //                 $("#apellidos_error").html(errors.apellidos[0]);
        //             }
        //             if (errors.hasOwnProperty("tipo_identificacion")) {
        //                 $("#tipo_identificacion_error").html(errors.tipo_identificacion[0]);
        //             }
        //             if (errors.hasOwnProperty("numero_identificacion")) {
        //                 $("#numero_identificacion_error").html(errors.numero_identificacion[0]);
        //             }

        //             if (errors.hasOwnProperty("fecha_de_nacimiento")) {
        //                 $("#fecha_de_nacimiento_error").html(errors.fecha_de_nacimiento[0]);
        //             }
        //             if (errors.hasOwnProperty("edad")) {
        //                 $("#edad_error").html(errors.edad[0]);
        //             }
        //             if (errors.hasOwnProperty("pais")) {
        //                 $("#pais_error").html(errors.pais[0]);
        //             }
        //             if (errors.hasOwnProperty("ciudad")) {
        //                 $("#ciudad_error").html(errors.ciudad[0]);
        //             }
        //             if (errors.hasOwnProperty("calle")) {
        //                 $("#calle_error").html(errors.calle[0]);
        //             }
        //             if (errors.hasOwnProperty("edad")) {
        //                 $("#edad_error").html(errors.apellidos[0]);
        //             }
        //             if (errors.hasOwnProperty("tipo_persona_id")) {
        //                 $("#tipo_persona_id_error").html(errors.tipo_persona_id[0]);
        //             }

        //         } else {
        //             console.error(error);
        //         }
        //         console.log(error);
        //     }
        // });
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
    console.log(edad);
}
