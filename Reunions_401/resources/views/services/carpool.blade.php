@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
	<div class = "page_header" style = "background-image: url(/Reunions_Splash/1.jpg)!important; height:500px!important;">
		Carpool
  		<div class = "page_header_h3">Wanna ride in style? Cars are good. People are good too.</div>
	</div>
	<div>
		<p>
			Select the “Carpool” option when signing up to share a ride with a fellow event attendee. If you are registering as a carpool driver, please also fill out the “Seats Available” field to let us know how many people to match you with. The average American vehicle emits about 404 grams of CO2 per mile traveled.  Taking one car off the road significantly improves the environmental impact of this event!
		</p>
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