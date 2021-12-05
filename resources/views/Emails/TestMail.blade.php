<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Andrea's Cafe y Restaurante</title>

    <style>
        html {
            box-sizing: border-box;
            font-size: 62.5%;
        }
        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        body {
            font-size: 1.6rem;
            line-height: 2;
        }

        /** GLOBALES **/
        .container {
            margin: 0 auto;
            max-width: 120rem;
            width: 90%;
            width: min(90%, 120rem);
        }

        .content {
            margin: 25px;
        }

        .banner {
            background-color: #2d2d2d;
            width: 100%;
        }

        .banner h1 {
            text-align: center;
            font-size: 30px;
            line-height: 1;
            color: #fff;
            padding: 25px;
        }

        @media (min-width: 768px) {
            .head-email {
                background-color: #f8f9fa;
                margin: 0 auto;
                padding: 15px;
                width: 65%;
                padding-bottom: 30px;
            }
        }

        .head-email {
            padding-bottom: 30px;
        }

        .head-email h2 {
            font-size: 22px;
        }

        .head-email h3 {
            margin: 0;
            padding: 0;
            font-weight: normal;
            font-size: 20px;
        }

        .title {
            font-size: 20px;
            font-weight: bold;
        }

        a {
            text-decoration: none !important;
        }


        .links a {
            background-color: #ff912a !important;
            border-radius: 10px !important;
            font-size: 20px !important;
            color: white !important;
            display: block !important;
            font-weight: bold !important;
            margin: 10px auto !important;
            padding: 5px 25px !important;
            text-align: center !important;
            text-decoration: none !important;
            width: 90% !important;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="mx-auto">
        <div class="content">
            <div class="banner">
                <h1>Andrea's Cafe y Restaurante</h1>
            </div>

            <div class="head-email">
                <h2>Hola, tienes un nuevo mensaje de:</h2>

                <h3>{{ $details['nombre'] . ' ' . $details['apellido']}}</h3>

                <span class="title">Correo Electronico: </span>
                <h3>{{ $details['correo'] }}</h3>

                <span class="title">Número de teléfono: </span>
                <h3>{{ $details['telefono'] }}</h3>

                <span class="title">Mensaje:</span>

                <h3>{{ $details['mensaje'] }}</h3>

                <div class="links">
                    <a href={{ "mailto:" . $details['correo'] }}>Responder Por Correo</a>
                    <a href= {{"https://wa.me/502" . $details['telefono'] }}>Responder Por WhatsApp</a>
                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>
