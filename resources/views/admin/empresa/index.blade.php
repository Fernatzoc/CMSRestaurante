@extends('adminlte::page')

@section('css')
@stop

@section('js')

    <script src="https://cdn.tiny.cloud/1/d2sy52ylq02xdebdayel9gkvno5mz1i7exb1yqie3mqp8e52/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
      tinymce.init({
        selector: '#conocenos'
      });

      tinymce.init({
        selector: '#sobreNosotros'
      });
    </script>

@stop

@section('content')


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
        
            <label for="logo">Logo</label>
            <input 
                type="file"
                id="logo"
                name="logo"
            >

            <div>
                <p>Imagen Actual</p>
                <img src="/storage/{{$empresa->logo}}" style="width: 300px">
            </div>


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

            <label for="tituloHome" >Titulo Pagina:</label>
            <input 
                type="text"
                name="tituloHome"
                id="tituloHome"
                value="{{ $empresa->tituloHome }}"
            >

            <label for="sobreNosotros"></label>
            <textarea id="sobreNosotros" name="sobreNosotros">{{ $empresa->sobreNosotros }}</textarea>
            
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

            <label for="tituloConocenos" >Titulo Pagina:</label>
            <input 
                type="text"
                name="tituloConocenos"
                id="tituloConocenos"
                value="{{ $empresa->tituloConocenos }}"
            >

            <label for="conocenos"></label>
            <textarea id="conocenos" name="conocenos">{{ $empresa->conocenos }}</textarea>
      
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
            
            <legend>Pagina Menu</legend>

            <label for="tituloMenu" >Titulo Pagina:</label>
            <input 
                type="text"
                name="tituloMenu"
                id="tituloMenu"
                value="{{ $empresa->tituloMenu }}"
            >

            <label for="imgMenu">Imagen Fondo</label>
            <input 
                type="file"
                id="imgMenu"
                name="imgMenu"
            >

            <div>
                <p>Imagen Actual</p>
                <img src="/storage/{{$empresa->imgMenu}}" style="width: 300px">
            </div>
      

        
        </fieldset>


        <fieldset>
            
            <legend>Pagina Contacto</legend>

            <label for="tituloContacto" >Titulo Pagina:</label>
            <input 
                type="text"
                name="tituloContacto"
                id="tituloContacto"
                value="{{ $empresa->tituloContacto }}"
            >

            <label for="imgContacto">Imagen Fondo</label>
            <input 
                type="file"
                id="imgContacto"
                name="imgContacto"
            >

            <div>
                <p>Imagen Actual</p>
                <img src="/storage/{{$empresa->imgContacto}}" style="width: 300px">
            </div>
      

        
        </fieldset>



        <button type="submit">Guardar</button>
    </form>
    


@stop