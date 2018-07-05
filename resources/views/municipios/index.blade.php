!<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Municipios</title>
    <link rel="stylesheet" href="/css/app.css" />
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="main.js"></script>-->
</head>
<body>
    <div class="container">
        <h1>Municipios</h1>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Id departamento</th>
                            <th>Nombre Municipio</th>
                            <th>Codigo RNPN</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($municipios as $municipio)
                            <tr>
                                <td>{!! $municipio->id !!}</td>
                                <td>{!! $municipio->idDepartamento !!}</td>
                                <td>{!! $municipio->nombre !!}</td>
                                <td>{!! $municipio->codigoRnpn !!}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</body>
</html>
