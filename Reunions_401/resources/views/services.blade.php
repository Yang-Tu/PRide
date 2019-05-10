@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
	 <a name="carpool"><div class = "page_header">
		Carpool
  		<div class = "page_header_h3">Wanna ride in style? Cars are good. People are good too.</div>
	</div></a>
	<div class="service-text">
		<p>
			<img src = "/welcome/carpool.png" height = 140px align="left">
			Select the “Carpool” option when signing up to share a ride with a fellow event attendee. If you are registering as a carpool driver, please also fill out the “Seats Available” field to let us know how many people to match you with. The average American vehicle emits about 404 grams of CO2 per mile traveled.  Taking one car off the road significantly improves the environmental impact of this event!		
		</p>
	</div>
	 <a name="rideshare"><div class = "page_header">
		Uber/Lyft
  		<div class = "page_header_h3">Coming from the airport? We've got you!</div>
	</div></a>
	<div class="service-text">
		<p>
			<img src = "/welcome/uber.png" height = 140px align="right">

			<br/>
			Select the “Uber/Lyft” option when signing up to find a group to split an Uber or Lyft car with.  This option is perfect if you are flying in and need a cost-efficient ride from a local airport!
		</p>
	</div>

	 <a name="bus"><div class = "page_header">
		Party Bus Rental
  		<div class = "page_header_h3">Wanna ride in style? Reconnect with old friends?</div>
	</div></a>
	<div class="service-text">
		<p>
			<img src = "/welcome/bus.png" height = 140px align="left">
			<br/>
			Select the “Party Bus” option when signing up to experience our most deluxe option.  You will be matched with other event attendees wanting to share a luxury limo or bus. Reconnect with old friends and cherished memories on your way to the event!
		</p>
	</div>

</body>

</html>
@endsection