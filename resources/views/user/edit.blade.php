@extends('layouts.layoutUser')
@section('title')
Tokio Hotel
@endsection
@section('content')
<nav>
  <div class="brand wow fadeInDown" id="brand">
      <a href="{{url('/')}}"><img src="{{asset('./img/home/lg.png')}}" width="80" height="80"></a>
      </div>
      <div id="toggle">
          <div class="span"><img src="{{asset('./img/home/iconMenu.png')}}" width="30" height="30"></div>
  
</nav>

<div id="resize">
  <div id="close-btn"><img src="{{asset('./img/home/iconClose.png')}}" width="30" height="30"></div>
      <ul id="menu">
          <li><a href="{{url('/')}}">Inicio</a></li>
          <li><a href="{{route('experience.index')}}">Experiencias</a></li>
          <li><a href="{{route('reserve.index')}}">Reservas</a></li>
          <li><a href="{{route('contact.index')}}">Contacto</a></li>
          @guest
                          
          @if (Route::has('register'))
          <li><a href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
          </li>
          @endif
      @else
      <li class="nav-item dropdown">
          <p class="nav-link dropdown-toggle" data-toggle="dropdown">
              Bienvenido/a {{ Auth::user()->firstname }} <span class="caret"></span>
          </p>
          
          @if (Auth::user()->firstname == 'Admin')
          <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('admin.indexCli')}}">
                  {{ __('Panel de Administración') }}
              </a>
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Cerrar Sesión') }}
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </a> 
          @else
          <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('user.edit',Auth::user()) }}">
                  {{ __('Editar mi perfil') }}
              </a>
              <a class="dropdown-item" href="{{ route('user.show',Auth::user()) }}">
                  {{ __('Mis reservas') }}
              </a>
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Cerrar Sesión') }}
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
              </a>
          @endif

                  
          </li>
@endguest
      </ul>
</div>
<div id="container">
<h1>Hola {{$user->firstname}}, aquí puede modificar su perfil</h1>
<form name="edit" method="POST" action="{{route('user.update', $user)}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
    <div class="form-row mt-5">
      <div class="form-group col-md-6">
        <label for="firstname">Nombre</label>
        <input type="text" class="form-control" name="firstname"  value="{{$user->firstname}}"required>
      </div>
      <div class="form-group col-md-6">
        <label for="lastname">Apellidos</label>
        <input type="text" class="form-control" name="lastname" value="{{$user->lastname}}"required>
      </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputAddress">Teléfono</label>
      <input type="text" class="form-control" name="phone" value="{{$user->phone}}"required>
    </div>
    <div class="form-group col-md-6 ">
      <label for="inputAddress2 ">E-mail</label>
      <input type="email" class="form-control" name="email" value="{{$user->email}}" required>
    </div>
  </div>

    <button type="submit" class="btn btn-dark">Actualizar</button>
  </form>
</div>
@endsection