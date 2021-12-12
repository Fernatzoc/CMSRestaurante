@extends('layouts.app')

@section('image-header')
<header style="background-image: url('/storage/{{$empresa->imagenHome}}');">
@endsection

@section('titulo')
    <div>
        {{$empresa->tituloHome}}
    </div>
@endsection

@section('content')

<section class="bienvenida contenedor">

    <h1>Bienvenidos A Andrea's Cafe y Restaurante</h1>
    <div class="texto-historia">
        <div class="imagen-acercade"> <img src="/storage/{{$empresa->imagenHome2}}"></div>
        <div class="historia-restaurante">
            {!! $empresa->sobreNosotros !!}
            <a class="btn-reservation btn-size-r" href="/contacto">Reservar Una Mesa</a>
        </div>
    </div>

    {{-- <livewire:events-section> --}}
    @livewire('events-section')


</section>

    {{-- <livewire:random-meals> --}}
    @livewire('random-meals')

<div style="background-image: url('/storage/{{$empresa->imagenFija}}');" class="fondo-fijo"> </div>
{{--
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
--}}
</section>
@endsection
