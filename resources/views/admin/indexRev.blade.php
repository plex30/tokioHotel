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
    <div class="collapse navbar-collapse ml-5"  id="navbarNavAltMarkup">
      <div class="navbar-nav ml-5">
        <a class="nav-item nav-link" href="{{route('admin.indexCli')}}">Clientes</a>
        <a class="nav-item nav-link" href="{{route('admin.indexRoom')}}">Habitaciones</a>
        <a class="nav-item nav-link active" href="{{route('admin.indexRev')}}">Reservas<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#">Ajustes</a>
      </div>
    </div>
  </nav>
  @if ($mens = Session::get('message'))
    <p class='alert-success ml-5 mr-5 mt-3'>{{$mens}}</p>
  @endif
  <div class="container-show">
  <table class="table responsive table-sm table-hover mt-3">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Código de reserva</th>
        <th scope="col">Código Cliente</th>
        <th scope="col">Código de Habitación</th>
        <th scope="col">Fecha de entrada</th>
        <th scope="col">Fecha de salida</th>
        <th scope="col">Editar/Borrar</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($uroom as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->user_id}}</td>
            <td>{{$item->room_id}}</td>
            <td>{{\Carbon\Carbon::parse($item->f_entrada)->format('d/m/Y')}}</td>
            <td>{{\Carbon\Carbon::parse($item->f_salida)->format('d/m/Y')}}</td>
            <td><form class="form-inline text-nowrap d-inline" name="for"
              action="{{route('admin.destroyRev', $item)}}" method="POST">
            @method('DELETE')
            @csrf
              
            <a href="{{route('admin.editRev', $item)}}" style="text-decoration: none"
               class="ml-2 fas fa-edit btn btn-outline-dark"></a>
            <button type="submit" onclick="return confirm('¿Está seguro que desea cancelar esta reserva?')"
                    class=" btn btn-outline-danger fas fa-trash-alt"></button>
            
        </form></td>
          </tr> 
        
      
    </tbody>
    @endforeach
  </table>
  {{$uroom->appends(Request::except('page'))->links()}}
</div>
  
@endsection