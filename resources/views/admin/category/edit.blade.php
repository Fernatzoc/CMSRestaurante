@extends('adminlte::page')

@section('content')

<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    EDITAR CATEGORIA
                    <a href="{{ route('category.index') }}" class="btn btn-danger btn-sm mb-4 float-right">Cancelar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('category.update', $category) }}" method="POST" enctype="multipart/form-data">
                    
                        <div class="form-group">
                            <label>Nombre Categoria</label>
                            <input 
                                type="text" 
                                name="name" 
                                value="{{ old('name', $category->name) }}" 
                                class="form-control @error('name') is-invalid @enderror" 
                                autofocus
                            > 
                        </div>
                        <div class="form-group">
                            @if($category->image)
                            <label for="image">Imagen Antigua</label>
                            <div class="form-group text-center">
                                <img src="{{ $category->get_image }}" alt="" height="auto" width="50%">
                            </div>
                            @endif  
                            <label for="image">Imagen Nueva</label>
                            <input
                                type="file" 
                                name="image"
                                class="form-control" 
                            >
                        </div>
                        <div class="form-group">
                            <label>Sección</label>
                            <input 
                                type="number" 
                                name="section" 
                                value="{{ old('section', $category->section) }}"
                                class="form-control @error('section') is-invalid @enderror" 
                            > 
                        </div>
                        <div class="form-group">
                            @csrf
                            @method('PUT')
                            <input 
                                type="submit" 
                                value="Actualizar" 
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