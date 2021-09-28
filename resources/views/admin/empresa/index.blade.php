@extends('adminlte::page')


@section('content')


    {{ $empresa }}

    <form method="POST" action="{{ route('empresa.update') }}" enctype="multipart/form-data" >
        @csrf

        @method('PUT')

        <fieldset>
            
            <legend>Informacion General</legend>
      
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
        
        </fieldset>
      

        <fieldset>
            
            <legend>Pagina de Inicio</legend>
            
            <label for="imagenHome">Imagen Fondo</label>
            <input 
                type="file"
                id="imagenHome"
                name="imagenHome"
            >

            <div>
                <p>Imagen Actual</p>
                <img src="/storage/{{$empresa->imagenHome}}" style="width: 300px">
            </div>

        
        </fieldset>


        <fieldset>
            
            <legend>Pagina Conocenos</legend>
      
            <label for="imgConocenos">Imagen Fondo</label>
            <input 
                type="file"
                id="imgConocenos"
                name="imgConocenos"
            >

            <div>
                <p>Imagen Actual</p>
                <img src="/storage/{{$empresa->imgConocenos}}" style="width: 300px">
            </div>

        
        </fieldset>


        <fieldset>
            
            <legend>Informacion General</legend>
      

        
        </fieldset>


        <fieldset>
            
            <legend>Informacion General</legend>
      

        
        </fieldset>



        <button type="submit">Guardar</button>
    </form>
    


@stop