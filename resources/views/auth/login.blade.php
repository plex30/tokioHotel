@extends('layouts.layoutLogin')

@section('title')
Tokio Hotel
@endsection

@section('content')
<nav>
    <div class="brand wow fadeInDown" id="brand">
        <a href="{{url('/')}}"><img src="{{asset('./img/home/lg.png')}}" width="80" height="80"></a>
        </div>
        <div id="toggle1">
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
    @if(Session::get('mensaje'))
    <script>
        $( document ).ready(function() {
        $('#myModal').modal('toggle')
        
    });
    </script>
    
    @endif

    <div class="limiter">
        <div class="cont-login">
            <div class="wrap-login">
            <form class="login-form" action="{{route('login')}}" method="POST">
                @csrf
                <div class="invalid-feedback1">
                    @error('email')
                            <span class="invalid-feedback1" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                    @enderror
                    @error('password')
                            <span class="invalid-feedback1" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                    @enderror
                </div>
                <span class="title">
                    
                 <h2>Bienvenido</h2>
                 <p>Puede iniciar sesión con su cuenta para acceder a nuestros servicios</p>
                </span>
                <div class="form-g1">
                    <div class="wrap-input">
                        <input class="input" type="email" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        
                    </div>
                </div>

                <div class="form-g1">

                    <div class="wrap-input">
                        <input class="input" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        
                    </div>
                </div>

                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                            <button class="login-form-btn">
                            Iniciar Sesión
                            </button>
                    </div>
                </div>

                <div>
                    <span class="txt1">
                    No está registrado?
                    </span>
                <a class="txt2" href="{{route('register')}}">Registrese Aquí.</a>
                </div>
                <div class="form-g1 row">
                    <div>
                        @if (Route::has('password.request'))
                                    <a class="txt2" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                        @endif
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Iniciar Sesión</h4>
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