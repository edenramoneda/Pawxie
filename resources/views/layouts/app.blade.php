<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{url('fonts/fontawesome-all.min.css')}}">
        <script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{url('js/style.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}"> 
        <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
        <meta charset="utf-8">
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @endsection

        <div class="container">
            @yield('login')
        </div>
    </body>
</html>