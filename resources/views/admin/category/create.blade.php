@extends('adminlte::page')

@section('content')

<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    CREAR CATEGORIA
                    <a href="{{ route('category.index') }}" class="btn btn-danger btn-sm mb-4 float-right">Cancelar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nombre Categoria</label>
                            <input 
                                type="text" 
                                name="name" 
                                class="form-control @error('name') is-invalid @enderror" 
                                value="{{ old('name') }}"
                                autofocus
                            > 
                        </div>
                        <div class="form-group">
                            <label for="image">Imagen Categoria</label>
                            <input 
                                type="file" 
                                name="image"
                                class="form-control @error('image') is-invalid @enderror" 
                            >
                        </div>
                        <div class="form-group">
                            <label>Sección</label>
                            <input 
                                type="number" 
                                name="section"
                                class="form-control @error('section') is-invalid @enderror" 
                            > 
                        </div>
                        <div class="form-group">
                            @csrf
                            <input 
                                type="submit" 
                                value="Crear" 
                                class="btn btn-sm btn-primary form-control mt-4"
                            >
                        </div>
                    </form>
                        

                </div>
            </div>
        </div>
    </div>
</div>

@endsection