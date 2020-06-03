@extends('layouts.layoutReserve')

@section('title')
   Tokio Hotel 
@endsection
@section('content')
  <div class="container box" style="width: 970px;">
   <h1>Nombre: {{ $name }} </h1>
   <h1>Email: {{ $mail }} </h1>
   <h1>Mensaje: {{ $msg }}</h1>
  </div>
@endsection
