@extends('adminlte::page')

@section('content')

<div class="mt-4">
    <div>
        <div>
            <div class="card">
                <div class="card-header">Editar Categoria</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <form action="{{ route('meal.update', $meal) }}" method="POST" enctype="multipart/form-data">
                        <div>
                            <label>Nombre</label>
                            <input type="text" name="name" required value="{{ old('name', $meal->name) }}"> 
                        </div>
                        <div>
                            @if($meal->image)
                            <img src="{{ $meal->get_image }}" alt="" height="auto" width="100px">
                            @endif  
                            <label for="image">Imagen Platillo</label>
                            <input type="file" name="image">
                        </div>
                        <div>
                            <label for="description">Descripción</label>
                            <input type="text" name="description" required value="{{ old('description', $meal->description) }}">
                        </div>
                        <div>
                            <label for="price">Precio</label>
                            <input type="text" name="price" placeholder="100" required value="{{ old('price', $meal->price) }}">
                            <span>.Q</span>
                        </div>
                        <div>
                            <label for="active">Activo</label>
                            <input type="checkbox" name="active"
                            @if( @$meal->active == 'on' ) 
                                checked  
                            @endif 
                            >
                        </div>
                        <div>
                            <label for="category">Categoria Platillo</label>
                            <select name="category_id" required>
                                <option value="{{ $meal->category->id }}"> {{ $meal->category->name }} </option>
                                @foreach($categories as $category)
                                
                                        @continue( @$category->id == @$meal->category->id )

                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            @csrf
                            @method('put')
                            <input type="submit" value="Actualizar" class="btn btn-sm btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection