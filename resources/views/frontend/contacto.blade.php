@extends('layouts.app')

@section('image-header')
<header style="background-image: url('/storage/{{$empresa->imgContacto}}');">
@endsection


@section('titulo')
    <div>
        {{$empresa->tituloContacto}}
    </div>
@endsection

@section('content')
<section class="contenedor">
    <div class="info">
        <h2>{{$empresa->telefono}}</h2>
        <h3>Dirección</h3>
        <p>{{$empresa->direccion}}</p>
    </div>

    <div class="direction">
        <div class="mapa">
            <iframe src="{{$empresa->mapa}}" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="form-contacto">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form action=" {{ route('send-email') }} " method="GET">
                <div class="name">
                    <input type="text" name="name" placeholder="Nombre" value="{{ old('name') }}">
                    <input type="text" name="lastname" placeholder="Apellido" value="{{ old('lastname') }}">
                </div>
                <input type="email" name="email" placeholder="Correo Electronico" value="{{ old('email') }}">
                <input type="number" name="number" placeholder="Telefono" value="{{ old('number') }}">
                <textarea name="msj" cols="30" rows="10" placeholder="Tu mensaje">{{ old('msj') }}</textarea>

                @csrf
                <button type="submit" class="btn-contacto">Enviar</button>
            </form>
        </div>
    </div>
</section>
@endsection