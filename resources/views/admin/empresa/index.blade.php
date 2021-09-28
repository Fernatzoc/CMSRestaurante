@extends('adminlte::page')


@section('content')


    {{ $empresa }}

    <form method="POST" action="{{ route('empresa.update') }}">
        @csrf

        @method('PUT')

        <label for="nombreEmpresa" >Nombre Empresa:</label>
        <input 
            type="text" 
            name="nombreEmpresa"
            id="nombreEmpresa"
            value="{{ $empresa->nombreEmpresa }}"
        >
    
        <label for="direccion" >Direccion:</label>
        <input 
            type="text"
            name="direccion"
            id="direccion"
            value="{{ $empresa->direccion }}"
        >
    
        <label for="telefono" >Telefono:</label>
        <input 
            type="text"
            name="telefono"
            id="telefono"
            value="{{ $empresa->telefono }}"
        >
    
        <label for="facebook" >Facebook:</label>
        <input 
            type="text"
            name="facebook"
            id="facebook"
            value="{{ $empresa->facebook }}"
        >
    
        <label for="urlInstagram" >Instagram:</label>
        <input 
            type="text"
            name="instagram"
            id="instagram"
            value="{{ $empresa->instagram }}"
        >

        <button type="submit">Guardar</button>
    </form>
    


@stop