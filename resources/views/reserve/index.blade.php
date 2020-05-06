@extends('layouts.layoutReserve')

@section('title')
   Tokio Hotel 
@endsection
@section('content')

    

<div class="container-fluid">
      <nav>
      <div>
            <div class="form-group"> 
                  <label for="example-date-input" class="col-2 col-form-label">Date</label>
                  <div class="col-2">
                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                  </div>
                  <label for="example-date-input" class="col-2 col-form-label">Date</label>
                  <div class="col-2">
            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
            </div>
        </div>
           </div>
        
      <div class="form-group"> 
          
        
        <p id="resultado"></p>
           </div>
      </nav>
           @foreach ($rm as $item)
   <div class="row product-sec">
         <div class="col-lg-6 prod-left">
               <div class="hero-image">
                     <img src="{{asset($item->imagen)}}" class="img wow fadeInUp" alt="">
               </div>
         </div>

         <div class="col-lg-6 prod-right">
               <div class="prod-opt">
                     <h3 id="prod-name" class="wow fadeInUp" data-wow-delay="0.4s">Habitación {{$item->tipo}}</h3>
                     <p id="price" class="wow fadeInUp" data-wow-delay="0.5s">{{$item->pvp}} €</p>

                     
                     
                     

                     <div class="add-prod wow fadeInUp" data-wow-delay="1.1s">
                           <a href="#">Add to bag</a>
                     </div>
               </div>
         </div>
   </div>
</div>
@endforeach
{{-- {{$rm->appends(Request::except('page'))->links()}} --}}
@endsection