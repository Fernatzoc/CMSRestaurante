
<section class="platillos">
    <h1>Deleitate Con Nuestras Delicias</h1>

    <div class="listado-platillos contenedor" >
        @foreach($categories as $category)
        <div class="platillo">
            <img class= "imagen"src="{{ $category->get_image }}">
            <h2> {{ $category->name }}</h2>
        </div>
        @endforeach
    </div>

    <a href="/menu" class="btn-reservation btn-size-r">Ver Menú Completo</a>

</section>
