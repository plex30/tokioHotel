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
         <label for="entrada" class="col-xs-2 mr-3 mt-2">Entrada</label>
          <div class="col-sm-2">
            <input type="date" class="form-control" name="entrada" >
          </div>
      
          <label for="salida" class="col-xs-2 mr-3 mt-2">Salida</label>
          <div class="col-sm-2">
            <input type="date" class="form-control" name="salida">
          </div>
     
          <label for="capacidad" class="col-xs-2 mr-3 mt-2">Personas</label>
          <div class="col-sm-2">
                    <select class="form-control col-sm-8 mr-3" name="capacidad">
                      <option value="0"></option>    
                      <option value="1">1 Adulto</option>
                      <option value="2">2 Adultos</option>
                      <option value="3">3 Adultos</option>
                    </select>
          </div>      
          <button type="submit" class="btn btn-outline-dark ml-3" id="boton">Ver Disponibilidad</button>

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
                  <ul>
                    <li><i class="fa fa-arrows-alt"></i> 82m²</li>
                    <li> <i class="fa fa-fan"></i> Aire acondicionado</li>
                    <li><i class="fa fa-shower"></i> Baño en la habitación</li>
                    <li><i class="fa fa-tv"></i> Tv en la habitación</li>
                    <li><i class="fa fa-wifi"></i> Wifi gratis</li>
                    <li><i class="fa fa-volume-mute"></i> Insonorización</li>
                  </ul>

                <h2>Precio por noche: {{$room->pvp}}€</h2>
                </div>
    
            <div class="product-image">
                <img src="{{asset($room->imagen)}}">
            
              <div class="info">
                    <ul>
                      <li><b>Tamaño de la habitación 83 m²</b><br>
                        Esta habitación esquinera tiene 2 camas individuales, aire acondicionado, hervidor eléctrico y minibar.<br></li>
                      <li> <b>En el baño privado:</b><br>
                        Artículos de aseo gratis<br>
                        Toallas<br>
                        Bañera o ducha<br>
                        Secador de pelo<br></li>
                      <li> <b>Equipamiento de la habitación: </b><br>
                        Minibar<br>
                        Caja fuerte<br>
                        Sofá, Mesa de comedor, Escritorio<br>
                        Canales vía satélite<br>
                      </li>
                      
                    </ul>
             </div>

            </div>
  </div>
@endsection