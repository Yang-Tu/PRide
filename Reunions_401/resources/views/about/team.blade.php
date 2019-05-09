@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
	<div class = "page_header">
		Meet the Team
  		<div class = "page_header_h3">Princeton students helping Princeton alums get back to Nassau Hall.</div>
	</div>

	<div class = "container px-lg-5">
		<div class="row px-lg-5 ml-3 mt-5 mb-5 align-items-center" style = "background:#69858c">
			<div class = "spacer">
			<h2 style = "font-size:40px"> Leadership Team </h2>
		</div>
		</div>
		<div class="row px-lg-5 mt-5 mb-5 align-items-center"  style = "text-align:left">
		<div class="col-6 col-md-3 px-lg-3" style = "text-align:right"><img src = "/temp/temp.png" height = 150px></div>
	  	<div class="col-12 col-sm-6 col-md-9 px-lg-5"><h2>Benji Rosenblatt</h2>
	  		<h3>Chief Executive Officer</h3>
	  		<p>Mr. Rosenblatt is currently the Chief Executive Officer of HandyRides. He is a junior in the Operations Research and Financial Engineering department at Princeton University. He oversees the development of the HandyRides business operations and leads the business development team. Having taken ORF467, he brings unparalleled experience in transportation systems and ridesharing. </p>
	  	</div>
	  </div>

		<div class="row px-lg-5 mt-5 mb-5 align-items-center"  style = "text-align:left">
		<div class="col-12 col-sm-6 col-md-9 px-lg-5"><h2>Alex Cheng</h2>
	  		<h3>Chief Operating Officer</h3>
	  		<p>Mr. Cheng is currently the Chief Operating Officer. He is a sophomore in the Operations Research and Financial Engineering department at Princeton University. At HandyRides, he is involved in the development of the mobile and web applications as well as business development. </p>
	  	</div>
		<div class="col-6 col-md-3 px-lg-3"><img src = "/temp/temp.png" height = 150px></div>
	  	
	  </div>

	  <div class="row px-lg-5 mt-5 mb-5 align-items-center"  style = "text-align:left">
		<div class="col-6 col-md-3 px-lg-3" style = "text-align:right"><img src = "/temp/temp.png" height = 150px></div>
	  	<div class="col-12 col-sm-6 col-md-9 px-lg-5"><h2>Dee-Dee Huang</h2>
	  		<h3>Chief Product Officer</h3>
	  		<p>Ms. Huang is currently the Chief Product Officer. She is a junior in the Operations Research and Financial Engineering department at Princeton University. At HandyRides, she leads the design of the product and supports the technical development of the application. Having taken ORF467, she is extremely proficient at optimizing pooled travel and will design the matching algorithm that also takes preferences into account.</p>
	  	</div>
	  </div>

		<div class="row px-lg-5 mt-5 mb-5 align-items-center"  style = "text-align:left">
	  	<div class="col-12 col-sm-6 col-md-9 px-lg-5"><h2>Yang Tu</h2>
	  		<h3>Chief Technology Officer</h3>
	  		<p>Mr. Tu is currently the Chief Technology Officer. He is a junior in the Operations Research and Financial Engineering Department at Princeton University.</p>
	  	</div>
	  	<div class="col-6 col-md-3 px-lg-3"><img src = "/temp/temp.png" height = 150px></div>
	  </div>
	</div>

	<div class = "container px-lg-5">
		<div class="row px-lg-5 ml-3 mt-5 mb-5 align-items-center" style = "background:#69858c">
			<div class = "spacer">
			<h2 style = "font-size:40px"> Advisors </h2>
		</div>
	</div>
		<div class="row px-lg-5 mt-5 mb-5 align-items-center"  style = "text-align:left">
		<div class="col-6 col-md-3 px-lg-3" style = "text-align:right"><img src = "/temp/temp.png" height = 150px></div>
	  	<div class="col-12 col-sm-6 col-md-9 px-lg-5"><h2>Prof. Kornhauser</h2>
	  		<h3>Muse</h3>
	  		<p>haNdy RiDes</p>
	  	</div>
	  </div>
	 </div>

</body>


		</html>
@endsection