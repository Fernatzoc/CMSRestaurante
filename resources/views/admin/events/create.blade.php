@extends('adminlte::page')

@section('content')

<div class="pt-4">
    <div>
        <div>
            <div class="card">
                <div class="card-header">Crear Evento</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                        <div>
                            <label>Titulo</label>
                            <input type="text" name="title" required> 
                        </div>
                        <div>
                            <label for="image">Imagen</label>
                            <input type="file" name="image">
                        </div>
                        <div>
                            <label for="description">Descripción</label>
                            <textarea name="description" id="" cols="60" rows="10" required></textarea>
                        </div>
                        <div>
                            <label for="price">Fecha</label>
                            <input type="text" name="date" required>
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