<html>
    <head>
        <title>@yield('title')</title>
        <link href="{{asset('/css/style.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        @section('header')
            <ul>
                <li><a href="{{url('list')}}">Read</a></li>
                <li><a href="{{url('create')}}">Create</a></li>
                <li><a href="{{url('deletelist')}}">Delete </a></li>
            </ul>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
