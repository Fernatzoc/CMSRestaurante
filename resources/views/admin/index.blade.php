@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container">
  <h1>Administrador Andrea's Cafe y Restaurante</h1>
</div>
@stop

@section('content')

    <div class="container">
        <div class="row">
          <div class="col-sm">
            <div class="small-box bg-gradient-success">
                <div class="inner">
                  <h3>{{$users}}</h3>
                  <p>Usuarios</p>
                </div>
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
                <a href="{{ route('users.index') }}" class="small-box-footer">
                  Ver  <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
          </div>
          <div class="col-sm">
            <div class="small-box bg-gradient-cyan">
                <div class="inner">
                  <h3>{{$categories}}</h3>
                  <p>Categorias</p>
                </div>
                <div class="icon">
                  <i class="fas fa-list"></i>
                </div>
                <a href="/category" class="small-box-footer">
                  Ver <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
          </div>
          <div class="col-sm">
            <div class="small-box bg-gradient-teal">
                <div class="inner">
                  <h3>{{$meals}}</h3>
                  <p>Platillos</p>
                </div>
                <div class="icon">
                  <i class="fas fa-hamburger"></i>
                </div>
                <a href="/meal" class="small-box-footer">
                  Ver <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
          </div>
          <div class="col-sm">
            <div class="small-box bg-gradient-red">
                <div class="inner">
                  <h3>{{$events}}</h3>
                  <p>Eventos</p>
                </div>
                <div class="icon">
                  <i class="fas fa-calendar-alt"></i>
                </div>
                <a href="/events" class="small-box-footer">
                  Ver <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
          </div>
        </div>
      </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop