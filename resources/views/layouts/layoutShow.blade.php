<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Abel|Advent+Pro|Alegreya|Alice|Amaranth|Arapey|Aref+Ruqaa|Bentham|Bubbler+One|Cantata+One|Chathura|Convergence|Domine|Droid+Serif|Gentium+Basic|Lato|Libre+Baskerville|Lora|Marvel|Merriweather|Nunito|Old+Standard+TT|Open+Sans|Oranienbaum|Oswald|Prata|Quicksand|Rufina|Ruluko|Rum+Raisin|Saira|Saira+Condensed|Saira+Extra+Condensed|Sansita|Snippet|Text+Me+One|Titillium+Web|Vidaloka|Wire+One" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/show.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <script src="{{asset('../resources/js/reserve.js')}}"></script>
    @yield('content')
</body>
</html>