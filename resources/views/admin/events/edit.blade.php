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

                    
                    <form action="{{ route('events.update', $event) }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Titulo</label>
                            <input 
                                type="text" 
                                name="title" 
                                value="{{ old('title', $event->title) }}"
                                class="form-control @error('title') is-invalid @enderror" 
                            > 
                        </div>
                        <div class="form-group">
                            @if($event->image)
                            <label for="image">Imagen Antigua</label>
                            <div class="form-group text-center">
                                <img src="{{ $event->get_image }}" alt="" height="auto" width="50%">
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
                                rows="4" 
                                class="form-control @error('description') is-invalid @enderror" 
                            >
                                {{ $event->description }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Fecha</label>
                            <input 
                                type="text" 
                                name="date"
                                value="{{ old('date', $event->date) }}"
                                class="form-control @error('date') is-invalid @enderror" 
                            >
                        </div>
                        <div class="form-group">
                            <label for="active">Activo</label>
                            <input type="checkbox" name="active"
                            @if( @$event->active == 'on' ) 
                                checked  
                            @endif 
                            >
                        </div>
                        <div class="form-group">
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


