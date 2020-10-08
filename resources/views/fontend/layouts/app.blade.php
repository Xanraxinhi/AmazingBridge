<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Amazing Bridges</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('fontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/style.css') }}">
    @stack('css')
</head>
<body>
    <div class="container">
        @includeIf('fontend.layouts.header')

        @yield('content')

        @includeIf('fontend.layouts.footer',['hideFooter'=>$hideFooter ?? ''])

        <script src="{{ asset('fontend/js/jquery-3.5.1.slim.min.js') }}"></script>
        <script src="{{ asset('fontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('fontend/js/popper.min.js') }}"></script>
        <script src="{{ asset('fontend/js/app.js') }}"></script>
        @stack('js')
    </div>
</body>
</html>
