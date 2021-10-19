@extends('adminlte::page')

@section('content')

    <h2 class="text-center mb-5">Nuevo Usuario</h2>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="col-12 text-left pl-0">
                    <a href="{{ route('users.index') }}" class="btn btn-danger btn-sm mb-4">Cancelar</a>
                </div>

                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input 
                        class="form-control @error('name') is-invalid @enderror" 
                        type="text" 
                        name="name" 
                        value="{{old('name')}}"
                        id="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="email">Correo</label>
                    <input 
                        class="form-control @error('name') is-invalid @enderror"
                        type="email" 
                        name="email"
                        value="{{old('email')}}"
                        id="email">

                        @error('email')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input 
                        class="form-control @error('name') is-invalid @enderror" 
                        type="password" 
                        name="password" 
                        id="password">

                        @error('password')
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