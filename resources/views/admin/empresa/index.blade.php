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

    <h2 class="text-center mb-5">Informacion General</h2>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form method="POST" action="{{ route('empresa.update') }}" enctype="multipart/form-data" novalidate>
                @csrf
        
                @method('PUT')

                <div class="form-group">
                    <label for="nombreEmpresa" >Nombre Empresa:</label>
                    <input
                        class="form-control @error('nombreEmpresa') is-invalid @enderror"
                        type="text" 
                        name="nombreEmpresa"
                        id="nombreEmpresa"
                        value="{{ $empresa->nombreEmpresa }}"
                    >

                    @error('nombreEmpresa')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                
                </div>

                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input 
                        class="form-control @error('logo') is-invalid @enderror"
                        type="file"
                        id="logo"
                        name="logo"
                    >

                    @error('logo')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            
                    <div>
                        <p>Imagen Actual</p>
                        <img src="/storage/{{$empresa->logo}}" style="width: 300px">
                    </div>
                </div>

                <div class="form-group">
                    <label for="direccion" >Direccion:</label>
                    <input
                        class="form-control @error('direccion') is-invalid @enderror" 
                        type="text"
                        name="direccion"
                        id="direccion"
                        value="{{ $empresa->direccion }}"
                    >

                    @error('direccion')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="telefono" >Telefono:</label>
                    <input
                        class="form-control @error('telefono') is-invalid @enderror" 
                        type="text"
                        name="telefono"
                        id="telefono"
                        value="{{ $empresa->telefono }}"
                    >

                    @error('telefono')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="horarios" >Horarios:</label>

                    <div class="row">
                        <div class="col-sm-1 mr-4">
                            <p class="font-weight-bold">Dia</p>
                        </div>
                        
                        <div class="col-sm-4">
                            <p class="font-weight-bold">Apertura</p>
                        </div>
                        
                        <div class="col-sm-4">
                            <p class="font-weight-bold">Cierre</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-1 mr-4">
                            <p>Lunes</p>
                        </div>

                        <div class="col-sm-4">
                            <input
                            class="form-control @error('openMonday') is-invalid @enderror" 
                            type="time"
                            name="openMonday"
                            id="openMonday"
                            value="{{ $horarios[0]->open_time }}"
                        >
                        </div>

                        <div class="col-sm-4">
                            <input
                            class="form-control @error('closeMonday') is-invalid @enderror" 
                            type="time"
                            name="closeMonday"
                            id="closeMonday"
                            value="{{ $horarios[0]->close_time }}"
                        >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-1 mr-4">
                            <p>Martes</p>
                        </div>

                        <div class="col-sm-4">
                            <input
                            class="form-control @error('openTuesday') is-invalid @enderror" 
                            type="time"
                            name="openTuesday"
                            id="openTuesday"
                            value="{{ $horarios[1]->open_time }}"
                        >
                        </div>

                        <div class="col-sm-4">
                            <input
                            class="form-control @error('closeTuesday') is-invalid @enderror" 
                            type="time"
                            name="closeTuesday"
                            id="closeTuesday"
                            value="{{ $horarios[1]->close_time }}"
                        >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-1 mr-4">
                            <p>Miercoles</p>
                        </div>

                        <div class="col-sm-4">
                            <input
                            class="form-control @error('openWednesday') is-invalid @enderror" 
                            type="time"
                            name="openWednesday"
                            id="openWednesday"
                            value="{{ $horarios[2]->open_time }}"
                        >
                        </div>

                        <div class="col-sm-4">
                            <input
                            class="form-control @error('closeWednesday') is-invalid @enderror" 
                            type="time"
                            name="closeWednesday"
                            id="closeWednesday"
                            value="{{ $horarios[2]->close_time }}"
                        >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-1 mr-4">
                            <p>Jueves</p>
                        </div>

                        <div class="col-sm-4">
                            <input
                            class="form-control @error('openThursdays') is-invalid @enderror" 
                            type="time"
                            name="openThursdays"
                            id="openThursdays"
                            value="{{ $horarios[3]->open_time }}"
                        >
                        </div>

                        <div class="col-sm-4">
                            <input
                            class="form-control @error('closeThursdays') is-invalid @enderror" 
                            type="time"
                            name="closeThursdays"
                            id="closeThursdays"
                            value="{{ $horarios[3]->close_time }}"
                        >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-1 mr-4">
                            <p>Viernes</p>
                        </div>

                        <div class="col-sm-4">
                            <input
                            class="form-control @error('openFriday') is-invalid @enderror" 
                            type="time"
                            name="openFriday"
                            id="openFriday"
                            value="{{ $horarios[4]->open_time }}"
                        >
                        </div>

                        <div class="col-sm-4">
                            <input
                            class="form-control @error('closeFriday') is-invalid @enderror" 
                            type="time"
                            name="closeFriday"
                            id="closeFriday"
                            value="{{ $horarios[4]->close_time }}"
                        >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-1 mr-4">
                            <p>Sabado</p>
                        </div>

                        <div class="col-sm-4">
                            <input
                            class="form-control @error('openSaturday') is-invalid @enderror" 
                            type="time"
                            name="openSaturday"
                            id="openSaturday"
                            value="{{ $horarios[5]->open_time }}">
                        </div>
                        <div class="col-sm-4">
                            <input
                            class="form-control @error('closeSaturday') is-invalid @enderror" 
                            type="time"
                            name="closeSaturday"
                            id="closeSaturday"
                            value="{{ $horarios[5]->close_time }}"
                        >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-1 mr-4">
                            <p>Domingo</p>
                        </div>

                        <div class="col-sm-4">
                            <input
                            class="form-control @error('openSunday') is-invalid @enderror" 
                            type="time"
                            name="openSunday"
                            id="openSunday"
                            value="{{ $horarios[6]->open_time }}"
                        >
                        </div>

                        <div class="col-sm-4">
                            <input
                            class="form-control @error('closeSunday') is-invalid @enderror" 
                            type="time"
                            name="closeSunday"
                            id="closeSunday"
                            value="{{ $horarios[6]->close_time }}"
                        >
                        </div>
                    </div>


                </div>

                <div class="form-group">
                    <label for="facebook" >Facebook:</label>
                    <input 
                        class="form-control @error('facebook') is-invalid @enderror" 
                        type="text"
                        name="facebook"
                        id="facebook"
                        value="{{ $empresa->facebook }}"
                    >

                    @error('facebook')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="urlInstagram" >Instagram:</label>
                    <input
                        class="form-control @error('instagram') is-invalid @enderror" 
                        type="text"
                        name="instagram"
                        id="instagram"
                        value="{{ $empresa->instagram }}"
                    >

                    @error('instagram')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                      
            </form>
        </div>
    </div>

@stop