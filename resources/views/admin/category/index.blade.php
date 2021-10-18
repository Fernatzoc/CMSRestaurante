@extends('adminlte::page')

@section('content')

<div class="pt-3">
    <div>
        <div>
            <div class="card">
                <div class="card-header">
                    Categorias del Menu
                    <a href="{{ route('category.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>IMAGEN</th>
                                <th>NOMBRE</th>
                                <th>SECCIÓN</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)

                                <tr>

                                    <td><strong>{{ $category->id }}</strong></td>
                                    <td>
                                        @if($category->image)

                                        <img src="{{ $category->get_image }}" height="auto" width="100px" alt="imagen_category">
                
                                        @else

                                        No hay imagen

                                        @endif
                                    </td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->section }}</td>
                                    <td class="d-flex ">
                                        <a href="{{ route('category.edit', $category) }}" class="btn btn-warning mr-2"><i class="far fa-edit"></i></a>
                                        <form action="{{ route('category.destroy', $category) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit" onclick="return confirm('Desea eliminar?')">
                                                <i class="fas fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                    
                    <div class="mt-3">
                            {{ $categories->links('pagination::bootstrap-4') }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection