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
                                <p class="nav-link dropdown-toggle" data-toggle="dropdown">
                                    Bienvenido/a {{ Auth::user()->firstname }} <span class="caret"></span>
                                </p>
                                
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
    @if(Session::get('mensaje'))
    <script>
        $( document ).ready(function() {
        $('#myModal').modal('toggle')
        
    });
    </script>
    
    @endif
    <div class="card1">
        <a href="" id="i1"><img src="{{'./img/contact/tw.png'}}" style="width: 25px; height:25px"></a>
        <a href="" id="i2"><img src="{{'./img/contact/face.png'}}" style="width: 33px; height:30px"></a>
        <a href="" id="i3"><img src="{{'./img/contact/ig.png'}}" style="width: 42px; height:28px"></a>
        <div class="card1-img" id="img"></div>
        
        <div class="card1-content">
              <p class="card1-theme wow fadeInUp" data-wow-delay="0.3s">Contacto</p>
              <h2 class="card1-header wow fadeInRight" data-wow-delay="0.4s">Puede enviarnos un mensaje y nos pondremos en contacto con usted lo antes posible:</h2>
              <div class="form">
              <form class="card1-para wow fadeInUp" data-wow-delay="0.6s" name="send" action="{{url('send')}}" method="post">
                    @csrf
                    <input type="text" placeholder="Nombre" name="name" required>
                    <input type="mail" placeholder="E-mail" name="mail" class=" @error('mail') is-invalid @enderror" value="{{ old('mail') }}" required autocomplete="mail" >
                    @error('mail')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                    <input type="text" id="msg" placeholder="Mensaje" name="msg" required>
                    <button class="btn btn-outline-dark wow fadeInUp" data-wow-delay="1.2s" type="submit">CONTACTAR</button>
                </form>
                </div>
        </div>
  </div>
   
    
   


</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">¡Mensaje Enviado!</h4>
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