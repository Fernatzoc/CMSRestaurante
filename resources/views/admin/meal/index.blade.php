@extends('adminlte::page')

@section('content')


<div class="pt-3">
    <div>
        <div>
            <div class="card">
                <div class="card-header">
                    Platillos del Menu
                    <a href="{{ route('meal.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
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
                                <th>DESCRIPCIÓN</th>
                                <th>PRECIO</th>
                                <th>CATEGORIA</th>
                                <th>ACTIVO</th>
                                <th colspan="2">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($meals as $meal)

                                <tr>

                                    <td><strong>{{ $meal->id }}</strong></td>
                                    <td>
                                        @if($meal->image)

                                        <img src="{{ $meal->get_image }}" height="auto" width="100px" alt="imagen_meal">
                
                                        @else

                                        No hay imagen

                                        @endif
                                    </td>
                                    <td>{{ $meal->name }}</td>
                                    <td>{{ $meal->description }}</td>
                                    <td>{{ $meal->price }} Q</td>
                                    <td>
                                        @if($meal->category)
                                            {{ $meal->category->name }}
                                        @else
                                            <i class="far fa-circle" style="color:#ffc107; font-size: 18px "></i>
                                        @endif
                                    </td>
                                    <td>

                                    @if( @$meal->active == 'on' ) 
                                    <i class="fas fa-check" style="color: rgb(117, 175, 0); font-size: 18px"></i>
                                    @else
                                    <i class="far fa-circle" style="color:#ffc107; font-size: 18px "></i>
                                    @endif

                                    </td>
                                    <td>
                                        <a href="{{ route('meal.edit', $meal) }}">Editar</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('meal.destroy', $meal) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Eliminar" onclick="return confirm('Desea eliminar?')">
                                        </form>
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                    
                    <div class="mt-3">
                            {{ $meals->links('pagination::bootstrap-4') }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection