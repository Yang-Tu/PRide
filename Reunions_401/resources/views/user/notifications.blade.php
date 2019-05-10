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
                    <div class="card-header"><h2> {{$user['fname']}}'s Notifications</h2></div>

                    <div class="card-body">
           
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

        <br>
        <h3> You've got a match! </h3>

        <div class="container mt-5 mb-6 px-lg-5"">
          <div class="row" style = "background-color: #e8e8e8; padding:25px!important;">
            <div class="col">
              <img src = "/icons/benji.png" height = 70px>
              <br><h3> Match 1 </h3>
              <p style="margin:30px!important; margin-top:20px!important;"> You've matched with Benji! </p>
              <p><a class="btn btn-secondary" href="/about" role="button"> Find out more! </a> </p>
              <p><a class="btn btn-secondary" href="/success" role="button"> Yes!</a> </p>
            </div>
            <div class="col">
              <img src = "/icons/yang.png" height = 70px>
              <br><h3> Match 2 </h3>
              <p style="margin:30px!important; margin-top:20px!important;"> You've matched with Yang!</p>
              <p><a class="btn btn-secondary" href="/about" role="button"> Find out more! </a> </p>
              <p><a class="btn btn-secondary" href="/success" role="button"> Yes! </a> </p>
            </div>
            <div class="col">

              <img src = "/icons/alex.png" height = 70px>
              <br><h3> Match 3 </h3>
              <p style = "margin:30px!important; margin-top:20px!important;">You've matched with Alex!</p>
              <p><a class="btn btn-secondary" href="/about" role="button"> Find out more! </a> </p>
              <p><a class="btn btn-secondary" href="/success" role="button"> Yes! </a> </p>
            </div>
              <br><br>
              <div class = "col">
              <p><a class="btn btn-secondary" href="/fail" role="button"> I don't like any of these. </a> </p>
            </div>
        </div>


        </p><br>

     <a href="/">Return home</a>
     
    </body>




  @endsection
