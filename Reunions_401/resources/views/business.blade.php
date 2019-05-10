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
		<img src="/icons/benji.png" height = 150 width = 150>
		<img src="/icons/yang.png" height = 150 width = 150>
		<img src="/icons/dee.png" height = 150 width = 150>
		<img src="/icons/alex.png" height = 150 width = 150>

	<br><br>
		Hire us for wedding transportation!<br>
		<img src="/icons/wedding.png" height = 300 width = 300>
	<br><br>
		Hire us for the best birthday bash! <br>
		<img src = "/icons/birthday.png" height = 300 width = 300>
	<br><br>
		Expertise at held in your hand for your next bar mitzvah<br>
		<img src="/icons/barmitzvah.png" height = 250 width = 300>
	<br>
</body>


		</html>
@endsection