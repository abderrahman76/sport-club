<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>{{ env('APP_NAME') }}</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

<!-- Google Fonts -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Questrial&display=swap'><link rel="stylesheet" href="{{ asset('css/sport.css') }}">
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether.min.css'>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container" style="  background-image: url({{ $sport->image }});">
  <h1>{{ $sport->name }}</h1>
  <p class="paragraph">{{ $sport->description }}</p>
  <p><strong class="title">schedule:</strong> {{ $sport->schedule }}</p>
  <p><strong class="title">centres:</strong>
  @foreach ($sport->centres as $centre)
      {{ $centre->name }},
  @endforeach
  </p>
  <a href="#stadiums" class="btn btn-secondary">start membership</a>
</div>

<!-- <div class="blank"></div> -->

@php
$basicAdhesion = $sport->adhesions()->where('name', 'BASIC')->first();
$standardAdhesion = $sport->adhesions()->where('name', 'STANDARD')->first();
$premiumAdhesion = $sport->adhesions()->where('name', 'PREMIUM')->first();
if (auth()->check()) {
  $user = auth()->user();
$hasAdhesion = $user->adhesion()->where('sport_id', $sport->id)->exists();
$Adhesion = $user->adhesion()->where('sport_id', $sport->id)->first();

}else{
  $Adhesion = null;
$hasAdhesion = false;
}


//  dd($hasAdhesion);
@endphp

<div class="blank"></div>

@if(session('success'))
		<div class="alert alert-success">
			{{ session('success') }}
		</div>
		@endif
		
		@if(session('error'))
		<div class="alert alert-danger">
			{{ session('error') }}
		</div>
		@endif
<!-- partial -->

<div class="second">

<div class='containerr ' id="stadiums">
  <!-- Card 1 -->
  @if ($basicAdhesion !== null)
      
  
  <div class='card'>
    <div class='card__info' style='background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ_uWWWmIuUC_YLcC5Tt2sM4AUBz0uZSNiAQ&usqp=CAU)'>
      <h2 class='card__name'>{{ $basicAdhesion->name }}</h2>
      <p class='card__price' style='color: var(--color12)'>{{ $basicAdhesion->prix }}$ <span class='card__priceSpan'>/month</span></p>
    </div>
    <div class='card__content' style='border-color: var(--color07)'>
      <div class='card__rows'>
        <p class='card__row'>+{{$basicAdhesion->points}} points chaque mois</p>

       @foreach ($basicAdhesion->avantage as $avantage)
       <p class='card__row'>{{$avantage->contenu}}</p>

       @endforeach
      </div>
      @if ($hasAdhesion)
          
      @if ($Adhesion->name == $basicAdhesion->name)
      <a href="#" class='card__link' style='background-color:#03b9d189'>current plan</a>
      @else
      <a href="{{ route('session2',[$basicAdhesion]) }}" class='card__link' style='background-color:#03b9d189'>UPGRADE</a>
      @endif
      @else
      <a href="{{ route('session',[$basicAdhesion]) }}" class='card__link' style='background-color:#03b9d189'>PURCHASE</a>
      @endif
    </div>
  </div>
  @endif

  <!-- Card 2 -->
  
  @if ($standardAdhesion !== null)
      
  <div class='card'>
    <div class='card__info' style='background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTduAamrAFYWB0dluSSP3iFi4VpR4kYOotgYg&usqp=CAU)'>
      <h2 class='card__name'>{{ $standardAdhesion->name }}</h2>
      <p class='card__price' style='color: var(--color06)'>{{ $standardAdhesion->prix }}$ <span class='card__priceSpan'>/month</span></p>
    </div>
    <div class='card__content' style='border-color: var(--color06)'>
      <div class='card__rows'>
        <p class='card__row'>+{{$standardAdhesion->points}} points chaque mois</p>

        @foreach ($standardAdhesion->avantage as $avantage)
       <p class='card__row'>{{$avantage->contenu}}</p>

       @endforeach
      </div>
      @if ($hasAdhesion)
          
      @if ($Adhesion->name == $standardAdhesion->name)
      <a href="#" class='card__link' style='background-color:#b00303'>current plan</a>
      @else
      <a href="{{ route('session2',[$standardAdhesion]) }}" class='card__link' style='background-color:#b00303'>UPGRADE</a>
      @endif
      @else
      <a href="{{ route('session',[$standardAdhesion]) }}" class='card__link' style='background-color:#b00303'>PURCHASE</a>
      @endif
        </div>
  </div>
  @endif

  <!-- Card 3 -->

  @if ($premiumAdhesion !== null)
      
  <div class='card'>
    <div class='card__info' style='background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9mfPTmyTyd68Tj5gvP_xAKHdw_xrG48-uxg&usqp=CAU)'>
      <h2 class='card__name'>{{ $premiumAdhesion->name }}</h2>
      <p class='card__price' style='color: var(--color05)'>{{ $premiumAdhesion->prix }}$  <span class='card__priceSpan'>/month</span></p>
    </div>
    <div class='card__content' style='border-color: var(--color05)'>
      <div class='card__rows'>
        <p class='card__row'>+{{$premiumAdhesion->points}} points chaque mois</p>
        @foreach ($premiumAdhesion->avantage as $avantage)
       <p class='card__row'>{{$avantage->contenu}}</p>

       @endforeach
      </div>
      @if ($hasAdhesion)
          
      @if ($Adhesion->name == $premiumAdhesion->name)
      <a href="#" class='card__link' style='background-color:#3f008c'>current plan</a>
      @else
      <a href="{{ route('session2',[$premiumAdhesion]) }}" class='card__link' style='background-color:#3f008c'>UPGRADE</a>
      @endif
      @else
      <a href="{{ route('session',[$premiumAdhesion]) }}" class='card__link' style='background-color:#3f008c'>PURCHASE</a>
      @endif
    </div>
  </div>
  @endif
  
  
</div>
@if ($hasAdhesion)
<div class="button-container">
  <a href="{{ route('cancel',[$sport]) }}" class="cancel-button">Cancel Membership</a>
</div>
@endif
</div>

<div id="wrapper">
  <div class="overlay"></div>
   
  @include('layouts.navbar')


       <!-- Page Content -->
       <div id="page-content-wrapper">
           <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
               <span class="hamb-top"></span>
         <span class="hamb-middle"></span>
       <span class="hamb-bottom"></span>
           </button>
          
       </div>
       <!-- /#page-content-wrapper -->
       

       <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
       <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
       <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
       <script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js'></script><script  src="{{ asset('js/script.js') }}"></script>
   </div>
</body>
</html>
