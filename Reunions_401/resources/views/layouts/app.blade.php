
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body> 
        
        <nav class="navbar navbar-expand-md navbar-laravel bg-light fixed-top">
    

        <ul class="navbar-nav mr-auto">
             <a class="navbar-brand" href="/">
            <img src="/icons/tigerTrips.png" height = 30>
            <tab2></tab2>TigerTrips
        </a>
    </ul>
 
          <!-- Authentication Links -->
           <ul class="navbar-nav ml-auto">
             <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Services <span class="caret"></span>
                                </a>
            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/carpool"> Carpool Connect</a>
              <a class="dropdown-item" href="/rideshare"> Uber/Lyft Connect</a>
              <a class="dropdown-item" href="/bus"> Party Bus Rental </a>
              <a class="dropdown-item" href="/last-min"> Last Minute Matching </a>
            </div>
          </li>

          <li class="nav-item ">
             <a class="nav-link" href="/method">Method</a>
          </li>
          
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   About <span class="caret"></span>
                                </a>
            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/team"> The Team </a>
              <a class="dropdown-item" href="/values"> Our Values </a>
            </div>
          </li>
        
        <li class="nav-item">
              <a class="nav-link" href="/business">Hire Us</a>
        </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link ml-md-5" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle ml-md-5" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Welcome {{ Auth::user()-> fname }}! <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                     <a class="dropdown-item" href="/user/{{ Auth::user()->id }}">
                                
                                        {{ __('User Page') }}
                                    </a>

                                </div>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

        
        </ul>

            
        </nav>


            <center>
            @yield('content')
        </center>
        <div class= "footer">

            <p>© 2019-2019 HandyRides inc.</p> 
            <p> Follow us! </p>
        </div>

 

</body>
</html>
