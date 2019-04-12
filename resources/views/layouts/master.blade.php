<html>
    <head>
        <title>@yield('title')</title>
        <link href="{{asset('/css/style.css')}}" rel="stylesheet" type="text/css">
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
                        <li class="nav-link {{ request()->is('list') ? 'active' : ''  }}"><a href="{{url('list')}}">List</a></li>
                        <li class="nav-link {{ request()->is('register') ? 'active' : ''  }}"><a href="{{url('register')}}">Register</a></li>
                        <li class="nav-link {{ request()->is('deletelist') ? 'active' : ''  }}"><a href="{{url('deletelist')}}">Delete </a></li>
                    </ul>
                </nav>
                <span class="sidebar-header">Appointment</span>
                <nav>
                    <ul>
                        <li><a href="{{url('list')}}">Book</a></li>
                        <li><a href="{{url('register')}}">Delete</a></li>
                    </ul>
                </nav>
            </div>

            @show

            <div class="wrapper">
                @yield('content')
            </div>
        </main>
    </body>
</html>
