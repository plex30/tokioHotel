@extends('layouts.layoutAdmin')
@section('title')
Tokio Hotel
@endsection
@section('content')
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="{{url('/')}}">Panel de Administración</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ml-5" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-5">
          <a class="nav-item nav-link" href="{{route('admin.indexCli')}}">Clientes</a>
          <a class="nav-item nav-link active" href="{{route('admin.indexRoom')}}">Habitaciones <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="{{route('admin.indexRev')}}">Reservas</a>
          <a class="nav-item nav-link" href="{{route('home')}}">Salir</a>
        </div>
      </div>
    </nav>
    @if ($mens = Session::get('message'))
      <p class='alert-success ml-5 mr-5 mt-2'>{{$mens}}</p>
    @endif
<div id="container1">
<h1>Edición de los datos de habitación código {{$room->id}}</h1>
<form name="edit" method="POST" action="{{route('admin.updateRoom', $room)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-row mt-5">
        <div class="form-group col-md-6">
          <label for="id">ID Habitación</label>
          <input type="text" class="form-control" name="id"  value="{{$room->id}}" disabled>
        </div>
        <div class="form-group col-md-6">
          <label for="numero">Número de Habitación</label>
          <input type="text" class="form-control" name="n_habitacion" value="{{$room->n_habitacion}}" disabled>
        </div>
      </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="tipo">Tipo</label>
        <input type="text" class="form-control" name="tipo"  value="{{$room->tipo}}">
      </div>
      <div class="form-group col-md-6">
        <label for="capacidad">Capacidad</label>
        <input type="text" class="form-control" name="capacidad" value="{{$room->capacidad}}">
      </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="precio">Precio</label>
      <input type="text" class="form-control" name="pvp" value="{{$room->pvp}}">
    </div>
</div>
<div class="form-row">
    <div class="form-group row">
      <label for="imagen" class="label mr-3">Imagen  </label>
      <img src="{{asset($room->imagen)}}" width="80vw" height="80vh" class="mr-2">
      <input type="file" name="imagen" class="ml-5 mt-5"accept="image/*">
    </div>
</div>
    <button type="submit" class="btn btn-dark mt-3">Actualizar</button>
  </form>
</div>
@endsection