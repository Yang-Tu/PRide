
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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body style="font-family: Montserrat! important;"> 
        <header>
            <center>
                <br><br>
                
                <img src='images/tigerTrips.png' height = 300 width = 300/>
                <br><br><br>
            </center>
        </header>
        <nav class="navbar navbar-expand-md navbar-laravel">
          <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
             <a class="nav-link" href="/">Home</a>
        </li>
          
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   About <span class="caret"></span>
                                </a>
            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/about"> The Team </a>
              <a class="dropdown-item" href="/about"> What is Reunions? </a>
            </div>
          </li>

         <li class="nav-item ">
             <a class="nav-link" href="/method">Method</a>
        </li>
        
        <li class="nav-item">
              <a class="nav-link" href="/business">Why Us?</a>
        </li>

        
        </ul>

                            <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
            @guest
                @else
                  Welcome {{ Auth::user()->fname }}! <br>
                    Click on your name in the navigation bar to logout/go to user-page.
                                          
                @endguest
        </center>
        </main>
 

</body>
</html>
