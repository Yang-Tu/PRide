@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
	<div class = "page_header">
		Hire us!
  		<div class = "page_header_h3">We'd love to make transportation easier (and more fun) at your event!</div>
	</div>
	<br><br>
		We've got a great team! <br>
		<img src="/jokes/benji.jpg" height = 300 width = 150>

	<br><br>
		A wealth of knowledge and talent! <br>
		<img src="/jokes/alex.jpg" height = 500 width = 300>
		<img src="/jokes/alex3.PNG" height = 500 width = 300>
		<img src="/jokes/alex5.JPG" height = 500 width = 300>
	<br><br>
		Hire us for optimal solution! <br>
		<img src = "/jokes/yang.jpg" height = 300 width = 180>
	<br><br>
		Expertise at held in your hand<br>
		<img src="/jokes/DD.jpg" height = 300 width = 300>
	<br>
</body>


		</html>
@endsection