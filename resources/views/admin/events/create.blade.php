@extends('adminlte::page')

@section('content')


<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    CREAR EVENTO
                    <a href="{{ route('events.index') }}" class="btn btn-danger btn-sm mb-4 float-right">Cancelar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Titulo</label>
                            <input 
                                type="text" 
                                name="title" 
                                class="form-control @error('title') is-invalid @enderror" 
                                value="{{ old('name') }}"
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
                            <label for="price">Fecha</label>
                            <input 
                                type="text" 
                                name="date" 
                                class="form-control @error('date') is-invalid @enderror" 
                                value="{{ old('date') }}"
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



