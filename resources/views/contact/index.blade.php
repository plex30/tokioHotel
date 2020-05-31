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
                <li><a href="{{route('home')}}">Inicio</a></li>
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
                                <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Bienvenido/a {{ Auth::user()->firstname }} <span class="caret"></span>
                                </a>
                                
                                @if (Auth::user()->firstname == 'Admin')
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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
    <div class="card1">
        <a href="" id="i1"><img src="{{'./img/contact/tw.png'}}" style="width: 25px; height:25px"></a>
        <a href="" id="i2"><img src="{{'./img/contact/face.png'}}" style="width: 33px; height:30px"></a>
        <a href="" id="i3"><img src="{{'./img/contact/ig.png'}}" style="width: 42px; height:28px"></a>
        <div class="card1-img" id="img"></div>
        
        <div class="card1-content">
              <p class="card1-theme wow fadeInUp" data-wow-delay="0.3s">Contacto</p>
              <h2 class="card1-header wow fadeInRight" data-wow-delay="0.4s">Puede enviarnos un mensaje y nos pondremos en contacto con usted lo antes posible:</h2>
              <div class="form">
              <form class="card1-para wow fadeInUp" data-wow-delay="0.6s">
                
                <form action="">
                    <input type="text" placeholder="Nombre">
                    <input type="text" placeholder="E-mail">
                    <input type="text" id="msg" placeholder="Mensaje">
                </form>
         
                <button class="btn btn-outline-dark wow fadeInUp" data-wow-delay="1.2s" type="button">CONTACTAR</button>
            </div>
        </div>
  </div>
   
    
   


</div>


@endsection