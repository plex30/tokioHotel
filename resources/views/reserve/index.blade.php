@extends('layouts.layoutReserve')

@section('title')
   Tokio Hotel 
@endsection
@section('content')

<nav>
      <span id="brand">
      <a href=""><img src="{{asset('./img/home/lg.png')}}" width="120" height="120"></a>
      </span>
  
      <ul id="menu">
          <li><a href="">Inicio</a></li>
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
      <div id="toggle">
          <div class="span"><img src="{{asset('./img/home/iconMenu.png')}}" width="30" height="30"></div>
      </div>
  </nav>
      
  
  
  <div id="resize">
      <div id="close-btn"><img src="{{asset('./img/home/iconClose.png')}}" width="30" height="30"></div>
          <ul id="menu">
              <li><a href="{{route('experience.index')}}">Experiencias</a></li>
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

<div class="container-fluid">
      
@foreach ($room as $item)
   <div class="row product-sec">
         <div class="col-lg-6 prod-left">
               <div class="hero-image">
                     <img src="{{asset($item->imagen)}}" class="img wow fadeInUp" alt="">
               </div>
         </div>

         <div class="col-lg-6 prod-right">
               <div class="prod-opt">
                     <h3 id="prod-name" class="wow fadeInUp" data-wow-delay="0.4s">Habitación {{$item->tipo}}</h3>
                     <p id="price" class="wow fadeInUp" data-wow-delay="0.5s">Precio: {{$item->pvp}} € /noche</p>
                        
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

@endsection