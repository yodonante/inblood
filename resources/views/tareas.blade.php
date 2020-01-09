<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Tareas</title>
</head>
<body>
    <table>
        <thead>
          <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Estado</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($tareas as $tarea)
          <tr>
            <td>{{$tarea->id}}</td>
            <td>{{$tarea->nombre}}</td>
            <td>{{$tarea->descripcion}}</td>
            <td>
                @if ($tarea->estado == 1)
                    Completo
                @endif
                @if ($tarea->estado == 0)
                    Pendiente
                @endif
            </td>
          </tr>
        @endforeach

        </tbody>
    </table>
</body>
</html>