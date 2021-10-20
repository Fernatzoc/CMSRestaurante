@extends('adminlte::page')

@section('content')



<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    EDITAR PLATILLO
                    <a href="{{ route('meal.index') }}" class="btn btn-danger btn-sm mb-4 float-right">Cancelar</a>
                </div>

                            
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <form action="{{ route('meal.update', $meal) }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input 
                                type="text" 
                                name="name" 
                                required value="{{ old('name', $meal->name) }}"
                                class="form-control @error('name') is-invalid @enderror" 
                            > 
                        </div>
                        <div class="form-group">
                            @if($meal->image)
                            <label for="image">Imagen Antigua</label>
                            <div class="form-group text-center">
                                <img src="{{ $meal->get_image }}" alt="" height="auto" width="50%">
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
                            <label for="description">Descripción</label>
                            <textarea 
                                name="description" 
                                id=""                                 
                                rows="2" 
                                class="form-control" 
                            >
                                {{ old('description', $meal->description) }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Precio</label>
                            <input type="text" name="price" placeholder="100" required value="{{ old('price', $meal->price) }}">
                            <span>.Q</span>
                        </div>
                        <div class="form-group">
                            <label for="active">Activo</label>
                            <input 
                                type="checkbox" 
                                name="active"

                            @if( @$meal->active == 'on' ) 
                                checked  
                            @endif 
                            >
                        </div>
                        <div class="form-group">
                            <label for="category">Categoria Platillo</label>
                            <select 
                                name="category_id"
                                class="form-control" 
                            >

                                @if($meal->category)
                                <option value="{{ $meal->category->id }}"> {{ $meal->category->name }} </option>
                                @else
                                <option value=""></option>
                                @endif
                                @foreach($categories as $category)
                                
                                        @continue( @$category->id == @$meal->category->id )

                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            @csrf
                            @method('put')
                            <input type="submit" value="Actualizar" class="btn btn-sm btn-primary form-control mt-4">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

