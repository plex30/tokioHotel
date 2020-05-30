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
                            <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Bienvenido/a &nbsp; {{ Auth::user()->firstname }} <span class="caret"></span>
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
    <section class="contain">
        <div class="hero"></div>
    </section>
    @if(Session::get('message'))
    <script>
        $( document ).ready(function() {
        $('#myModal').modal('toggle')
        
    });
    </script>
    
      @endif

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

        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselIndicators" data-slide-to="1"></li>
              <li data-target="#carouselIndicators" data-slide-to="2"></li>
              <li data-target="#carouselIndicators" data-slide-to="3"></li>
              <li data-target="#carouselIndicators" data-slide-to="4"></li>
              <li data-target="#carouselIndicators" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
              <img class="d-block w-100 img-circle" src="{{asset('./img/home/slide1.jpg')}}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 img-circle" src="{{asset('./img/home/slide5.jpg')}}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 img-circle" src="{{asset('./img/home/slide3.jpg')}}" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 img-circle" src="{{asset('./img/home/slide4.jpg')}}" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 img-circle" src="{{asset('./img/home/slide2.jpg')}}" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 img-circle" src="{{asset('./img/home/slide6.jpg')}}" alt="Third slide">
              </div>
            </div>
            
          </div>
            <br>
        <div class="whitespace"></div>
        <div class="row">
            <div class="col-lg-8 wow fadeInLeft" id="txt1">
                Nuestras habitaciones cuentan con camas dobles, suelo de tatami y sofás con marcos de ciprés ornamentados.<br> Cada una es un estancia contemporánea decorada con artesanía tradicional japonesa.<br> Los huéspedes pueden relajarse sumergiéndose en la bañera profunda ubicada en el baño, que también está provisto con un lavabo y una cabina de ducha.<br>Además disfrutando de la cálida luz del sol que se filtra a través de las pantallas de papel shoji que adornan las ventanas de la sala de estar.
            </div>
            <div class="col-lg-4 photo photo1 wow fadeInRight"></div>

        </div>

        <div class="whitespace"></div>
        <div class="row">
            <div class="col-lg-4 photo photo2 wow fadeInLeft"></div>
            <div class="col-lg-8 wow fadeInRight" id="txt2">Cuando te pones el kimono que te han dejado en la habitación, notas el silencio.<br> Es un silencio elegante que impregna el ryokan, acentuando los detalles, como las sombras estéticas que se forman en el suelo de tatami a medida que la luz del sol atraviesa el entramado con diseño de komon que cubre el edificio.<br> Cada elemento estimula los sentidos, animándote a aventurarte a recorrer el hotel mientras vistes tu kimono.</div>
        </div>

        <div class="whitespace"></div>
        <div class="row">
            <div class="col-lg-8 wow fadeInLeft" id="txt1">Desde el momento que entras en el ryokan, te sumerges en un mundo diferente.<br> Es un mundo donde uno está constantemente envuelto en el aroma de sándalo entretejido en el tatami,<br>donde se recuerda la belleza de las estaciones a través de espectaculares arreglos florales.<br> La iluminación suave, los kimonos suaves y la ropa de cama de felpa inducen la relajación, mientras que las conversaciones en el ochanoma y la comida elaborada en torno a manjares menos conocidos de la cocina japonesa proporcionan una estimulación jamás experimentada.</div>
            <div class="col-lg-4 photo photo3 wow fadeInRight"></div>
            <div class="col-lg-3"></div>
        </div>

        <div class="whitespace"></div>
        <div class="row">
            
            <div class="col-lg-4 photo photo4 wow fadeInLeft"></div>
            <div class="col-lg-8 wow fadeInRight" id="txt2">Te puedes sumergir en un baño termal cubierto. Las densas aguas salinas tienen un efecto energizante.<br> Sientes una profunda vitalidad recorriendo tu cuerpo. Un túnel se aleja del baño; lo atraviesas y sales al baño al aire libre. Una suave brisa nocturna sopla a través del techo abierto.<br> Miras al cielo y contemplas la oscuridad de la noche, casi intachable por el resplandor de las luces de la gran ciudad.</div>
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
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">¡Datos Actualizados!</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p>{{Session::get('message')}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tokio Hotel</button>
        </div>
      </div>
      
    </div>
  </div>

@endsection