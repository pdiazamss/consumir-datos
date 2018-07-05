!<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Personas</title>
    <link rel="stylesheet" href="/css/app.css" />
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="main.js"></script>-->
</head>
<body>
    <div class="container">
        <h1>Personas</h1>

                <table class="table">
                    <thead>
                        <tr>
                            <th>DUI</th>
                            <th>NOMBRE</th>
                            <th>APELLIDO</th>
                            <th>FECHA DE NACIMIENTO</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($datos as $dato)
                        @foreach($dato as $persona)
                            <tr>
                                <td>{!! $persona->dui !!}</td>
                                <td>{!! $persona->nombre !!}</td>
                                <td>{!! $persona->apellido !!}</td>
                                <td>{!! $persona->fechaNacimiento !!}</td>
                            </tr>
                        @endforeach
                      @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</body>
</html>
