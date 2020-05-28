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
        <a class="nav-item nav-link" href="{{route('admin.indexRoom')}}">Habitaciones</a>
        <a class="nav-item nav-link active" href="{{route('admin.indexRev')}}">Reservas<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#">Ajustes</a>
      </div>
    </div>
  </nav>
  @if ($errors->any())
  <p class='alert-success ml-5 mr-5 mt-2'>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
  </p>
  @endif
<div id="container">
<h1>Actualización de la reserva código {{$uroom->id}}</h1>
<form name="edit" method="POST" action="{{route('admin.updateRev', $uroom)}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
    <div class="form-row mt-5">
      <div class="form-group col-md-6">
        <label for="lastname">Código de Cliente</label>
        <input type="text" class="form-control" name="idUser" value="{{$uroom->user_id}}">
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress">Código de Habitación</label>
        <input type="text" class="form-control" name="idRoom" value="{{$uroom->room_id}}">
      </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6 ">
      <label for="inputAddress2 ">Fecha Entrada</label>
      <input type="date" class="form-control" name="f_entrada" value="{{$uroom->f_entrada}}">
    </div>
    <div class="form-group col-md-6 ">
      <label for="inputAddress2 ">Fecha Salida</label>
      <input type="date" class="form-control" name="f_salida" value="{{$uroom->f_salida}}">
    </div>
  </div>
    <button type="submit" class="btn btn-dark">Actualizar</button>
  </form>
</div>
@endsection