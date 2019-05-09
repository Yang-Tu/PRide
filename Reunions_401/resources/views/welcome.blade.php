@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
<img src = "/temp/reunions_benji.png" width = 100%>
<div class = "spacer">
	<h2> Countdown to Reunions! (May 30, 2019) </h2>
	<p id="demo" style="font-size:20px!important;"></p> 
</div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
	  <img src="/Reunions_Splash/1.jpg" style = "opacity:.3;" width = 100% height = 500px>
	  <div class="carousel-caption d-none d-md-block text-left" style= "color: #000000!important;">
	    	<h2> This is slide 1 </h2>
	    	<p>Random thoughts about something and space and time and other things that are relevant to this</p>
	    	<p><a class="btn btn-lg btn-primary" href="#" role="button">Find out more</a></p>
	  		</div>
	</div>
     
    <div class="carousel-item">
      <img src="/Reunions_Splash/4.jpg" style = "opacity:.3;" width = 100% height = 500px>
	  <div class="carousel-caption d-none d-md-block" style= "color: #000000!important;">
	    	<h2> This is slide 2 </h2>
	    	<p>Random thoughts about something and space and time and other things that are relevant to this</p>
	    	<p><a class="btn btn-lg btn-primary" href="#" role="button">Find out more</a></p>
	  		</div>
    </div>
    <div class="carousel-item">
      <img src="/Reunions_Splash/5.jpg" style = "opacity:.3;" width = 100% height = 500px>
	  <div class="carousel-caption d-none d-md-block text-right" style= "color: #000000!important;">
	    	<h2> This is slide 3 </h2>
	    	<p>Random thoughts about something and space and time and other things that are relevant to this</p>
	    	<p><a class="btn btn-lg btn-primary" href="#" role="button">Find out more</a></p>
	  		</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class = "spacer">
    <h2> Our Services </h2>
</div>

<div class="container-fluid">
  <div class="row" style = "background-color: #e8e8e8; padding:25px!important;">
    <div class="col mr-5">
      <img src = "/welcome/carpool.png" height = 170px>
      <br><h2> Carpool </h2>
      <p> Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-secondary" href="/carpool" role="button">Let's ride! </a> </p>
    </div>
    <div class="col">
        <img src = "/welcome/uber.png" height = 170px>
        <br><h2> Uber/Lyft </h2>
        <p> Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-secondary" href="/rideshare" role="button"> Let's connect! </a> </p>
    </div>
    <div class="col ml-5">
      <img src = "/welcome/bus.png" height = 170px>
      <br><h2> Party Bus </h2>
      <p> Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-secondary" href="/rideshare" role="button">Let's party! </a> </p>
    </div>
  </div>
</div>

<div class = "spacer">
    <h2> Another Block of Things </h2>
</div>


	</html>
@endsection