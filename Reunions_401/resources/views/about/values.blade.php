@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
	<div class = "page_header">
		Our Values
  		<div class = "page_header_h3">We're committed to doing the right thing.</div>
	</div>
	<div class="container-fluid">
 		<div class="row " style = "padding:25px!important;">
    		<div class="col-sm ml-5 mr-5">
    			<img src = "/temp/temp.png" height = 200px>
    			<h2> Community </h2>
    			<p> HandyRides is all about the community we build - we value our relationship to our users and our relationship with the community around our events. We make an effort to ensure a product that meets the expectations of everyone it comes in contact with.</p>
    		</div>
    		<div class="col-sm mr-5 ml-5">
    			<img src = "/temp/temp.png" height = 200px>
    			<h2> Accessibility </h2>
    			<p> At HandyRides, we take pride in being transparent about our processes and providing a service that everyone can use. Our website is build to be sleek and easy to use. Through our disruptive platform, we aim to democratize transportation and make it available for those who might otherwise not have access.</p>
    		</div>
    		<div class="col-sm mr-5 ml-5">
    			<img src = "/temp/temp.png" height = 200px>
    			<h2> Responsibility </h2>
    			<p> A key consideration at the top of our team's minds is the environmental impact of our process and product. That's why at the HandyRides office, we employ many state-of-the-art sustainability measures. Furthermore every car that is kept off the road on the way to an event significantly reduces the environmental impact of the event. We hold a strong conviction of responsibility to the environmental and to our users.</p>
    		</div>
       </div>
       <div class = "row" style = "padding:25px!important;">
       	<div class="col-sm ml-5 mr-5">
    			<img src = "/temp/temp.png" height = 200px>
    			<h2> Flexibility</h2>
    			<p> Flexibity is a </p>
    		</div>
    		<div class="col-sm mr-5 ml-5">
    			<img src = "/temp/temp.png" height = 200px>
    			<h2> Innovation </h2>
    			<p> Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles. </p>
    		</div>
    		<div class="col-sm mr-5 ml-5">
    			<img src = "/temp/temp.png" height = 200px>
    			<h2> Efficiency </h2>
    			<p> Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles. </p>
    		</div>
        </div>

</body>


		</html>
@endsection