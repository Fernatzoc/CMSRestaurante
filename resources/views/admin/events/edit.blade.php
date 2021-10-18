@extends('adminlte::page')

@section('content')

<div class="mt-4">
    <div>
        <div>
            <div class="card">
                <div class="card-header">Editar Evento</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <form action="{{ route('events.update', $event) }}" method="POST" enctype="multipart/form-data">
                        <div>
                            <label>Titulo</label>
                            <input type="text" name="title" required value="{{ old('title', $event->title) }}"> 
                        </div>
                        <div>
                            @if($event->image)
                            <img src="{{ $event->get_image }}" alt="" height="auto" width="100px">
                            @endif  
                            <label for="image">Imagen Evento</label>
                            <input type="file" name="image">
                        </div>
                        <div>
                            <label for="description">Descripción</label>
                            <textarea name="description" id="" cols="60" rows="10" required>
                                {{ $event->description }}
                            </textarea>
                        </div>
                        <div>
                            <label for="description">Fecha</label>
                            <input type="text" name="date" required value="{{ old('date', $event->date) }}">
                        </div>
                        <div>
                            <label for="active">Activo</label>
                            <input type="checkbox" name="active"
                            @if( @$event->active == 'on' ) 
                                checked  
                            @endif 
                            >
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