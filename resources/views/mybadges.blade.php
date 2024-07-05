<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>{{ env('APP_NAME') }}</title>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="{{ asset('css/mybadge.css') }}">

</head>
<body>
    <!-- partial:index.partial.html -->
    <div id="wrapper">
      <div class="overlay"></div>
  
      @include('layouts.navbar')




	<div class="grid-container">
		@foreach ( $badges as $badge)
			<!-- partial:index.partial.html -->
<article class="profile">
	<div class="profile-image">
		<img src="{{ $user->profile_photo_url }}" />
	</div>
	<h2 class="profile-username">{{ $user->name }}</h2>
	<small class="profile-user-handle">
		@if ($user->isAdmin)
			member
		@else
			guest
		@endif
	</small>
	<div class="profile-actions">
		<h3 style="font-size: 20px" class="profile-username">{{ $badge->name }}</h3>
	</div>
	<div class="profile-links">
		<small class="profile-user-handle">{{ $badges->first()->pivot->user_code }}</small>
		
	</div>
</article>
<!-- partial -->

		@endforeach

</div>

<!-- Page Content -->
<div id="page-content-wrapper">
  <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
    <span class="hamb-top"></span>
    <span class="hamb-middle"></span>
    <span class="hamb-bottom"></span>
  </button>
</div>
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js'></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
