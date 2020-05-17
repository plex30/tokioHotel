@extends('layouts.layoutHome')

@section('title')
   Tokio Hotel 
@endsection
@section('content')

<div class="wrapper">
    
    <nav>
    <span id="brand">
    <a href=""><img src="{{asset('./img/home/lg.png')}}" width="120" height="120"></a>
    </span>

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
                            
                            @if (auth()->id() == '2')
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('user.edit',Auth::user()) }}">
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
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('user.edit',Auth::user()) }}">
                                    {{ __('Editar mi perfil') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}">
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
    <div id="toggle">
        <div class="span"><img src="{{asset('./img/home/iconMenu.png')}}" width="30" height="30"></div>
    </div>
</nav>
    


<div id="resize">
    <div id="close-btn"><img src="{{asset('./img/home/iconClose.png')}}" width="30" height="30"></div>
        <ul id="menu">
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
                                
                                @if (auth()->id() == '2')
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Cerrar Sesión') }}
                                </a> 
                                @else
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}">
                                        {{ __('Editar mi perfil') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">
                                        {{ __('Mis reservas') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>
                                @endif
                                

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
            @endguest
        </ul>
</div>
    <section class="contain">
        <div class="hero"></div>
    </section>
    

    <div class="container-fluid">
        <br><br><br>
        <h6><img src="{{asset('./img/home/logo1.png')}}" width="220" height="120"><br>Madrid</h6>
        <br>
        <div class="textHome">
            <h4 class="wow fadeInUp" data-wow-delay="0.3s">EXCLUSIVOS PLACERES<br>
            DEFINIDOS POR LA AUTENTICIDAD,<br>
            EN EL CORAZÓN DE LA CIUDAD</h4><br>
            <p class="wow fadeInUp" data-wow-delay="0.4s">TOKIO Hotel se encuentra en el centro de la ciudad,<br>
                a pocos pasos de la Gran Vía.<br>
                En contraste con su gran fachada, el hotel de 17 pisos ofrece un ambiente relajado <br>
                con un sentido de intimidad y sorpresa, cualidades que se basan en la hospitalidad tradicional japonesa.<br>
                Cada piso es una estancia exclusiva, accesible solo para los huéspedes que se alojan allí,<br>
                con un personal dedicado para satisfacer todas sus necesidades,<br> así como para mantener
                las elegantes costumbres que se han honrado durante siglos en la posada tradicional japonesa: el ryokan.</p>
        </div>
        <div class="vertical"></div>
        
        <br>

        <div class="whitespace"></div>

        <div class="whitespace"></div>

        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselIndicators" data-slide-to="1"></li>
              <li data-target="#carouselIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
              <img class="d-block w-100 img-circle" src="./img/home/slide1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 img-circle" src="./img/home/slide2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 img-circle" src="./img/home/slide3.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
            <br>
        <div class="whitespace"></div>
        <div class="row">
            <div class="col-lg-8"></div>
            <div class="col-lg-4 photo photo1 wow fadeInRight"></div>

        </div>

        <div class="whitespace"></div>
        <div class="row">
            <div class="col-lg-4 photo photo2 wow fadeInLeft"></div>
            <div class="col-lg-6"></div>
        </div>

        <div class="whitespace"></div>
        <div class="row">
            <div class="col-lg-8"></div>
            <div class="col-lg-4 photo photo3 wow fadeInRight"></div>
            <div class="col-lg-3"></div>
        </div>

        <div class="whitespace"></div>
        <div class="row">
            
            <div class="col-lg-4 photo photo4 wow fadeInLeft"></div>
            <div class="col-lg-6"></div>
        </div>
    </div>
        <div class="whitespace"></div>
        <div class="footer">

            <div class="cotainer">
                <br><br>
                <div class="collab">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="wow fadeInUp">Información de interés</p>
                        </div>
                    </div>
                </div>
                <br>

                <div class="hr">
                    <div class="row"></div>
                </div>
                <br><br>

                <div class="info">
                    <div class="row">

                        <div class="col-lg-4" id="personal">
                            <p class="wow fadeInUp">Encuentranos</p>
                            <h4 class="wow fadeInUp" data-wow-delay="0.2s">TOKIO Hotel</h4>
                            <h4 class="wow fadeInUp" data-wow-delay="0.2s">C/ Real 404</h4>
                            <h4 class="wow fadeInUp" data-wow-delay="0.2s">Madrid</h4>
                            <br><br>
                        </div>

                        <div class="col-lg-4" id="media">
                            <p class="wow fadeInUp" data-wow-delay="0s">Síguenos</p>
                            <ul>
                                <li id="fb" class="wow fadeInUp" data-wow-delay="0.4s" ><img src="{{asset('./img/home/fb.png')}}" width="30" height="30"></li>
                                <li id="ig" class="wow fadeInUp" data-wow-delay="0.6s"><img src="{{asset('./img/home/ig.png')}}" width="65" height="37"></li>
                                <li id="tw" class="wow fadeInUp" data-wow-delay="0.8s"><img src="{{asset('./img/home/tw.png')}}" width="30" height="30"></li>
                            </ul>
                            <br><br>
                        </div>

                        <div class="col-lg-4" id="address">
                            <p class="wow fadeInUp">Contacta</p>
                            <h4 class="wow fadeInUp" data-wow-delay="0.2s">tokio@gmail.com</h4>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <br><br><br><br>
    </div>

</div>


@endsection