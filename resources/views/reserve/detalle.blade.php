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

  <form name="search" action="{{route('reserve.reserva')}}" method="post">
    @csrf
        <div class="form-group row justify-content-center mt-4">
        <label for="entrada" class="col-xs-2 mr-3 mt-2">Entrada</label>
          <div class="col-sm-2">
            <input type="date" class="form-control" name="f_entrada" value="{{old('entrada')}}">
          </div>
      
          <label for="salida" class="col-xs-2 mr-3 mt-2">Salida</label>
          <div class="col-sm-2">
            <input type="date" class="form-control" name="f_salida" value="{{old('salida')}}">
          </div>
     
          <input type="hidden" name="idRoom" value="{{$room->id}}">
          <input type="hidden" name="idUser" value="{{auth()->id()}}">  
          <button type="submit" class="btn btn-outline-dark ml-3" id="boton" data-toggle="modal" data-target="#myModal" onclick="confirm('¿Esta seguro que desea hacer la reserva de esta habitación?')">Ver Disponibilidad</button>

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
@if ($errors->any())
<script>
  $( document ).ready(function() {
  /* $('#myModal').modal('toggle') */

  $('#myModal').on('hidden', function () {
  if($(this).find('div .alert').length){
      $(this).find('div .alert').remove();
  }
});
  
});
</script>
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">¡Algo salio mal!</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <div class="alert">
          <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
          </ul>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tokio Hotel</button>
      </div>
    </div>
    
  </div>
</div>
@endif


{{-- <div class="alert alert-danger my-2" id="error">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div> --}}

            <div id="container">	
	              <div class="product-details">
                  <h1>{{$room->tipo}}</h1>
                  <ul>
                    <li><i class="fa fa-arrows-alt"></i> {{$room->tamano}}</li>
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
                      <li><b>Tamaño de la habitación {{$room->tamano}}</b><br>
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

  <div id="container-no">	
    <div class="product-image">
      <img src="{{asset($room->imagen)}}"class="responsive" ></div>
    
      <h1>Habitación {{$room->tipo}}</h1>
      <ul>
        <li><i class="fa fa-arrows-alt"></i> 82m²</li>
        <li> <i class="fa fa-fan"></i> Aire acondicionado</li>
        <li><i class="fa fa-shower"></i> Baño en la habitación</li>
        <li><i class="fa fa-tv"></i> Tv en la habitación</li>
        <li><i class="fa fa-wifi"></i> Wifi gratis</li>
        <li><i class="fa fa-volume-mute"></i> Insonorización</li>
      </ul>
  </div>
    <h2>Precio por noche: {{$room->pvp}}€</h2>
    

@endsection