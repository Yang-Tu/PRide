@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
	<div class = "page_header" style = "background-image: url(/Reunions_Splash/1.jpg)!important; height:500px!important;">
		Carpool
  		<div class = "page_header_h3">Wanna ride in style? Cars are good. People are good too.</div>
	</div>
	<div class = "page_header">
		Uber/Lyft
  		<div class = "page_header_h3">Coming from the airport? We've got you!</div>
	</div>
	<div class = "page_header">
		Party Bus Rental
  		<div class = "page_header_h3">Wanna ride in style? Reconnect with old friends?</div>
	</div>
		<div class = "page_header">
		Last Minute?
  		<div class = "page_header_h3">Didn't sign up in time? No problem!</div>
	</div>
</body>


		</html>
@endsection