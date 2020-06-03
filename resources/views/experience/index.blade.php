@extends('layouts.layoutExperience')

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
  


<div class="cont-slide">
<div class="slide s1" id="sli">
    <div class="card1">
          <div class="card1-img" id="img01"></div>
          <div class="card1-content">
                <p class="card1-theme wow fadeInUp" data-wow-delay="0.3s">Cocina Japonesa</p>
                <h2 class="card1-header wow fadeInRight" data-wow-delay="0.4s">Nippon Cuisine</h2>
                <p class="card1-para wow fadeInUp" data-wow-delay="0.6s">A los huéspedes se les sirve Nippon Cuisine, un estilo culinario que se centra en el pescado, un elemento básico común de la comida ryokan y un elemento clave en la cultura culinaria japonesa. Cada ingrediente está aromatizado con condimentos cuidadosamente seleccionados y preparados por nuestro chef ejecutivo, utilizando sus galardonadas técnicas francesas.</p>
          </div>
    </div>
</div>
<div class="slide s2" id="sli">
    <div class="card1">
          <div class="card1-img" id="img02"></div>
          <div class="card1-content">
                <p class="card1-theme wow fadeInUp" data-wow-delay="0.3s">Relax</p>
                <h2 class="card1-header wow fadeInRight" data-wow-delay="0.4s">Masaje Japonés</h2>
                <p class="card1-para wow fadeInUp" data-wow-delay="0.6s">Calmar la mente y relajar el cuerpo hasta alcanzar un estado de completa paz interior que te permita renovar energía. Este es el objetivo de este placentero ritual diseñado para mimarte e hidratar tu piel de una forma integral. Primero, una exfoliación corporal sobre mármol caliente para seguir con un delicado masaje de estilo lomi-lomi japonés mientras tu cabello se nutre con una mascarilla capilar hidratante de menta y limón.</p>
          </div>
    </div>
</div>
<div class="slide s3" id="sli" >
    <div class="card1">
          <div class="card1-img" id="img03"></div>
          <div class="card1-content">
                <p class="card1-theme wow fadeInUp" data-wow-delay="0.3s" >Spa</p>
                <h2 class="card1-header wow fadeInRight" data-wow-delay="0.4s">Enriquece el Cuerpo</h2>
                <p class="card1-para wow fadeInUp" data-wow-delay="0.6s">El último piso de TOKIO Hotel consta de dos salas de baño, separadas por género. Los baños son alimentados por aguas termales extraídas de 1.500 metros bajo tierra. Debido a su alto contenido de solución salina, el agua del baño es agradable para la piel, relaja suavemente el cuerpo y mejora su capacidad para preservar el calor. Cada sala de baño contiene un baño interior y exterior, conectados por un túnel en forma de cueva.</p>
          </div>
    </div>
</div>
<div class="slide s4" id="sli">
    <div class="card1">
          <div class="card1-img" id="img04"></div>
          <div class="card1-content">
                <p class="card1-theme wow fadeInUp" data-wow-delay="0.3s">Actividades</p>
                <h2 class="card1-header wow fadeInRight" data-wow-delay="0.4s">Ceremonia del Té</h2>
                <p class="card1-para wow fadeInUp" data-wow-delay="0.6s">En la ceremonia del té se puede apreciar el esfuerzo de los japoneses por conseguir la máxima simplicidad y refinamiento en los movimientos que simbolizan la verdadera belleza.Vive las maravillas de una ceremonia japonesa tradicional del té. Aprende sobre la historia de la ceremonia y los diferentes métodos de preparar té gracias a un maestro de habla inglesa de Urasenke, la escuela más grande de Japón de la ceremonia. </p>
          </div>
    </div>
</div>
<div class="slide s5" id="sli">
    <div class="card1">
          <div class="card1-img" id="img05"></div>
          <div class="card1-content">
                <p class="card1-theme wow fadeInUp" data-wow-delay="0.3s">Yoga</p>
                <h2 class="card1-header wow fadeInRight" data-wow-delay="0.4s">Harmonía con tu Cuerpo</h2>
                <p class="card1-para wow fadeInUp" data-wow-delay="0.6s">El yoga no es solo una disciplina, es un estilo de vida. Todos los días te despiertas y saludar al sol es tan básico como desayunar. Cuando sales de vacaciones, no existe una sola razón para detener esta actividad y lo mejor de todo es que en TOKIO Hotel te comprendemos a la perfección.</p>
          </div>
    </div>
</div>
</div>
</div>
@endsection