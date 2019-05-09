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
    			<p> Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles. </p>
    		</div>
    		<div class="col-sm mr-5 ml-5">
    			<img src = "/temp/temp.png" height = 200px>
    			<h2> Opportunity </h2>
    			<p> Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles. </p>
    		</div>
    		<div class="col-sm mr-5 ml-5">
    			<img src = "/temp/temp.png" height = 200px>
    			<h2> Hope </h2>
    			<p> Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles. </p>
    		</div>
       </div>
       <div class = "row" style = "padding:25px!important;">
       	<div class="col-sm ml-5 mr-5">
    			<img src = "/temp/temp.png" height = 200px>
    			<h2> Resiliency </h2>
    			<p> Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles. </p>
    		</div>
    		<div class="col-sm mr-5 ml-5">
    			<img src = "/temp/temp.png" height = 200px>
    			<h2> iNnovation </h2>
    			<p> Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles. </p>
    		</div>
    		<div class="col-sm mr-5 ml-5">
    			<img src = "/temp/temp.png" height = 200px>
    			<h2> Love </h2>
    			<p> Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles. </p>
    		</div>
        </div>

</body>


		</html>
@endsection