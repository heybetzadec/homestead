<html>
<head>
    <title> @yield('title') </title>
    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>
<body>
@include('shared.navbar')
@yield('content')
<script src="{!! asset('js/jquery-3.5.1.min.js') !!}"></script>
<script src="{!! asset('js/popper.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
</body>
</html>
