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

    <h2 class="text-center mb-5">Pagina Contacto</h2>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form method="POST" action="{{ route('empresa.contacto_update') }}" enctype="multipart/form-data" >
                @csrf
        
                @method('PUT')
        
                    <div class="form-group">
                        <label for="tituloContacto" >Titulo Pagina:</label>
                        <input
                            class="form-control @error('tituloContacto') is-invalid @enderror"
                            type="text"
                            name="tituloContacto"
                            id="tituloContacto"
                            value="{{ $empresa->tituloContacto }}"
                        >
                        
                        @error('tituloContacto')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="imgContacto">Imagen Fondo</label>
                        <input
                            class="form-control @error('imgContacto') is-invalid @enderror"
                            type="file"
                            id="imgContacto"
                            name="imgContacto"
                        >
                        
                        @error('imgContacto')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                        
                        <div>
                            <p>Imagen Actual</p>
                            <img src="/storage/{{$empresa->imgContacto}}" style="width: 300px">
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
            </form>
        </div>
    </div>


@stop