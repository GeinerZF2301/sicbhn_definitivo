$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    //Peticion o solicitud POST para calcular la edad de la Persona

    $("#create-button").click(function () {
        let method = "create";
        $("#create-modal-title").html("Crear una campaña");
        $("#saveBtn").html("Guardar");
        limpiarMensagesValidacion();
        $("#nombre")
            .val("")
            .on("change", function () {
                limpiarMensagesValidacion();
            });
        $("#descripcion").val("");
        $("#ubicacion").val("");
        $("#fecha")
            .val("")
            .on("change", function () {
                limpiarMensagesValidacion();
            });
        $("#hora")
            .val("")
            .on("change", function () {
                validarCampanna(method);
                limpiarMensagesValidacion();
            });
        $('#otroInput').val(" ");
        $("#tipo_campaña").val("");
        $("#estado").val("");
    });

    $('#tipo_campaña').on("change", function(){
        if($(this).val() == "otro"){
            $('#otroInput').show();           
        }else{
            $('#otroInput').hide();
        }
    });

    $('#otroBtn').on('click', function(e){
        e.preventDefault();
        let otroInput = $('#otro_tipo').val();
        let nuevaOpcion = $('<option>', {
            value: otroInput,
            text: otroInput,
            selected: true
        });
        $('#tipo_campaña').append(nuevaOpcion);
        $('#otro_tipo').val(' ');
        $('#otro_tipo').hide();
    });
     
    //Logica del cliente para realizar una solicitud POST al servidor y hacer un Store
    var form = $("#createForm")[0];
    $("#saveBtn").click(function (e) {
        e.preventDefault();
        $(".error-messages").text("");
        var formData = new FormData(form);
        e.preventDefault();
        $.ajax({
            url: "/campannas/store",
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                $(".create-modal").modal("hide");
                if (response) {
                    Swal.fire({
                        position: "top-center",
                        icon: "success",
                        title: response.success,
                        showConfirmButton: false,
                        timer: 1200,
                    }).then(function () {
                        location.reload();
                    });
                }
                console.log(response);
            },
            error: function (error) {
                if (error.status === 422) {
                    var errors = error.responseJSON.errors;
                    console.log(errors);
                    if (errors.hasOwnProperty("nombre")) {
                        $("#nombre_error").html(errors.nombre[0]);
                    }
                    if (errors.hasOwnProperty("descripcion")) {
                        $("#descripcion_error").html(errors.descripcion[0]);
                    }
                    if (errors.hasOwnProperty("ubicacion")) {
                        $("#ubicacion_error").html(errors.ubicacion[0]);
                    }
                    if (errors.hasOwnProperty("fecha")) {
                        $("#fecha_error").html(errors.fecha[0]);
                    }
                    if (errors.hasOwnProperty("hora")) {
                        $("#hora_error").html(errors.hora[0]);
                    }
                    if (errors.hasOwnProperty("tipo_campaña")) {
                        $("#tipo_campaña_error").html(errors.tipo_campaña[0]);
                    }
                    if (errors.hasOwnProperty("estado")) {
                        $("#estado_error").html(errors.estado[0]);
                    }
                } else {
                    console.log(error.responseJSON.error);
                    $("#validacion_error").text(error.responseJSON.error);
                }
            },
        });
    });
    // Logica del cliente que realiza un GET para el metodo Edit Tipo Persona
    $(".editBtn").click(function (e) {
        let url = '/campannas/{id}/edit';
        let method = "edit";
        e.preventDefault();
        $("#edit-modal-title").html("Actualizar Campaña");
        $(".updateBtn").html("Actualizar");
        limpiarMensagesValidacion();
        $("#edit_nombre")
            .val("")
            .on("change", function () {
                limpiarMensagesValidacion();
            });
        $("#edit_descripcion").val("");
        $("#edit_ubicacion").val("");
        $("#edit_fecha")
            .val("")
            .on("change", function () {
                limpiarMensagesValidacion();
            });
        $("#edit_hora")
            .val("")
            .on("change", function () {
                validarCampanna(method);
                limpiarMensagesValidacion();
            });
        $("#edit_tipo_campaña").val("");
        $("#edit_estado").val("");
        $("#edit-modal").modal("show");
        var id = $(this).closest("tr").find("td.id").text();
        obtenerRegistroPorId(url, id, method);
    });

    //Logica del cliente que realiza una peticion POST al servidor para realizar un Update del registro
    var editform = $("#editForm")[0];
    $(".updateBtn").click(function (e) {
        e.preventDefault();
        $(".error-messages").html("");
        let formEdit = new FormData(editform);
        var idRequest = formEdit.get("id");
        $.ajax({
            type: "POST",
            url: '/campannas/update/'+ idRequest,
            data: formEdit,
            processData: false,
            contentType: false,
            success: function (response) {
                $(".edit-modal").modal("hide");
                if (response) {
                    Swal.fire({
                        position: "top-center",
                        icon: "success",
                        title: response.success,
                        showConfirmButton: false,
                        timer: 1200,
                    }).then(function () {
                        location.reload();
                    });
                }
            },
            error: function (error) {
                if (error.status === 422) {
                    var errors = error.responseJSON.errors;
                    console.log(errors);
                    if (errors.hasOwnProperty("nombre")) {
                        $("#edit_nombre_error").html(errors.nombre[0]);
                    }
                    if (errors.hasOwnProperty("descripcion")) {
                        $("#edit_descripcion_error").html(errors.descripcion[0]);
                    }
                    if (errors.hasOwnProperty("ubicacion")) {
                        $("#edit_ubicacion_error").html(errors.ubicacion[0]);
                    }
                    if (errors.hasOwnProperty("fecha")) {
                        $("#edit_fecha_error").html(errors.fecha[0]);
                    }
                    if (errors.hasOwnProperty("hora")) {
                        $("#edit_hora_error").html(errors.hora[0]);
                    }
                    if (errors.hasOwnProperty("tipo_campaña")) {
                        $("#edit_tipo_campaña_error").html(errors.tipo_campaña[0]);
                    }
                    if (errors.hasOwnProperty("estado")) {
                        $("#edit_estado_error").html(errors.estado[0]);
                    }
                    } else {
                        console.log(error.responseJSON.error);
                        $("#edit_validacion_error").text(error.responseJSON.error);
                    }
            },
        });
    });
});
//Logica del cliente que realiza una solicitud DELETE al servidor
$(".deleteBtn").click(function (e) {
    e.preventDefault();
    let id = $(this).closest("tr").find("td.id").text(); //Obtiene al id de una columna
    Swal.fire({
        title: "¿Estás seguro?",
        text: "No se podrá revertir esta acción!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Sí, Eliminar!",
        cancelButtonText: "Cancelar",
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "DELETE",
                url: "/campannas/delete/" + id,
                data: id,
                success: function (response) {
                    console.log(response);
                    Swal.fire(
                        "¡Eliminado!",
                        "El registro ha sido eliminado correctamente.",
                        "success"
                    ).then(function () {
                        location.reload();
                    });
                },
                error: function (error) {
                    console.log(error);
                },
            });
        }
    });
});

