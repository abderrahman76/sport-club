<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>{{ env('APP_NAME') }}</title>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css'><link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="{{ asset('css/style3.css') }}">

</head>

<body>
  <!-- partial:index.partial.html -->
  <div id="wrapper">
    <div class="overlay"></div>

    @include('layouts.navbar')

        @if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
@if(isset($error))
    <div class="alert alert-danger">
        {{ $error }}
    </div>
@endif


       @auth
       <div class="coin-counter">
        <div class="box">
    <form name="search" action="{{ route('search') }}" method="post">
      @csrf
        <input type="text" class="input" name="search" onmouseout="this.value = ''; this.blur();">
    </form>
    <i class="fas fa-search"></i>

      </div>
      </div>
       @endauth 
    <div class="grid">
@foreach ($prixs as $prix)
{{-- @php
$pivotData = $prix->pivot; // Access the pivot data for each prix

// Retrieve the prix_code
$prixCode = $pivotData->prix_code;
@endphp --}}

<div class="card">
  <div class="imgBox">
    <img src="{{ $prix->prix->image }}" alt="" class="mouse">
  </div>

  <div class="contentBox">
    <h3 style="font-size: 10px">{{ $prix->user->name }}</h3>
    <h3>{{ $prix->prix->name }}</h3>
    <h3>Prix Code: <span id="prixCode">{{ $prix->prix_code }}</span></h3>
    <a class="buy" href="{{route('claim',[$prix])}}">claim</a>

    
  </div>
</div>

@endforeach
     


     



      



      

      <!-- partial -->
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