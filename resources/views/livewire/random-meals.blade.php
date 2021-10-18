
<section class="platillos">   
    <h1>Deleitate Con Nuestras Delicias</h1>

    <div class="listado-platillos contenedor" >
        @foreach($meals as $meal)
        <div class="platillo">
            <img class= "imagen"src="{{ $meal->get_image }}">
            <h2> {{ $meal->name }}</h2>
        </div>
        @endforeach
    </div>
    
    <button class="btn-reservation" >Ver Menú Completo</button>

</section>