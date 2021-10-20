@extends('adminlte::page')

@section('content')


<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    CREAR PLATILLO
                    <a href="{{ route('meal.index') }}" class="btn btn-danger btn-sm mb-4 float-right">Cancelar</a>
                </div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    <form action="{{ route('meal.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input 
                                type="text" 
                                name="name"
                                class="form-control @error('name') is-invalid @enderror" 
                                value="{{ old('name') }}"
                                autofocus
                            > 
                        </div>
                        <div class="form-group">
                            <label for="image">Imagen</label>
                            <input 
                                type="file" 
                                name="image"
                                class="form-control" 
                            >
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea 
                                name="description" 
                                id="" 
                                rows="2" 
                                class="form-control @error('description') is-invalid @enderror" 
                            >
                                {{ old('description') }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Precio</label><span> Q.</span>
                            <input 
                                type="number" 
                                name="price" 
                                placeholder="100" 
                                class="form-control @error('price') is-invalid @enderror" 
                                value="{{ old('price') }}"
                            >
                            
                        </div>
                        <div class="form-group">
                            <label for="category">Categoria Platillo</label>
                            <select name="category_id" required>
                                <option value="">Seleccionar Categoria</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            @csrf
                            <input type="submit" value="Crear" class="btn btn-sm btn-primary">
                        </div>
                    </form>
                        
                
                </div>

            </div>
        </div>
    </div>
</div>


@endsection

