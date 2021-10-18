@extends('adminlte::page')

@section('content')

<div class="pt-3">
    <div>
        <div>
            <div class="card">
                <div class="card-header">
                    Eventos
                    <a href="{{ route('events.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
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
                                <th>TITULO</th>
                                <th>FECHA</th>
                                <th>DESCRIPCIÓN</th>
                                <th>ACTIVO</th>
                                <th colspan="2">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $event)

                                <tr>

                                    <td><strong>{{ $event->id }}</strong></td>
                                    <td>
                                        @if($event->image)

                                        <img src="{{ $event->get_image }}" height="auto" width="100px" alt="imagen_event">
                
                                        @else

                                        No hay imagen

                                        @endif
                                    </td>
                                    <td>{{ $event->title }}</td>
                                    <td>{{ $event->date }}</td>
                                    <td>{{ $event->description }}</td>
                                    <td>

                                    @if( @$event->active == 'on' ) 
                                    <i class="fas fa-check" style="color: rgb(117, 175, 0); font-size: 18px"></i>
                                    @else
                                    <i class="far fa-circle" style="color:#ffc107; font-size: 18px "></i>
                                    @endif

                                    </td>
                                    <td>
                                        <a href="{{ route('events.edit', $event) }}">Editar</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('events.destroy', $event) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Eliminar" onclick="return confirm('Desea eliminar?')">
                                        </form>
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection