<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" href="./assets/imgs/logo_1.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    @livewireStyles

</head>

<body>


<div class="cd-header">
    <div class="icono_menu_movil">
        <div class="">
            <a href="/"><img src="/storage/{{$empresa->logo}}" alt="logo Andrea's Cafe y Restaurante" width="50%" height="auto"></a>
        </div>
        <div class="">
            <div class="menu-icon hover-target">
                <span class="menu-icon__line menu-icon__line-left"></span>
                <span class="menu-icon__line"></span>
                <span class="menu-icon__line menu-icon__line-right"></span>
            </div>
        </div>
    </div>
</div>

<div class="nav">
    <div class="nav__content">
        <ul class="nav__list">
            <li class="nav__list-item"><a href="/" class="hover-target">INICIO</a></li>
            <li class="nav__list-item"><a href="/conocenos" class="hover-target">CONOCENOS</a></li>
            <li class="nav__list-item"><a href="/menu" class="hover-target">MENU</a></li>
            <li class="nav__list-item"><a href="/contacto" class="hover-target">CONTACTANOS</a></li>
        </ul>
    </div>
</div>



<div class='cursor' id="cursor"></div>
<div class='cursor2' id="cursor2"></div>
<div class='cursor3' id="cursor3"></div>


    @yield('image-header')
    <div class="filtro"></div>
    <div class="degradado"></div>
    <div>
        <div class="logo_navegacion">

            <div class="logo">
                <a href="/"><img src="/storage/{{$empresa->logo}}" alt="logo Andrea's Cafe y Restaurante" width="100%" height="auto"></a>
            </div>


            <div class="navegacion_carrito_desktop carrito_movil">
                <nav>
                    <ul>
                        <li><a href="/">INICIO</a></li>
                        <li><a href="/conocenos">CONOCENOS</a></li>
                        <li><a href="/menu">MENU</a></li>
                        <li><a href="/contacto">CONTACTANOS</a></li>
                    </ul>
                </nav>
                <div class="carrito">
                    {{-- <img src="assets/icons/fontawesomePRO/cart.svg" alt="cart" width="30%" height="auto"> --}}
                </div>
            </div>

        </div>
        <div class="titulo_baner">
            @yield('titulo')
        </div>
    </div>
</header>


    <main>
        @yield('content')
    </main>


<footer class="footer contenedor">


    <div class="footer-part-1">

        <div class="reservation">
            <h2>¡Estamos esperando para servirle!!</h2>
            <a class="btn-reservation btn-size-r" href="/contacto">Reservar una mesa</a>
            <h2 class="mb-5">O Llamanos {{ $empresa->telefono }}</h2>
            <div class="menu-footer">
                <ul class="list-menu-footer" >
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/conocenos">Conocenos</a></li>
                    <li><a href="/menu">Menu</a></li>
                    <li><a href="/contacto">Contacto</a></li>
                </ul>
            </div>
        </div>

    </div>



    <div class="footer-part-2">
        <div class="widget-1">
            <div class="location">
                <h3>Dirección</h3>
                <p>{{ $empresa->direccion }}</p>
            </div>
            <div class="follow">
                <h3>Síguenos</h3>
                <ul class="icons" >
                    <li><a href="{{ $empresa->facebook }}" target="_blank" rel="noopener"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                    <li><a href="{{ $empresa->instagram }}" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="widget-2">
            <img src="/storage/{{$empresa->imgFooter}}">
        </div>

        @php
            $open = [];
            for ($i = 0; $i < 7; $i++) {
                array_push($open, date('h:i a', strtotime($horarios[$i]->open_time)));
            }

            $close = [];
            for ($i = 0; $i < 7; $i++) {
                array_push($close, date('h:i a', strtotime($horarios[$i]->close_time)));
            }
        @endphp


        <div class="widget-3">
            <h3 class="mb-4">Horarios</h3>
            <p>Lunes:  {{$open[0]}}  -  {{$close[0]}}</p>
            <p>Martes: {{$open[1]}}  -  {{$close[1]}}</p>
            <p>Miercoles: {{$open[2]}}  -  {{$close[2]}}</p>
            <p>Jueves: {{$open[3]}}  -  {{$close[3]}}</p>
            <p>Viernes: {{$open[4]}}  - {{$close[4]}}</p>
            <p>Sábado: {{$open[5]}}  -  {{$close[5]}}</p>
            <p>Domingo: {{$open[6]}}  - {{$close[6]}}</p>

        </div>
    </div>

    <div class="credits">
        <p>&copy; Copyright {{now()->year}} | Chatos</p>
    </div>

    <a class="ir-arriba"  javascript:void(0) title="Volver arriba">
        <span class="fa-stack">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
        </span>
    </a>

</footer>

<script src="{{ asset('js/header_movil.js') }}"></script>
@livewireScripts

</body>
</html>