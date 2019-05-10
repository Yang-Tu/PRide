@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
	<div class = "page_header">
		Our Approach
  		<div class = "page_header_h3">Refined. Innovative. Deluxe. Elegant.</div>
	</div>

	<div class="container px-lg-5" style = "text-align:center">

	      <div class="row align-items-center justify-content-center mb-5">
	        <div class="col-sm-4">
	          <img src = "/icons/method1.png" width = 100%>
	        </div>
	        <div class="col-sm-6">
	          <h2> Step 1: Sign Up </h2>
	          First, sign up and select your prefered service so we know which bucket to place you into for optimal matching. For a description of different ways to ride with us, check out our services page. 
	        </div>
	      </div>

	    <div class="row align-items-center justify-content-center mb-5">
	        <div class="col-sm-4">	      
	          <img src = "/icons/method2.png" width = 100%>
	        </div>
	       <div class="col-sm-6">
	          <h2> Step 2: Matching Algorithm </h2>
	          Now sit back, and let our matching algorithm do the work for you! We will pair you with a fellow rider that most closely matches your preferences and location.  Our strategy is much like a driverless vehicle--you're in the front seat, but you don't have to do any of the work.
	        </div>
	      </div>

	    <div class="row align-items-center justify-content-center mb-5">
	        <div class="col-sm-4">
 				<img src = "/icons/method3.png"width = 100%>
	        </div>
	        <div class="col-sm-6">
	          <h2> Step 3: You've got a match! </h2>
	          Once the deadline to sign up for your event is over, we'll e-mail you notifying that you've got matches. Then, you can login and connect your new friends.
	        </div>
	      </div>

	    <div class="row align-items-center justify-content-center mb-5">
	        <div class="col-sm-4">
	        		      
	          <img src = "/icons/method4.png" width = 100%>
	        </div>
	        <div class="col-sm-6">
	          <h2> Step 4: Ride in style. </h2>
	          You are all set to enjoy your trip with newfound convenience and the knowledge that you have made an impact in reducing your carbon footprint. We hope you have fun at your event!
	        </div>
	    </div>
	</div>

</body>


		</html>
@endsection