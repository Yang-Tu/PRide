@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
	<div class = "page_header">
		Our Approach
  		<div class = "page_header_h3">Simple. Elegant. Successful.</div>
	</div>

	<div class="container px-lg-5" style = "text-align:center">

	      <div class="row align-items-center justify-content-center mb-5">
	        <div class="col-sm-4">
	          <img src = "/jokes/alex4.jpg" width = 100%>
	        </div>
	        <div class="col-sm-6">
	          <h2> Step 1: Sign Up </h2>
	          First, sign up and place your preferences so we know which bucket to place you into for optimal matching. 
	        </div>
	      </div>

	    <div class="row align-items-center justify-content-center mb-5">
	        <div class="col-sm-4">	      
	          <img src = "/jokes/alex4.jpg" width = 100%>
	        </div>
	       <div class="col-sm-6">
	          <h2> Step 2: Matching Algorithm </h2>
	          Now sit back, and let the matching algorithm do the work for you! Our strategy is much like an autonomous vehicle-- you're in the front seat, but you don't have to do any of the work!
	        </div>
	      </div>

	    <div class="row align-items-center justify-content-center mb-5">
	        <div class="col-sm-4">
 				<img src = "/jokes/alex4.jpg" width = 100%>
	        </div>
	        <div class="col-sm-6">
	          <h2> Step 3: You've got a match! </h2>
	          Once the deadline to sign up for your event is over, we'll e-mail you notifying that you've got some matches. Then, you can log-in and view your new buds!
	        </div>
	      </div>

	    <div class="row align-items-center justify-content-center mb-5">
	        <div class="col-sm-4">
	        		      
	          <img src = "/jokes/alex4.jpg" width = 100%>
	        </div>
	        <div class="col-sm-6">
	          <h2> Step 4: Ride in style. </h2>
	           We hope you have fun at your event!
	        </div>
	    </div>
	</div>

</body>


		</html>
@endsection