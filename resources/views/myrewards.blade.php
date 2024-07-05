<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>{{ env('APP_NAME') }}</title>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether.min.css'>

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

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
       @auth
       <div class="coin-counter">
        <span id="coin-count">{{ auth()->user()->point }}</span>
        <span class="coin-divider"></span>
        <span class="coin-icon"></span>
      </div>
       @endauth
    <div class="grid">
@foreach ($prixs as $prix)
@php
$pivotData = $prix->pivot; // Access the pivot data for each prix

// Retrieve the prix_code
$prixCode = $pivotData->prix_code;
@endphp

<div class="card">
  <div class="imgBox">
    <img src="{{ $prix->image }}" alt="" class="mouse">
  </div>

  <div class="contentBox">
    <h3>{{ $prix->name }}</h3>
    <h3>Prix Code: <span id="prixCode">{{ $prixCode }}</span></h3>
    <button class="buy" onclick="copyPrixCode()">Copy Prix Code</button>

    <script>
      function copyPrixCode() {
        var prixCode = document.getElementById("prixCode").innerText;

        var tempInput = document.createElement("input");
        tempInput.value = prixCode;
        document.body.appendChild(tempInput);

        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);

        alert("Prix Code copied: " + prixCode);
      }
    </script>
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