@extends('layouts.layoutReserve')

@section('title')
   Tokio Hotel 
@endsection
@section('content')

<div class="container-fluid">
   <div class="row product-sec">
         <div class="col-lg-6 prod-left">
               <div class="hero-image">
                     <img src="{{asset('./img/room/doble.jpg')}}" class="img wow fadeInUp" alt="">
               </div>
         </div>

         <div class="col-lg-6 prod-right">
               <div class="prod-opt">
                     <h3 id="prod-name" class="wow fadeInUp" data-wow-delay="0.4s">Daily Planner 2018/19</h3>
                     <p id="price" class="wow fadeInUp" data-wow-delay="0.5s">USD $30.00</p>

                     <div class="input-row">
                           <input type="radio" id="radio-input-1" checked>
                           <label for="radio-input-1" class="input-helper input-helper--radio wow fadeInUp" data-wow-delay="0.6s">add monogram (+$10.00)</label>

                           <br>

                           <input type="radio" id="radio-input-2">
                           <label for="radio-input-2" class="input-helper input-helper--radio wow fadeInUp" data-wow-delay="0.7s">add gift wrap (+$10.00)</label>
                     </div>

                     <br>

                     <input type="number" placeholder="QTY" class="wow fadeInUp" data-wow-delay="0.8s">

                     <input type="number" placeholder="SIZE" class="wow fadeInUp" data-wow-delay="1s">

                     <div class="add-prod wow fadeInUp" data-wow-delay="1.1s">
                           <a href="#">Add to bag</a>
                     </div>
               </div>
         </div>
   </div>
</div>
@endsection