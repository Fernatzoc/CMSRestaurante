@extends('adminlte::page')

@section('content')

<div class="pt-4">
    <div>
        <div>
            <div class="card">
                <div class="card-header">Crear Platillo</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('meal.store') }}" method="POST" enctype="multipart/form-data">
                        <div>
                            <label>Nombre</label>
                            <input type="text" name="name" required> 
                        </div>
                        <div>
                            <label for="image">Imagen</label>
                            <input type="file" name="image" required>
                        </div>
                        <div>
                            <label for="description">Descripción</label>
                            <input type="text" name="description" required>
                        </div>
                        <div>
                            <label for="price">Precio</label>
                            <input type="text" name="price" placeholder="100" required>
                            <span>.Q</span>
                        </div>
                        <div>
                            <label for="category">Categoria Platillo</label>
                            <select name="category_id" required>
                                <option value="">Seleccionar Categoria</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
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