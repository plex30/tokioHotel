@extends('layouts.layoutShow')

@section('title')
   Tokio Hotel 
@endsection
@section('content')
<div class="wrapper">
<nav>
  <div class="brand wow fadeInDown" id="brand">
        <a href="{{url('/')}}"><img src="{{asset('./img/home/lg.png')}}" width="80" height="80"></a>
  </div>

  <div id="toggle">
        <div class="span"><img src="{{asset('./img/home/iconMenu.png')}}" width="30" height="30"></div>
  </div>

  <form name="search" action="{{route('reserve.index')}}" method="get">
        <div class="form-group row justify-content-center mt-4">
              
                    <label for="capacidad" class="col-xs-2 mr-3 mt-2">Personas</label>
                    <select class="form-control col-sm-1 mr-3" name="capacidad">
                      <option value="0"></option>    
                      <option value="1">1 Adulto</option>
                      <option value="2">2 Adultos</option>
                      <option value="3">3 Adultos</option>
                    </select>
                  
          <label for="entrada" class="col-xs-2 mr-3 mt-2">Entrada</label>
          <div class="col-sm-2">
            <input type="date" class="form-control" name="entrada" >
          </div>
        
          <label for="salida" class="col-xs-2 mr-3 mt-2">Salida</label>
          <div class="col-sm-2">
            <input type="date" class="form-control" name="salida">
          </div>
          <button type="submit" class="btn btn-outline-dark ml-3">Ver Disponibilidad</button>
        </div>
        
      </form>
</nav>
<div id="resize">
  <div id="close-btn"><img src="{{asset('./img/home/iconClose.png')}}" width="30" height="30"></div>
      <ul id="menu">
          <li><a href="{{url('/')}}">Inicio</a></li>
          <li><a href="">Reservas</a></li>
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
</div>
<div id="container">	
	
  
    <div class="product-details">
      
    <h1>Habitación {{$room->tipo}}</h1>
      
  </div>
    
  <div class="product-image">
    
  <img src="{{asset($room->imagen)}}">
    
  <!-- 	product Information-->
  <div class="info">
    <h2>The Description</h2>
    <ul>
      <li><strong>Sun Needs: </strong>Full Sun</li>
      <li><strong>Soil Needs: </strong>Damp</li>
      <li><strong>Zones: </strong>9 - 11</li>
      <li><strong>Height: </strong>2 - 3 feet</li>
      <li><strong>Blooms in: </strong>Mid‑Summer - Mid‑Fall</li>
      <li><strong>Features: </strong>Tolerates heat</li>
    </ul>
  </div>
  </div>
  <!--  End product image  -->
  
  
  </div>
@endsection