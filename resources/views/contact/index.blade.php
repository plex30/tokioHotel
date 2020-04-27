@extends('layouts.layoutContact')

@section('title')
   Contacto
@endsection
@section('content')

<div class="wrapper">
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
                <li><a href="">Reservas</a></li>
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
    <div class="card">
        <div class="card-img" id="img"></div>
        <div class="card-content">
              <p class="card-theme wow fadeInUp" data-wow-delay="0.3s">Contacto</p>
              <h2 class="card-header wow fadeInRight" data-wow-delay="0.4s">Puede enviarnos un mensaje y nos pondremos en contacto con usted lo antes posible:</h2>
              <div class="form">
              <form class="card-para wow fadeInUp" data-wow-delay="0.6s">
                
                <form action="">
                    <input type="text" placeholder="Nombre">
                    <input type="text" placeholder="E-mail">
                    <input type="text" id="msg" placeholder="Mensaje">
                </form>
         
                <button class="btn wow fadeInUp" data-wow-delay="1.2s" type="button">Contactar</button>
            </div>
        </div>
  </div>
   
    
   


</div>


@endsection