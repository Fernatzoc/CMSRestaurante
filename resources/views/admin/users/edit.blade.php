@extends('adminlte::page')

@section('content')

    <h2 class="text-center mb-5">Editar Usuario</h2>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ $user->name }}" autofocus>
                </div>

                <div class="form-group">
                    <label for="email">Correo</label>
                    <input class="form-control" type="email" name="email" value="{{$user->email}}" id="email">
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Nueva Contraseña">
                </div>
        
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>                    
        
             </form>
        </div>
    </div>

@stop