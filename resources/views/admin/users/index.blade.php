@extends('adminlte::page')

@section('content')

    <h2 class="text-center mb-5">Pagina Pricipal</h2>

     <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Usuarios</h4>
                                </div>

                                <div class="card-body">
                                    @if(session('success'))
                                        <div class="alert alert-success" role="success">
                                            {{ session('success') }}
                                        </div>                                        
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm">Agregar Usuario</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Correo</th>
                                                <th>Creado</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach($users as $user)
                                                <tr>
                                                    <td>{{$user->id}}</td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->created_at}}</td>
                                                    <td class="text-right">
                                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"><i class="far fa-edit"></i></a>
                                                        <button class="btn btn-danger" type="button">
                                                            <i class="fas fas fa-trash-alt"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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

@stop