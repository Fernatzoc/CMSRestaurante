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
        <h2>5874 2485</h2>
        <h3>Address</h3>
        <p>1234 N Spring st, Los Angeles, CA 90012</p>
    </div>

    <div class="direction">
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19869.00031624347!2d-0.130197!3d51.501748!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4291f3172409ea92!2sOjo%20de%20Londres!5e0!3m2!1ses-419!2sus!4v1630741898520!5m2!1ses-419!2sus" allowfullscreen="" loading="lazy"></iframe>
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