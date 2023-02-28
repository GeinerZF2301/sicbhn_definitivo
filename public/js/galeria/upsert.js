$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    //Peticion o solicitud POST para calcular la edad de la Persona

    $("#create-button").click(function () {
        let method = "create";
        $("#create-modal-title").html("Crear un imagen");
        $("#saveBtn").html("Guardar");
        limpiarMensagesValidacion();
        $("#nombre")
            .val("")
            .on("change", function () {
                limpiarMensagesValidacion();
            });
        $("#descripcion").val("");
        $("#estado").val("");
        
        $("#categoria_imagen")
        .val("")
        .on("change", function () {
            limpiarMensagesValidacion();
        });

        $("#file")
        .val("")
        .on("change", function () {
            limpiarMensagesValidacion();
        });

    });
   
    //Logica del cliente para realizar una solicitud POST al servidor y hacer un Store
    var form = $("#createForm")[0];
    $("#saveBtn").click(function (e) {
        e.preventDefault();
        $(".error-messages").text("");
        var formData = new FormData(form);
        e.preventDefault();
        $.ajax({
            url: "/galeriaimagenes/store",
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
                    if (errors.hasOwnProperty("estado")) {
                        $("#estado_error").html(errors.estado[0]);
                    }
                    if (errors.hasOwnProperty("categoria_imagen")) {
                        $("#categoria_imagen_error").html(errors.categoria_imagen[0]);
                    }
                    if (errors.hasOwnProperty("file")) {
                        $("#file_error").html(errors.file[0]);
                    }
                    } else {
                        console.log(error.responseJSON.error);
                    }
            },
        });
    });

    // Logica del cliente que realiza un GET para el metodo Edit Tipo Persona
    $(".editBtn").click(function (e) {
        let url = '/galeriaimagenes/{id}/edit';
        e.preventDefault();
        $("#edit-modal-title").html("Actualizar Imagen");
        $(".updateBtn").html("Actualizar");
        limpiarMensagesValidacion();
        $("#edit_nombre")
            .val("")
            .on("change", function () {
                limpiarMensagesValidacion();
            });
        $("#edit_descripcion").val("");
        $("#edit_estado").val("");
        $("#edit_categoria_imagen").val("");
        $("#edit_file")
            .val("")
            .on("change", function () {
                limpiarMensagesValidacion();
            });
        $("#edit-modal").modal("show");
        var id = $(this).closest("tr").find("td.id").text();
        obtenerRegistroPorId(url, id );
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
            url: '/imagens/update/'+ idRequest,
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
                    if (errors.hasOwnProperty("estado")) {
                        $("#edit_estado_error").html(errors.estado[0]);
                    }
                    if (errors.hasOwnProperty("categoria_imagen")) {
                        $("#edit_categoria_imagen_error").html(errors.categoria_imagen[0]);
                    }
                    if (errors.hasOwnProperty("file")) {
                        $("#edit_file_error").html(errors.file[0]);
                    }
                    } else {
                        console.log(error.responseJSON.error);
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
                url: "/imagens/delete/" + id,
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

function obtenerRegistroPorId(url, id) {
    $.ajax({
        type: "GET",
        url: url,
        data: {
            id: id,
        },
        success: function (response) {
            $("#edit_id").val(response.id);
            $("#edit_nombre").val(response.nombre);
            $("#edit_descripcion").val(response.descripcion);
            $("#edit_estado").val(response.estado);
            $("#edit_categoria_imagen").val(response.categoria_imagen);
            $("#nombre_archivo").text(response.file);
            $("#edit_file").attr('value', response.file);
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        },
    });
}


function limpiarMensagesValidacion() {
    $(".error-messages").text("");
    $("#validacion_error").text("");
    $(".success-mesages").text("");
}
