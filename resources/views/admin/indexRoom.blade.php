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
        <a class="nav-item nav-link active" href="{{route('admin.indexRoom')}}">Habitaciones<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="{{route('admin.indexRev')}}">Reservas</a>
        <a class="nav-item nav-link" href="#">Ajustes</a>
      </div>
    </div>
  </nav>
  @if ($mens = Session::get('message'))
    <p class='alert-success ml-5 mr-5 mt-2'>{{$mens}}</p>
  @endif
  <div class="container-show">
  <table class="table table-sm table-hover mt-3">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th> 
        <th scope="col">Imagen</th>
        <th scope="col">Tipo</th>
        <th scope="col">Capacidad</th>
        <th scope="col">Número de Habitación</th>
        <th scope="col">Tamaño</th>
        <th scope="col">Precio</th>
        <th scope="col">Editar/Borrar</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($room as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td><img src="{{asset($item->imagen)}}" width="80" height="80"></td>
            <td>{{$item->tipo}}</td>
            <td>{{$item->capacidad}}</td>
            <td>{{$item->n_habitacion}}</td>
            <td>{{$item->tamano}}</td>
            <td>{{$item->pvp}}</td>
            <td><form class="form-inline text-nowrap d-inline" name="for"
              action="{{route('admin.destroyRoom', $item)}}" method="POST">
            @method('DELETE')
            @csrf
              
            <a href="{{route('admin.editRoom', $item)}}" style="text-decoration: none"
               class="ml-2 fas fa-edit btn btn-outline-dark"></a>
            <button type="submit" onclick="return confirm('¿Está seguro que desea borrar los datos de esta habitación?')"
                    class=" btn btn-outline-danger fas fa-trash-alt"></button>
            
        </form></td>
          </tr>
    </tbody>
    @endforeach
  </table>
</div>
  {{$room->appends(Request::except('page'))->links()}}
@endsection