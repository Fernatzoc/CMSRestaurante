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
            <h4>Winners of international cooking competitions, James and Steve are the co-founders and head chefs at Steak House. We are experienced and passionate chefs wanting to serve you the best delicacies that will satisfy your taste buds.</h4>
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