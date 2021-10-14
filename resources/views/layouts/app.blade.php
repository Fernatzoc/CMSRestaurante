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
            <a href="#"><img src="/storage/{{$empresa->logo}}" alt="logo Andrea's Cafe y Restaurante" width="50%" height="auto"></a>
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
            <li class="nav__list-item active-nav"><a href="/" class="hover-target">INICIO</a></li>
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
                <a href="#"><img src="/storage/{{$empresa->logo}}" alt="logo Andrea's Cafe y Restaurante" width="100%" height="auto"></a>
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


    {{$empresa}}

    <div class="footer-part-1">

        <div class="reservation">
            <h2>¡Estamos esperando para servirle!!</h2>
            <button class="btn-reservation" >Reservar una mesa</button>
            <h2>O Llamanos {{ $empresa->telefono }}</h2>
            <div class="menu-footer">
                <ul class="list-menu-footer" >
                    <li><a href="./index.html">Inicio</a></li>
                    <li><a href="./about.html">Conocenos</a></li>
                    <li><a href="./menu.html">Menu</a></li>
                    <li><a href="./contacto.html">Contacto</a></li>
                </ul>
            </div>
        </div>

    </div>



    <div class="footer-part-2">
        <div class="widget-1">
            <div class="location">
                <h3>Direccion</h3>
                <p>{{ $empresa->direccion }}</p>
            </div>
            <div class="follow">
                <h3>Siguenos</h3>
                <ul class="icons" >
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="widget-2">
            <img src="./assets/imgs/food-1.jpg" alt="Mesas">
        </div>
        <div class="widget-3">
            <h3>Horarios</h3>
            <p>Lunes: 11AM - 11PM</p>
            <p>Martes: 11AM - 11PM</p>
            <p>Miercoles: 11AM - 11PM</p>
            <p>Jueves: 11AM - 11PM</p>
            <p>Viernes: 11AM - 11PM</p>
            <p>Sabado: 11AM - 01AM</p>
            <p>Domingo: 11AM - 01AM</p>
        </div>
    </div>

    <div class="credits">
        <p>&copy; Copyright 2021 | Chatos</p>
    </div>

</footer>

@livewireScripts

</body>
</html>