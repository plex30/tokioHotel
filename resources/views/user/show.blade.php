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
<div class="container-show1">
    <h1>Mis Reservas</h1>
  <div class="responsive">
  <table class="table responsive table-hover table-sm">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Código de reserva</th>
        <th scope="col">Habitación</th>
        <th scope="col">Fecha de entrada</th>
        <th scope="col">Fecha de salida</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($user->room as $item)
        <tr class="text-center">
            <td><p id="resp" style="font-weight: 900">Código de reserva: </p>{{$item->id}}</td>
            <td><p id="resp" style="font-weight: 900">Habitación: </p>{{$item->tipo}}</td>
            <td><p id="resp" style="font-weight: 900">Fecha de entrada:</p> {{$item->pivot->f_entrada}}</td>
            <td><p id="resp" style="font-weight: 900">Fecha de salida: </p>{{$item->pivot->f_salida}}</td>
          </tr> 
        
      
    </tbody>
    @endforeach
  </table>
</div>
</div>

  @endsection