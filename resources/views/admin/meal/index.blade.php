@extends('adminlte::page')

@section('content')



<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mt-2">

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
                                <div class="table-responsive">
                                    <table id="myTable" class="table">
                                        <thead>
                                            <tr>
                                                <th>IMAGEN</th>
                                                <th>NOMBRE</th>
                                                <th>DESCRIPCIÓN</th>
                                                <th>PRECIO</th>
                                                <th>CATEGORIA</th>
                                                <th>ACTIVO</th>
                                                <th>ACCIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($meals as $meal)

                                                <tr>

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
                                                    <td class="d-flex">
                                                        <a href="{{ route('meal.edit', $meal) }}" class="btn btn-warning mr-2"><i class="far fa-edit"></i></a>
                                                        <form action="{{ route('meal.destroy', $meal) }}" method="POST">
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
                                </div>
                                <div class="mt-3">
                                        {{-- {{ $meals->links('pagination::bootstrap-4') }} --}}
                                </div>

                            </div>

                            <div class="card-footer mr-auto">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>


@endsection


@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@stop

@section('js')

 <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

 <script>

$(document).ready( function () {

    $('#myTable').DataTable( {
        columnDefs: [
            { orderable: false, targets: 0 },
            { orderable: false, targets: 1 },
            { orderable: false, targets: 2 },
            { orderable: false, targets: 5 },
            { orderable: false, targets: 6 }
        ],
        "language": {
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "decimal":        "",
            "emptyTable":     "No hay datos",
            "infoEmpty":      "Showing 0 to 0 of 0 registros",
            "infoFiltered":   "(filtrado de _MAX_ total registros)",
            "infoPostFix":    "",
            "thousands":      ",",
            "lengthMenu":     "Mostrando _MENU_  registros",
            "loadingRecords": "Cargando...",
            "processing":     "Procesando...",
            "search":         "Buscar:",
            "zeroRecords":    "No se encontro ningun dato",
            "paginate": {
                "first":      "Primero",
                "last":       "Ultimo",
                "next":       "Siguiente",
                "previous":   "Anterior"
            },
        },
    } );

} );

 </script>


@stop



