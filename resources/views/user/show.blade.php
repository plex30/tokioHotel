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
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Bienvenido {{ Auth::user()->firstname }} <span class="caret"></span>
                                </a>
  
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>
  
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
            @endguest
        </ul>
  </div>
<div class="container-show">
    <h1 class="text_align">Mis Reservas</h1>
  <table class="table table-hover">
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
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->tipo}}</td>
            <td>{{$item->pivot->f_entrada}}</td>
            <td>{{$item->pivot->f_salida}}</td>
          </tr> 
        
      
    </tbody>
    @endforeach
  </table>
</div>
 

  @endsection