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
          <a class="nav-item nav-link active" href="{{route('admin.indexCli')}}">Clientes <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="{{route('admin.indexRoom')}}">Habitaciones</a>
          <a class="nav-item nav-link" href="{{route('admin.indexRev')}}">Reservas</a>
          <a class="nav-item nav-link" href="#">Ajustes</a>
        </div>
      </div>
    </nav>
   
<div id="container">
<h1>Edición de los datos de cliente código {{$user->id}}</h1>
<form name="edit" method="POST" action="{{route('admin.updateCli', $user)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-row mt-5">
        <div class="form-group col-md-6">
          <label for="id">ID Cliente</label>
          <input type="text" class="form-control" name="id"  value="{{$user->id}}" disabled>
        </div>
        <div class="form-group col-md-6">
          <label for="dni">DNI</label>
          <input type="text" class="form-control" name="dni" value="{{$user->dni}}" disabled>
        </div>
      </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="firstname">Nombre</label>
        <input type="text" class="form-control" name="firstname"  value="{{$user->firstname}}">
      </div>
      <div class="form-group col-md-6">
        <label for="lastname">Apellidos</label>
        <input type="text" class="form-control" name="lastname" value="{{$user->lastname}}">
      </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputAddress">Teléfono</label>
      <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
    </div>
    <div class="form-group col-md-6 ">
      <label for="inputAddress2 ">E-mail</label>
      <input type="email" class="form-control" name="email" value="{{$user->email}}">
    </div>
  </div>
    <button type="submit" class="btn btn-dark mt-3">Actualizar</button>
  </form>
</div>
@endsection