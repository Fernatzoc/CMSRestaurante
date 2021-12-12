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
            <h4>{!! $empresa->parrafoConocenos !!}</h4>
            <img src="/storage/{{$empresa->imgConocenos2}}" >
        </div>
        <div class="titulohistoria">
            <h2>Nuestra Historia</h2>
            <div class="nuestrahistoria">
                {!! $empresa->conocenos !!}
            </div>
        </div>
    </div>
</section>
<div style="background-image: url('/storage/{{$empresa->imagenFija2}}');" class="fondo-fijo"> </div>
@endsection
