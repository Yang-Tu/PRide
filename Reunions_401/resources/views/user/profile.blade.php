@extends('layouts.app')
@section('content')
<div class="container mt-5 mb-6 px-lg-5">
    <div class="row justify-content-center px-lg-5">
        <div class="col-md-8">
            <div class="card mt-5 mb-5">
                <div class="card-header"><h2> {{$user['fname']}}'s Dashboard</h2></div>

                <div class="card-body">
       
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p> You are logged in! </p>

                    <html>

      <br>
      <p class = "para">
    Name: {{$user['fname']}} {{$user['lname']}} <br><br>
    Class Year: {{$user['class_year']}} <br>
    Phone: {{$user['phone']}} <br>
    Departure Date: {{$user['d_date']}} <br>
    Departure Time: {{$user['d_time']}} <br>
    Seats Available: {{$user['seats']}} <br>
    Email: {{$user['email']}}<br>
          <br>

          <br>
          Here's your approximate route and estimated travel time:
          <iframe width="100%" height="100%" frameborder="0" style="border:0"
                  src="https://www.google.com/maps/embed/v1/directions?origin={{$user['zipcode']}}&destination=Princeton%20University&key=AIzaSyCa_nZFbiRNWjCrIMhdnSdNu-ouaOETZRA" allowfullscreen></iframe>

      </p><br>


   <a href="/">Return home</a>
   
  </body>
</html>


                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
