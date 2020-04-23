<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="{{asset('css/experience.css')}}">
    <link rel="stylesheet" href={{asset("css/animate.css")}}>
    <script src="{{asset('../resources/js/experience.js')}}"></script>
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src={{asset("js/wow.min.js")}}></script>
    <script>
        new WOW().init();
    </script>
    @yield('content')
</body>
</html>