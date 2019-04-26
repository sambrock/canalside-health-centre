<html>
    <head>
        <title>@yield('title')</title>
        <link href="{{asset('/css/style.css')}}" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <header>
            <img id="logo" src="{{asset('/img/chc-logo.svg')}}" height="18">
        </header>
        @section('sidebar')
        <main>
            <div class="sidebar">
                <span class="sidebar-header">Patient</span>
                <nav>
                    <ul>
                        <li class="nav-link {{ request()->is('patients') ? 'active' : ''  }}"><a href="{{url('patients')}}">Browse</a></li>
                        <li class="nav-link {{ request()->is('register') ? 'active' : ''  }}"><a href="{{url('register')}}">Register</a></li>
                    </ul>
                </nav>
                <span class="sidebar-header">Appointment</span>
                <nav>
                    <ul>
                        <li class="nav-link {{ request()->is('appointments') ? 'active' : ''  }}"><a href="{{url('appointments')}}">List</a></li>
                        <li class="nav-link {{ request()->is('book') ? 'active' : ''  }}"><a href="{{url('book')}}">Book</a></li>
                    </ul>
                </nav>
                <div class="user-container">
                    @if(isset(Auth::user()->id))
                    <span id="username">{{Auth::user()->name}}</span>
                    | <a href="{{ url('logout') }}">Logout</a>
                    @endif
                </div>
            </div>

            @show

            <div class="wrapper">
                @yield('content')
            </div>
            <script src="{{asset('/js/main.js')}}"></script>
        </main>
    </body>
</html>
