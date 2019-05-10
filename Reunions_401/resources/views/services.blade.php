@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
	 <a name="carpool"><div class = "page_header">
		Carpool
  		<div class = "page_header_h3">Wanna ride in style? Cars are good. People are good too.</div>
	</div></a>
	 <a name="rideshare"><div class = "page_header">
		Uber/Lyft
  		<div class = "page_header_h3">Coming from the airport? We've got you!</div>
	</div></a>

	 <a name="bus"><div class = "page_header">
		Party Bus Rental
  		<div class = "page_header_h3">Wanna ride in style? Reconnect with old friends?</div>
	</div></a>

</body>


		</html>
@endsection