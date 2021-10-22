@extends('layouts.app')

@section('image-header')
    <header style="background-image: url('/storage/{{$empresa->imgConocenos}}');">
@endsection

@section('titulo')
    <div>
        {{$empresa->tituloConocenos}}
    </div>
@endsection

@section('content')
<section class="conocenos contenedor">
    <div>
        <div class="parrafouno">
            <h4>Somos chefs experimentados y apasionados que desean servirle los mejores manjares que satisfagan su paladar.</h4>
            <img src="https://websitedemos.net/steak-house-02/wp-content/uploads/sites/841/2021/05/about-img.jpg" alt="">
        </div>
        <div class="titulohistoria">
            <h2>Nuestra Historia</h2>
            <div class="nuestrahistoria">
                {!! $empresa->conocenos !!}
            </div>
        </div>
    </div>
</section>
<div class="fondo-fijo img-conocenos"></div>
@endsection