@extends('adminlte::page')

@section('content')

    <h2 class="text-center mb-5">Nuevo Usuario</h2>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input class="form-control" type="text" name="name" id="name" autofocus>
                </div>

                <div class="form-group">
                    <label for="email">Correo</label>
                    <input class="form-control" type="email" name="email" id="email">
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
        
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>                    
        
             </form>
        </div>
    </div>

@stop