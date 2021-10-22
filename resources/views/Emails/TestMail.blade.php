<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Cliente</title>

    <style>
        body{
            background-color: #1d1922;
        }
        h2, h3 {
            color: #f89e4a;
            font-weight: normal;
            font-family: "Yeseva One", cursive;
            font-size: 20px;
            text-align: center;
        }
        span{
            color: white;
            font-weight: 700;
        }

    </style>

</head>
<body>
    
    <div class="mx-auto">
        <img src="{{ asset('storage/upload-images/logo_1.png') }}" alt="" width="100%" height="auto">

        <div class="mt-4">
            <h2>{{  $details['title'] }}</h2>

            <span>Nombre: </span><h3>{{  $details['nombre'] }}</h3>
            <span>Apellido: </span><h3>{{  $details['apellido'] }}</h3>
            <span>Correo Electronico: </span><h3>{{  $details['correo'] }}</h3>
            <span>Numero Telefonico: </span><h3>{{  $details['telefono'] }}</h3>
            <span>Mensaje:</span><h3 style="text-align: justify">{{  $details['mensaje'] }}</h3>
        </div>

    </div>


</body>
</html>