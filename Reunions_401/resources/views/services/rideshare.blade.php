@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
	<div class = "page_header">
		Uber/Lyft
  		<div class = "page_header_h3">Coming from the airport? We've got you!</div>
	</div>
	<div>
		<p>
			Select the “Uber/Lyft” option when signing up to find a group to split an Uber or Lyft car with.  This option is perfect if you are flying in and need a cost-efficient ride from a local airport!
		</p>
	</div>
</body>


		</html>
@endsection