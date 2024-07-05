<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>{{ env('APP_NAME') }}</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
  
  <link rel="stylesheet" href="{{ asset('css/centre.css') }}">

</head>
<body>
  <a class="goback-button" href="{{ URL::previous() }}">Go Back</a>


@foreach ($centres as $centre)
    
<!-- partial:index.partial.html -->
<div class="card">
    <div class="thumbnail"><img class="left" src="{{ $centre->image }}"/></div>
    <div class="right">
      <h1>{{ $centre->name }} </h1>
      <div class="author"><img src="https://img.freepik.com/free-icon/placeholder_318-903608.jpg"/>
        <h2>{{$centre->location}}</h2>
      </div>
      <div class="separator"></div>
      <p>{{  $centre->description }}</p>
    </div>
    @php
        $timeArray = explode(', ', $centre->time);
        

    @endphp
    <h5>{{ $timeArray[0] }}</h5>
    <h6>{{ $timeArray[1] }}</h6>
    
    <div class="sports">
      <p class="sportlist">sports:</p><br>
    @php
        $sports = $centre->sports;
    @endphp
    @foreach ($sports as $sport)
    <div class="sport">
        <h2>{{ $sport->name }}</h2>
      </div>
    @endforeach
      
      
    </div>
    
    
  </div>
  <!-- partial -->

@endforeach


</body>
</html>
