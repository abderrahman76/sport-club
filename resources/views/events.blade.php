<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>{{ env('APP_NAME') }}</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'><link rel="stylesheet" href="{{ asset('css/events.css') }}">
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether.min.css'>
</head>
<body>
	<div id="wrapper">
		<div class="overlay"></div>
		 
		@include('layouts.navbar')

		@auth
		@php
		$user= auth()->user();
		$premiumAdhesion = $user->adhesion()->where('name', 'premium')->first();
	@endphp
		@endauth

<!-- partial:index.partial.html -->
<section class="dark">
	<div class="container py-4">
		<h1 class="h1 text-center" id="pageHeaderTitle">upcoming events</h1>
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
@foreach ($events as $event)

<article class="postcard dark blue">
	<a class="postcard__img_link" href="#">
		<img class="postcard__img" src="{{ $event->image }}" alt="Image Title" />
	</a>
	<div class="postcard__text">
		<h1 class="postcard__title blue">{{ $event->name }}</h1>
		<div class="postcard__subtitle small">
			<time datetime="2020-05-25 12:00:00">
				<i class="fas fa-calendar-alt mr-2"></i>{{ date("D, M jS Y", strtotime($event->date)) }}
			</time>
		</div>
		<div class="postcard__bar"></div>
		<div class="postcard__preview-txt">{{ $event->description }}</div>
		<ul class="postcard__tagbox">
			<li class="tag__item"><i class="fas fa-home mr-2"></i>{{ $event->centre->name }}</li>
			<li class="tag__item"><i class="fas fa-users mr-2"></i>{{ $event->maxParticipant }}</li>
			

			<li class="tag__item"><i class="fas fa-gem  mr-2"></i>{{ $event->points }}</li>
				@auth
					@php
					 $user = auth()->user();
                     $hasBadge = $user->event()->where('evenement_id', $event->id)->exists();
					// dd($hasBadge)
				@endphp
				@if ($hasBadge)
				<a href="{{ route('mybadges') }}"><i class="fas fa-play mr-2"></i>view badge</a>

				@else
				@if ($event->isPremium)
			<li class="tag__item"><i class="fas fa-lock mr-2"></i>PREMIUM</li>
				
			@if ($premiumAdhesion)
				<li class="tag__item play blue">
					<a href="{{ route('participate', ['event' => $event]) }}"><i class="fas fa-play mr-2"></i>register</a>
					</li>
				@else
				<a href="#"><i class="fas fa-play mr-2"></i>for premium members only</a>

				@endif
			@else
			<li class="tag__item"><i class="fas fa-lock mr-2"></i>PUBLIC</li>
			<li class="tag__item play blue">
			<a href="{{ route('participate', ['event' => $event]) }}"><i class="fas fa-play mr-2"></i>register</a>
			</li>

			@endif
				

				@endif
				
				
				@else
				<li class="tag__item play blue">

				<a href="{{ route('login') }}"><i class="fas fa-play mr-2"></i>register</a>
				</li>
				@endauth
			
		</ul>
	</div>
</article>

@endforeach
		
</section>

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
        <script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js'></script>
        <script  src="{{ asset('js/script.js') }}"></script>
    </div>
<!-- partial -->
  
</body>
</html>
