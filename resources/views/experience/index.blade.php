@extends('layouts.layoutExperience')

@section('title')
   Tokio Hotel 
@endsection
@section('content')
  {{--   <div id="toggle">
        <div class="span"><img src="{{asset('./img/home/iconMenu.png')}}" width="30" height="30"></div>
    </div>

<div id="resize">
    <div id="close-btn"><img src="{{asset('./img/home/iconClose.png')}}" width="30" height="30"></div>
        <ul id="menu">
            <li><a href="{{route('experience.index')}}">Experiencias</a></li>
            <li><a href="">Reservas</a></li>
            <li><a href="">Contacto</a></li>
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
</div> --}}

<div class="slide active">
    <div class="card">
          <div class="card-img" id="img01"></div>
          <div class="card-content">
                <p class="card-theme">Travel</p>
                <h2 class="card-header">Amongst the giants</h2>
                <p class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti repellendus vel neque iure aut, eligendi aliquid vero facilis, quia repellat.</p>
          <a class="card-link">Read</a>
          </div>
    </div>
</div>
<div class="slide">
    <div class="card">
          <div class="card-img" id="img02"></div>
          <div class="card-content">
                <p class="card-theme">Travel</p>
                <h2 class="card-header">Home Outdoors</h2>
                <p class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti repellendus vel neque iure aut, eligendi aliquid vero facilis, quia repellat.</p>
          <a class="card-link">Read</a>
          </div>
    </div>
</div>
<div class="slide">
    <div class="card">
          <div class="card-img" id="img03"></div>
          <div class="card-content">
                <p class="card-theme">Travel</p>
                <h2 class="card-header">A Mystic Walk</h2>
                <p class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti repellendus vel neque iure aut, eligendi aliquid vero facilis, quia repellat.</p>
          <a class="card-link">Read</a>
          </div>
    </div>
</div>
<div class="slide">
    <div class="card">
          <div class="card-img" id="img04"></div>
          <div class="card-content">
                <p class="card-theme">Travel</p>
                <h2 class="card-header">A Mystic Walk</h2>
                <p class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti repellendus vel neque iure aut, eligendi aliquid vero facilis, quia repellat.</p>
          <a class="card-link">Read</a>
          </div>
    </div>
</div>
<div class="slide">
    <div class="card">
          <div class="card-img" id="img05"></div>
          <div class="card-content">
                <p class="card-theme">Travel</p>
                <h2 class="card-header">A Mystic Walk</h2>
                <p class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti repellendus vel neque iure aut, eligendi aliquid vero facilis, quia repellat.</p>
          <a class="card-link">Read</a>
          </div>
    </div>
</div>

<div class="prevnext">
    <button class="pn-btn" id="prev"></button>
    <button class="pn-btn" id="next"></button>
</div>
@endsection