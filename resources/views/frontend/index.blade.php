@extends('layouts.app')



@section('content')
<section class="bienvenida contenedor">
    <h1>Bienvenidos A Andrea's Cafe y Restaurante</h1>
    <div class="texto-historia">
        <div class="imagen-acercade"> <img src="https://websitedemos.net/steak-house-02/wp-content/uploads/sites/841/2021/05/about.jpg " alt=""></div>
        <div class="historia-restaurante">
            <h2>A Cerca De Nosotros</h2>
            <p> Nuestro viaje comenzó en 1985 cuando James, un amante de la carne, exploró varias recetas de todo el mundo y las reunió en nuestro menú. Desde que ahora somos un equipo de 10 chefs expertos de 3 de las principales ciudades de la India, le servimos los mejores bistecs, postres y cócteles sin alcohol de la ciudad.</p>
            <button class="btn-reservation">Book a Table</button>
        </div>
    </div>

</section>

<section class="platillos">
    <h1>Nuestras Delicias Destacadas</h1>
    <div class="listado-platillos contenedor" >
        <div class="platillo">
            <img class= "imagen"src="https://websitedemos.net/steak-house-02/wp-content/uploads/sites/841/2021/05/food-2.jpg">
            <h2>Carne de res asada al horno con vegetales  </h2>
        </div>

        <div class="platillo">
            <img src="https://websitedemos.net/steak-house-02/wp-content/uploads/sites/841/2021/05/food-1.jpg">
            <h2>Filete carbonizado con salsa BBQ</h2>
        </div>

        <div class="platillo">
            <img src="https://websitedemos.net/steak-house-02/wp-content/uploads/sites/841/2021/05/food-4.jpg">
            <h2>Costillas BBQ con verduras y papas fritas</h2>
        </div>
        <div class="platillo">
            <img src="https://websitedemos.net/steak-house-02/wp-content/uploads/sites/841/2021/05/food-3.jpg">
            <h2>Cordero Asado con patatas sazonadas</h2>
        </div>
    </div>
    <button class="btn-reservation" >Ver Menú Completo</button>
</section>

<div class="fondo-fijo inicio"> </div>

<section class="comentarios contenedor">
    <h1>Amado por muchos</h1>
    <div class="lista-comentarios">
        <p>Los mejores platillos que he distfrutado en mucho tiempo, gracias por tan buena atencion al cliente, recomendados.</p>
        <div class="fotnom">
            <div>
                <img src="https://i2-prod.birminghammail.co.uk/whats-on/food-drink-news/article11467563.ece/ALTERNATES/s1200c/steak2.jpg">
            </div>
            <h3>MArk Tomphson</h3>
        </div>
    </div>

    <div class="lista-comentarios">
        <p>Nada mejor que una tarde entre amigos, en un lugar tan agradable como este, puedo decir que disfrute cada instante y cada platillo.</p>
        <div class="fotnom">
            <div>
                <img src="https://i2-prod.birminghammail.co.uk/whats-on/food-drink-news/article11467563.ece/ALTERNATES/s1200c/steak2.jpg">
            </div>
            <h3>Lisa Ruiz</h3>
        </div>
    </div>

    <div class="lista-comentarios">
        <p>La delicadeza y la calidad en cada uno de sus platillos, de los mejores el occidente del pais, definitivamente un destino gastronomico que no puede faltar de visitar.</p>
        <div class="fotnom">
            <div>
                <img src="https://i2-prod.birminghammail.co.uk/whats-on/food-drink-news/article11467563.ece/ALTERNATES/s1200c/steak2.jpg">
            </div>
            <h3>Dick Morris</h3>
        </div>
    </div>

</section>
@endsection