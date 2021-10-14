@extends('layouts.app')

@section('image-header')
<header style="background-image: url('/storage/{{$empresa->imgMenu}}');">
@endsection

@section('titulo')
    <div>
        {{$empresa->tituloMenu}}
    </div>
@endsection

@section('content')
<section class="contenedor">

    <livewire:menu-section>

</section>
@endsection