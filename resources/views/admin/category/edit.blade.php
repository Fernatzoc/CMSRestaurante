@extends('adminlte::page')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Categoria</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <form action="{{ route('category.update', $category) }}" method="POST" enctype="multipart/form-data">
                    
                        <div>
                            <label>Nombre Categoria</label>
                            <input type="text" name="name" value="{{ old('name', $category->name) }}" required> 
                        </div>
                        <div>
                            @if($category->image)
                            <img src="{{ $category->get_image }}" alt="" height="auto" width="100px">
                            @endif  
                            <label for="image">Imagen Categoria</label>
                            <input type="file" name="image">
                        </div>
                        <div>
                            <label>Sección</label>
                            <input type="text" name="section" value="{{ old('section', $category->section) }}" required> 
                        </div>
                        <div>
                            @csrf
                            @method('PUT')
                            <input type="submit" value="Actualizar" class="btn btn-sm btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection