
<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Personas del CBHN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    
    <table class="table table-bordered">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Número de identificación</th>
            <th scope="col">Edad</th>
            <th scope="col">Tipo de persona</th>
        </tr>
        @foreach($Persona as $persona)
        <tr>

            <td class="id" name="id" class="budget">{{ $persona->id }}</td>
            <td name="tipo_persona" class="budget">{{ $persona->nombre }}</td>
            <td name="descripcion" class="budget">{{ $persona->apellidos }}</td>
            <td name="numero_identificacion" class="budget"> {{ $persona->numero_identificacion }}</td>
            <td name="edad" class="budget">{{ $persona->edad }}</td>
            <td name="numero_identificacion" class="budget"> {{ $persona->tipo_persona_id_tipo_persona}}</td>
            
        </tr>
        @endforeach
    </table>
  
</body>
</html>
