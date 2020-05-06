<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/reserve.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.25.3/locale/af.min.js"></script>
    <script src="{{asset('../resources/js/reserve.js')}}"></script>
    <script src="moment.js"></script>
<script>
    moment().format();
</script>
    @yield('content')
</body>
</html>