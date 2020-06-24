<!-- head -->
<!doctype html>
<html lang="{{ Config::get('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('home'))</title>
    <link rel="stylesheet" href="{{ asset('front/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style-2.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
</head>
<body>
<div class="body_inner">
    @include('site.particles._header')
    @yield('content')
    @include('site.particles._footer')
</div>

<!--Javascript script links-->
<script src="{{ asset('front/js/jquery-3.5.0.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/application.js') }}"></script>
<script src="{{ asset('front/js/main.js') }}"></script>
</body>
</html>
