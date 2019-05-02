@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
	Why Us ?
	<br><br>
		We've got a great team! <br>
		<img src="benji.jpg" height = 300 width = 150>

	<br><br>
		A wealth of knowledge and talent! <br>
		<img src="alex.jpg" height = 500 width = 300>
	<br><br>
		Hire us for optimal solution! <br>
		<img src = "yang.jpg" height = 300 width = 180>
	<br>
</body>


		</html>
@endsection