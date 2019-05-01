@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>

    <div class="slideshow-container">

		<div class="mySlides fade">
		  <img src="slide1.png" style="width:100%">
		  <div class="text">Caption Text</div>
		</div>

		<div class="mySlides fade">
		  <img src="slide2.png" style="width:100%">
		  <div class="text">Caption Two</div>
		</div>

		<div class="mySlides fade">
		  <img src="slide3.png" style="width:100%">
		  <div class="text">Caption Three</div>
		</div>

		<div class="mySlides fade">
		  <img src="slide4.png" style="width:100%">
		  <div class="text">Caption Three</div>
		</div>

		<div class="mySlides fade">
		  <img src="slide5.png" style="width:100%">
		  <div class="text">Caption Three</div>
		</div>
	</div>

	<div style="text-align:center">
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		   <span class="dot"></span> 
		    <span class="dot"></span> 
	</div>
		<script>
			
		</script>
		

		</html>
@endsection