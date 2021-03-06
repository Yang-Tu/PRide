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
	    	<h2> Match Handling</h2>
	    	<p>Based on user preferences, our intelligent matching algorithm uses powerful data clustering and regression techniques to make sure you are satisfied with your matches..</p>
	    	<p><a class="btn btn-lg btn-primary" href="#" role="button">Find out more</a></p>
	  		</div>
	</div>
     
    <div class="carousel-item">
      <img src="/Reunions_Splash/4.jpg" style = "opacity:.3;" width = 100% height = 500px>
	  <div class="carousel-caption d-none d-md-block" style= "color: #000000!important;">
	    	<h2> Sure-Thing Guarantee </h2>
	    	<p>We will cover all of our users out of pocket expenses and provide transportation guidance if they get stuck due to our errors.</p>
	    	<p><a class="btn btn-lg btn-primary" href="#" role="button">Find out more</a></p>
	  		</div>
    </div>
    <div class="carousel-item">
      <img src="/Reunions_Splash/5.jpg" style = "opacity:.3;" width = 100% height = 500px>
	  <div class="carousel-caption d-none d-md-block text-right" style= "color: #000000!important;">
	    	<h2> Multidimensional Savings</h2>
	    	<p>Not only is it cheaper for all travelers than alternatives, but  you also reduce CO2 emissions, traffic congestion, and meet new friends!</p>
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
      <p style="margin:30px!important; margin-top:20px!important;"> Wanna ride in style? Cars are good. People are good too. Robots are bad.</p>
      <p><a class="btn btn-secondary" href="/services#carpool" role="button">Let's ride! </a> </p>
    </div>
    <div class="col">
        <img src = "/welcome/uber.png" height = 170px>
        <br><h2> Uber/Lyft </h2>
        <p style="margin:30px!important; margin-top:20px!important;">Coming from the airport? We've got you! We are so into ride-sharing here.</p>
        <p><a class="btn btn-secondary" href="/services#rideshare" role="button"> Let's connect! </a> </p>
    </div>
    <div class="col ml-5">
      <img src = "/welcome/bus.png" height = 170px>
      <br><h2> Party Bus </h2>
      <p style = "margin:30px!important; margin-top:20px!important;">Wanna ride in style? Reconnect with old friends? This is your chance!</p>
      <p><a class="btn btn-secondary" href="/services#bus" role="button">Let's party! </a> </p>
    </div>
  </div>
</div>

<div class = "spacer">
    <h2> Customer Testimonials </h2>
</div>

<div class="container-fluid">
  <div class="row" style = "background-color: #e8e8e8; padding:30px!important; margin-bottom:10px!important">
    <div class="col mr-5 ml-5"> <div class ="page_header_h3" style="margin:50px!important" >"Wow incredible, I love this so much. I liked Princeton before, but now I truly love it because I am <i>that</i> committed to ride-sharing. Now, we just gotta bring back the <a href = "https://www.pinterest.com/pin/62346776063085820/"> reusable beer tins </a>, and then we'll be good."</div>
    <br><p style="text-align:right">Nick<br>Texarkana, TX</p> </div>

    <div class = "col mr-5 ml-5"> <div class ="page_header_h3" style="margin:50px!important">"Last year, I didn't make it to reunions, but this year, it was so easy to get there that I really had no excuse not to go."</div>
    <br><p style="text-align:right">Chris<br>Farmington, CT</p> </div>


    <div class="row" style = "background-color: #e8e8e8; padding:30px!important;margin-top:10px!important" >
      <div class = "col mr-5 ml-5"> <div class ="page_header_h3" style = "margin:50px!important">"Honestly the best ride-sharing service I've seen. So easy to use I told my wife to pass the sweet and sour chicken.  WHEW!"</div>
      <br><p style="text-align:right">Alain<br>Princeton, NJ</p> </div>

       <div class = "col mr-5 ml-5"> <div class ="page_header_h3" style="margin:50px!important">"Elegant design and easy of access. The site looks great and I loved my matches!"</div>
      <br><p style="text-align:right">Josh<br>New York, NY</p> </div>
    </div>
</div>


	</html>
@endsection