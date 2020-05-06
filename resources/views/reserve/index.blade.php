@extends('layouts.layoutReserve')

@section('title')
   Tokio Hotel 
@endsection
@section('content')

    

<div class="container-fluid">
      <nav>
            <div class="brand wow fadeInDown" id="brand">
                  <a href="{{url('/')}}"><img src="{{asset('./img/home/lg.png')}}" width="80" height="80"></a>
            </div>

            <div id="toggle">
                  <div class="span"><img src="{{asset('./img/home/iconMenu.png')}}" width="30" height="30"></div>
            </div>

            <form>
                  <div class="form-group row justify-content-center mt-4">
                    <label for="entrada" class="col-xs-2 mr-3 mt-2">Fecha de Entrada</label>
                    <div class="col-sm-2">
                      <input type="date" class="form-control">
                    </div>
                  
                    <label for="Salida" class="col-xs-2 mr-3 mt-2">Fecha de Salida</label>
                    <div class="col-sm-2">
                      <input type="date" class="form-control">
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
           @foreach ($rm as $item)
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
                           <a href="#">Seleccionar</a>
                     </div>
               </div>
         </div>
   </div>
</div>
@endforeach
{{-- {{$rm->appends(Request::except('page'))->links()}} --}}
@endsection