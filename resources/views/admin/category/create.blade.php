@extends('adminlte::page')

@section('content')

<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Categoria</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                        <div>
                            <label>Nombre Categoria</label>
                            <input type="text" name="name" required> 
                        </div>
                        <div>
                            <label for="image">Imagen Categoria</label>
                            <input type="file" name="image">
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