<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{url('fonts/fontawesome-all.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}"> 
        <link rel="stylesheet" href="{{url('css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{url('css/buttons.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{url('css/jquery.dataTables.min.css')}}">
        <link rel="stylesheet" href="{{url('css/buttons.dataTables.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
        <meta charset="utf-8">
    </head>
    <body>
        <div class="container">
            @yield('login')
        </div>
        <script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{ url('js/jquery.dataTables.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('js/dataTables.bootstrap4.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('js/dataTables.buttons.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('js/buttons.bootstrap4.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('js/buttons.flash.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('js/buttons.html5.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('js/buttons.print.min.js') }}"></script>
        <script type="text/javascript" src="{{url('js/style.js')}}"></script>
    </body>
</html>