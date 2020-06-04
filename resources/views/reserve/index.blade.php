@extends('layouts.layoutReserve')

@section('title')
   Tokio Hotel 
@endsection
@section('content')

<nav>
      <span id="brand">
      <a href="{{url('/')}}"><img src="{{asset('./img/home/lg.png')}}" width="120" height="120"></a>
      </span>
  
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
                            
                            @if (Auth::user()->firstname == 'Admin')
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
      <form action="{{route('reserve.index')}}"  method="GET" name="search">
        <div class="form-group" id="capacidad">
        <label for="capacidad" class="float-right col-md-8">Seleccione el tipo de habitación: </label>
        <div class="input-group col-md-8 float-right" >
                  <select class="form-control col-sm-6" name="capacidad" style="display: inline-block;">
                    <option value="0"></option>
                    <option value="1">Individual</option> 
                    <option value="2">Doble</option>
                    <option value="3">Triple</option>
                  </select>
                  <span class="input-group-btn">        
        <button type="submit" class="btn btn-outline-dark ml-2" style="display: inline-block;">Seleccionar</button>
                  </span>
        </div>

    </div>
      </form>
      <div id="toggle">
          <div class="span"><img src="{{asset('./img/home/iconMenu.png')}}" width="30" height="30"></div>
      </div>
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
                            
                            @if (Auth::user()->firstname == 'Admin')
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
<div class="container-fluid">
    @if(Session::get('mensaje'))
    <script>
        $( document ).ready(function() {
        $('#myModal').modal('toggle')
        
    });
    </script>
    
      @endif
      
       
@foreach ($room as $item)
   <div class="row product-sec">
         <div class="col-lg-6 prod-left">
               <div class="hero-image">
                     <img src="{{asset($item->imagen)}}" class="img wow fadeInLeft">
               </div>
         </div>

         <div class="col-lg-6 prod-right">
               <div class="prod-opt">
                     <h3 id="prod-name" class="wow fadeInUp" data-wow-delay="0.4s">Habitación {{$item->tipo}}</h3>
                     <p id="price" class="wow fadeInUp" data-wow-delay="0.5s">Precio: {{$item->pvp}} € /noche</p>
                     <p id="price" class="wow fadeInUp" data-wow-delay="0.5s">Tamaño: {{$item->tamano}} </p> 
                     <div class="add-prod wow fadeInUp" data-wow-delay="1.1s">
                        <form action="{{route('reserve.show', $item)}}">
                            <input type="hidden" name="id" value="{{$item->id}}">
                            <button type="submit" class="btn btn-dark">Reservar</button>   
                        </form>
                    </div>
               </div>
         </div>
   </div>
</div>

@endforeach
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">¡Todo Listo!</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p>{{Session::get('mensaje')}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tokio Hotel</button>
        </div>
      </div>
      
    </div>
  </div>
@endsection