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
        <h2>Teléfono: {{$empresa->telefono}}</h2>
        <h3>Dirección</h3>
        <p>{{$empresa->direccion}}</p>
    </div>

    <div class="direction">
        <div class="mapa">
            <iframe src="{{$empresa->mapa}}" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="form-contacto">

            @if (session('status'))
                <div class="alert alert-success" role="alert" style="font-size: 16px" >
                    {{ session('status') }}
                </div>
            @endif

            <form action=" {{ route('send-email') }} " method="GET">
                <div class="name-group">

                    <div class="name">
                        <input
                            type="text" 
                            name="nombre" 
                            placeholder="Nombre" 
                            value="{{ old('nombre') }}">

                        @error('nombre')
                        <span class="invalid-feedback d-block h-100" role="alert">
                            <strong class="error-f">{{$message}}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="lastname">
                        <input
                            type="text" 
                            name="apellido" 
                            placeholder="Apellido" 
                            value="{{ old('apellido') }}">

                        @error('apellido')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong class="error-f">{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    
                </div>

                <div>
                    <input 
                        type="email" 
                        name="correo" 
                        placeholder="Correo Electronico" 
                        value="{{ old('correo') }}">

                    @error('correo')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong class="error-f">{{$message}}</strong>
                    </span>
                    @enderror

                </div>

                <div>
                    <input 
                        type="number" 
                        name="telefono" 
                        placeholder="Telefono" 
                        value="{{ old('telefono') }}">

                    @error('telefono')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong class="error-f">{{$message}}</strong>
                    </span>
                    @enderror

                </div>

                <div>
                    <textarea 
                        name="mensaje" 
                        cols="30" 
                        rows="10" 
                        placeholder="Tu mensaje">{{ old('mensaje') }}</textarea>

                    @error('mensaje')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong class="error-f">{{$message}}</strong>
                    </span>
                    @enderror
                    
                </div>


                @csrf
                <button type="submit" class="btn-contacto">Enviar</button>
            </form>
        </div>
    </div>
</section>
@endsection