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
                                    <h4 class="card-title">Usuarios</h4>
                                    <div class="text-right">
                                        <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm">Nuevo Usuario</a>
                                    </div>
                                </div>

                                <div class="card-body">
                                    @if(session('success'))
                                        <div class="alert alert-success" role="success">
                                            {{ session('success') }}
                                        </div>                                        
                                    @endif
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th class="text-dark">ID</th>
                                                <th class="text-dark">NOMBRE</th>
                                                <th class="text-dark">CORREO</th>
                                                <th class="text-dark">CREADO</th>
                                                <th class="text-right text-dark">ACCIONES</th>
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
                                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit">
                                                                <i class="fas fas fa-trash-alt"></i>
                                                            </button>
                                                        </form>
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