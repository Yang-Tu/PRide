@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
       
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <html>
        <p> Welcome to your page! </p>

      <br>
      <p class = "para">
    Name: {{$user['fname']}} {{$user['lname']}} <br><br>
    Age: {{$user['age']}} <br>
    Phone: {{$user['phone']}} <br>
    Origin: {{$user['Origin']}}<br>
    Destination: {{$user['Destination']}}<br>  
    Departure Date: {{$user['d_date']}} <br>
    Departure Time: {{$user['d_time']}} <br>
    Seats Available: {{$user['seats']}} <br>
    Email: {{$user['email']}}<br>
    Password: {{$user['password']}}<br>

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
