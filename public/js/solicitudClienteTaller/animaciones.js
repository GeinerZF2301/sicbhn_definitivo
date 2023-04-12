$(document).ready(function () {

    if(window.location.hash) {
        // Hacer scroll hacia la sección correspondiente
        $('html, body').animate({
          scrollTop: $('#seccion-formulario').offset().top
        }, 1000);
    }

    $(".btn-scroll-registrarse").click(function () {
        $("html, body").animate(
            {
                scrollTop: $("#seccion-formulario").offset().top,
            },
            1000
        );
    });

    $(".btn-scroll").click(function () {
        $("html, body").animate(
            {
                scrollTop: $("#seccion-formulario").offset().top,
            },
            1000
        );
    });

    $(".btn-select-voluntariado").on("click", function() {
        var id = $(this).data("id");
        var nombre = $(this).data("nombre");
        $("#voluntariado_id").val(id).trigger("change");
        $("#voluntariado_id option:selected").text(nombre);
    });
    
});
