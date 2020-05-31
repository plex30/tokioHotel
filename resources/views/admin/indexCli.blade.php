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
  @if ($mens = Session::get('message'))
    <p class='alert-success ml-5 mr-5 mt-2'>{{$mens}}</p>
  @endif
  <div class="container-show">
  <table class="table responsive table-sm table-hover mt-3">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID Cliente</th> 
        <th scope="col">DNI</th> 
        <th scope="col">Nombre</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Email</th>
        <th scope="col">Editar/Borrar</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($user as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->dni}}</td>
            <td>{{$item->firstname}}</td>
            <td>{{$item->lastname}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->email}}</td>
            <td><form class="form-inline text-nowrap d-inline" name="for"
                action="{{route('admin.destroyCli', $item)}}" method="POST">
            @method('DELETE')
            @csrf
              
            <a href="{{route('admin.editCli', $item)}}" style="text-decoration: none"
               class="ml-2 fas fa-edit btn btn-outline-dark"></a>
            <button type="submit" onclick="return confirm('¿Está seguro que desea borrar los datos del cliente?')"
                    class=" btn btn-outline-danger fas fa-trash-alt"></button>
            
        </form></td>
          </tr>
    </tbody>
    @endforeach
  </table>
  {{$user->appends(Request::except('page'))->links()}}
</div>

@endsection