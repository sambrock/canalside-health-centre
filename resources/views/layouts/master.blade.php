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
                <ul>
                    <li><a href="{{url('list')}}">Read</a></li>
                    <li><a href="{{url('register')}}">Register</a></li>
                    <li><a href="{{url('deletelist')}}">Delete </a></li>
                </ul>
            </div>

            @show

            <div class="container">
                @yield('content')
            </div>
        </main>
    </body>
</html>
