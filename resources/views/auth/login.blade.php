@extends('layouts.layoutLogin')

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
    <div class="limiter">
        <div class="container-login">
            <div class="wrap-login">
            <form class="login-form" action="{{route('login')}}" method="POST">
                @csrf
                <div class="invalid-feedback">
                    @error('email')
                            <span class="invalid-feedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                    @enderror
                    @error('password')
                            <span class="invalid-feedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                    @enderror
                </div>
                <span class="title">
                    
                 <h2>Bienvenido</h2>
                 <p>Puede iniciar sesión con su cuenta para acceder a nuestros servicios</p>
                </span>
                <div class="form-group row">
                    <div class="wrap-input col-md-6">
                        <input class="input" type="email" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        
                    </div>
                </div>

                <div class="form-group row">

                    <div class="wrap-input col-md-6">
                        <input class="input" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="remember" for="remember">
                                {{ __('Recordar') }}
                            </label>
                        </div>
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

                <div class="text-center p-t-115">
                    <span class="txt1">
                    No está registrado?
                    </span>
                <a class="txt2" href="{{route('register')}}">Registrese</a>
                </div>

                </form>
            </div>
        </div>
    </div>




























@endsection