//Logica del cliente que realiza una solicitud GET al servidor para el metodo show
$(".showBtn").click(function (e) {
    e.preventDefault();
    let url = "/campannas/{id}/show";
    let method = "show";
    let id = $(this).closest("tr").find("td.id").text();
    $("#show-modal-title").html("Información de la Campaña");
    $("#show-modal").modal("show");
    obtenerRegistroPorId(url, id, method);
});

function obtenerRegistroPorId(url, id, method) {
    $.ajax({
        type: "GET",
        url: url,
        data: {
            id: id,
        },
        success: function (response) {
            if (method === "edit") {
                $("#edit_id").val(response.id);
                $("#edit_nombre").val(response.nombre);
                $("#edit_descripcion").val(response.descripcion);
                $("#edit_ubicacion").val(response.ubicacion);
                $("#edit_fecha").val(response.fecha);
                $("#edit_hora").val(response.hora);
                $("#edit_tipo_campaña").val(response.tipo_campaña);
                $("#edit_estado").val(response.estado);
                console.log(response);
            } else {
                $("#show_id").val(response.id);
                $("#show_nombre").val(response.nombre);
                $("#show_descripcion").val(response.descripcion);
                $("#show_ubicacion").val(response.ubicacion);
                $("#show_fecha").val(response.fecha);
                $("#show_hora").val(response.hora);
                $("#show_tipo_campaña").val(response.tipo_campaña);
                $("#show_estado").val(response.estado);
            }
        },
        error: function (error) {
            console.log(error);
        },
    });
}

function validarCampanna(method) {
    let id = null;
    let fecha = null;
    let hora = null;
    if (method === "create") {
        id = $('#id').val();
        fecha = $("#fecha").val();
        hora = $("#hora").val();
    } else {
        id = $('#edit_id').val();
        fecha = $("#edit_fecha").val();
        hora = $("#edit_hora").val();
    }
    $.ajax({
        type: "POST",
        url: "/validarcampanna",
        data: {
            id: id,
            fecha: fecha,
            hora: hora,
        },
        success: function (response) {
            if (response.success) {
            // Si la respuesta es de éxito, muestra un mensaje indicando que la fecha y hora están disponibles
                console.log(response.success);
                $("#validacion_success").text(response.success);
                $("#edit_validacion_success").text(response.success);
            }
        },
        error: function (error) {
            if (error.status === 422) {
                console.log(error.responseJSON.error);
                $("#validacion_error").text(error.responseJSON.error);
                $("#edit_validacion_error").text(error.responseJSON.error);
            } else {
                console.log("Error desconocido:", error);
            }
        },
    });
}

function limpiarMensagesValidacion() {
    $(".error-messages").text("");
    $("#validacion_error").text("");
    $(".success-mesages").text("");
}
