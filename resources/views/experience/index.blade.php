@extends('layouts.layoutExperience')

@section('title')
   Tokio Hotel 
@endsection
@section('content')
<nav>
    <span id="brand">
        <a href="{{url('/')}}"><img src="{{asset('./img/home/lg.png')}}" width="120" height="120"></a>
    </span>
<div id="toggle">
    <div class="span"><img src="{{asset('./img/home/iconMenu.png')}}" width="30" height="30"></div>
</div>
</nav>

<div id="resize">
<div id="close-btn"><img src="{{asset('./img/home/iconClose.png')}}" width="30" height="30"></div>
    <ul id="menu">
        <li><a href="">Inicio</a></li>
        <li><a href="">Experiencias</a></li>
        <li><a href="">Reservas</a></li>
        <li><a href="">Contacto</a></li>
        <li><a href="{{-- {{route('login')}} --}}">Iniciar sesión</a></li>
    </ul>
</div>
@endsection