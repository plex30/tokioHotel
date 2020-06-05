@extends('layouts.layoutRegister')

@section('title')
Tokio Hotel
@endsection

@section('content')
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
    <div class="limiter">
        <div class="container-login">
            <div class="wrap-login1">
            <form class="login-form" action="{{route('register')}}" method="POST">
                @csrf
                <span class="title">
                 <h2>Registro</h2>
                </span>

                <div class="form-group row">
                    <div class="wrap-input col-md-6">
                        <input class="input" type="text" placeholder="DNI" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required autocomplete="dni" autofocus>
                        @error('dni')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="wrap-input col-md-6">
                        <input class="input" type="text" placeholder="Nombre" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname">
                        @error('firstname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="wrap-input col-md-6">
                        <input class="input" type="text" placeholder="Apellidos" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname">
                        @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="wrap-input col-md-6">
                        <input class="input" type="text" placeholder="Teléfono" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                

                <div class="form-group row">
                    <div class="wrap-input col-md-6">
                        <input class="input" type="email" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">

                    <div class="wrap-input col-md-6">
                        <input class="input" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="wrap-input col-md-6">
                        <input id="password-confirm" type="password" class="input form-control" placeholder="Confirmar contraseña"name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

            

                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                            <button class="login-form-btn">
                            Registrarse
                            </button>
                    </div>
                </div>

                </form>
            </div>
        </div>
    </div>




























@endsection