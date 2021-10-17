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

    <h2 class="text-center mb-5">Pagina Conocenos</h2>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form method="POST" action="{{ route('empresa.conocenos_update') }}" enctype="multipart/form-data" >
                @csrf
        
                @method('PUT')
        
                    <div class="form-group">
                        <label for="tituloConocenos" >Titulo Pagina:</label>
                        <input 
                            class="form-control @error('tituloConocenos') is-invalid @enderror"
                            type="text"
                            name="tituloConocenos"
                            id="tituloConocenos"
                            value="{{ $empresa->tituloConocenos }}"
                        >

                        @error('tituloConocenos')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
        
                    <div class="form-group">
                        <label for="conocenos">Conocenos</label>
                        <textarea
                        class="form-control @error('conocenos') is-invalid @enderror"
                        id="conocenos" 
                        name="conocenos">{{ $empresa->conocenos }}</textarea>

                        @error('conocenos')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror

                    </div>
        
                    <div class="form-group">
                        <label for="imgConocenos">Imagen Fondo</label>
                        <input
                            class="form-control @error('conocenos') is-invalid @enderror"
                            type="file"
                            id="imgConocenos"
                            name="imgConocenos"
                        >

                        @error('imgConocenos')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror

                        <div>
                            <p>Imagen Actual</p>
                            <img src="/storage/{{$empresa->imgConocenos}}" style="width: 300px">
                        </div>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                
            </form>
        </div>
    </div>


@stop