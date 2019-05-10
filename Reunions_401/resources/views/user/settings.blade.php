@extends('layouts.app')
@section('content')
    <!-- sidebar nav -->
    <nav class="collapse bd-links" id="bd-docs-nav"><div class="bd-toc-item">
      <a class="bd-toc-link" href="/docs/4.3/getting-started/introduction/">
        Getting started
      </a>

      <ul class="sidebar-menu"><li>
            <a href="/docs/4.3/getting-started/introduction/">
              Introduction
            </a>
          </li><li>
            <a href="/docs/4.3/getting-started/download/">
              Download
            </a>
          </li><li>
      </ul>

    </nav>

    <div class="container mt-5 mb-6 px-lg-5">
        <div class="row justify-content-center px-lg-5">
            <div class="col-md-8">
                <div class="card mt-5 mb-5">
                    <div class="card-header"><h2> {{$user['fname']}}'s Settings</h2></div>

                    <div class="card-body">
           
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                      <p> You are logged in! </p>


        <br>
        <h3> Do you have any information that needs to be updated?</h3>
        <p class = "para">
              Name: {{$user['fname']}} {{$user['lname']}} <br><br>
              Class Year: {{$user['class_year']}} <br>
              Phone: {{$user['phone']}} <br>
              Departure Date: {{$user['d_date']}} <br>
              Departure Time: {{$user['d_time']}} <br>
              Seats Available: {{$user['seats']}} <br>
              Email: {{$user['email']}}<br>
            <br>
        </p><br>

      <a class="btn btn-link" href="/updated">
              {{ __('Yes') }}
      </a><br>

     <a href="/">Return home</a>
     
    </body>




  @endsection
