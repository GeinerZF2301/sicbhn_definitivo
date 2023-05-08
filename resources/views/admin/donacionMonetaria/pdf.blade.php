<!DOCTYPE html>
<html>

<head>
    <title>Reporte de Personas del CBHN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <p style="position: absolute;  top: -20; right:30; width: 10px; height: 10px;">{{ $date }}</p>
    <div class="title1">Sistema de Información Corredor Biológico Hojancha Nandayure</div>
    <div class="title2">REPORTE DE GESTIÓN DE PERSONAS</div>
    <img src="zoofari/img/LogoCorredor.jpg" style="position: absolute;  top: -20; left: 0; width: 100px; height: 100px;">
    <br>

    <table class="table table-bordered">
        <thead class="prueba">
            <tr>
                <th style="width: 10%">N°</th>
                <th style="width: 30%">Nombre del Donante</th>
                <th style="width: 20%">Fecha de Donacion</th>
                <th style="width: 20%">Monto</th>
                <th style="width: 20%">Fecha de Donacion Ingresada</th>
                
            </tr>
        </thead>
        @foreach ($monetarios as $donacion)
            <tr>

                <td style="width: 10%" class="id" name="id" class="budget">{{ $donacion->id }}</td>
                <td style="width: 30%" name="nombre" class="budget">{{ $donacion->nombre }}</td>
                <td style="width: 20%" name="fecha_donacion" class="budget">{{ $donacion->fecha_donacion }}</td>
                <td style="width: 20%" name="monto" class="budget">
                    {{ $donacion->monto }}</td>
                <td style="width: 20%" name="fecha_recibido" class="budget">{{ $donacion->fecha_recibido }}</td>
            </tr>
        @endforeach
    </table>
    <div class="footer">
        <p>Página <span class="pagenum"></span></p>
    </div>
</body>

</html>

<style>
    .title1 {
        font-family: Helvetica;
        font-size: 21px;
        font-weight: normal;
        color: rgb(0, 174, 0);
        text-align: center;
    }

    .title2 {
        font-family: Arial;
        font-size: 16px;
        font-weight: bold;
        color: rgb(255, 191, 0);
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        font-size: 12px;
        background-color: #ffffff;
        color;
        border-color;
        font-family;
    }

    table .prueba {
        background-color: #40df19;
        font-family: Helvetica;
        font-size: 13px;
        font-weight: normal;
        color: #ffffff;
        text-align: center;
    }

    td,
    th {
        word-wrap: break-word;
        max-width: 200px;
        /* ajusta el valor según tus necesidades */
        padding: 5px;
        /* text-align: left; */
        vertical-align: top;
        /* border: 1px solid #000; */
        text-align: center;
        /* centrar el contenido horizontalmente */
        vertical-align: middle;
        /* centrar el contenido verticalmente */
    }

    .footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        text-align: center;
        font-size: 10px;
    }

    .pagenum:before {
        content: counter(page);
    }

    @page {
        margin: 1cm;
        counter-reset: page;
    }
</style>
