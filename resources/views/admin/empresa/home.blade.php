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

    <h2 class="text-center mb-5">Pagina Pricipal</h2>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form method="POST" action="{{ route('empresa.home_update') }}" enctype="multipart/form-data" >
                @csrf

                @method('PUT')

                <div class="form-group">
                    <label for="tituloHome" >Titulo Pagina:</label>
                    <input
                        class="form-control @error('tituloHome') is-invalid @enderror"
                        type="text"
                        name="tituloHome"
                        id="tituloHome"
                        value="{{ $empresa->tituloHome }}"
                    >

                    @error('tituloHome')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="sobreNosotros">Sobre Nosotros</label>
                    <textarea
                        class="form-control @error('tituloHome') is-invalid @enderror"
                        id="sobreNosotros"
                        name="sobreNosotros">{{ $empresa->sobreNosotros }}</textarea>

                        @error('sobreNosotros')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="imagenHome">Imagen Fondo</label>
                    <input
                        class="form-control @error('imagenHome') is-invalid @enderror"
                        type="file"
                        id="imagenHome"
                        name="imagenHome"
                    >

                    @error('imagenHome')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror

                    <div>
                        <p>Imagen Actual</p>
                        <img src="/storage/{{$empresa->imagenHome}}" style="width: 300px">
                    </div>
                </div>

                <div class="form-group">
                    <label for="imagenHome2">Imagen Nosotros</label>
                    <input
                        class="form-control @error('imagenHome2') is-invalid @enderror"
                        type="file"
                        id="imagenHome2"
                        name="imagenHome2"
                    >

                    @error('imagenHome2')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror

                    <div>
                        <p>Imagen Actual</p>
                        <img src="/storage/{{$empresa->imagenHome2}}" style="width: 300px">
                    </div>
                </div>

                <div class="form-group">
                    <label for="imagenFija">Fondo Fijo</label>
                    <input
                        class="form-control @error('imagenFija') is-invalid @enderror"
                        type="file"
                        id="imagenFija"
                        name="imagenFija"
                    >

                    @error('imagenFija')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror

                    <div>
                        <p>Imagen Actual</p>
                        <img src="/storage/{{$empresa->imagenFija}}" style="width: 300px">
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@stop
