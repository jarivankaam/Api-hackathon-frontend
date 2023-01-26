<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Solitreo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script defer src="{{ asset('/js/app.js') }}"></script>
    <!-- Scripts -->
</head>
<body>
    <div class="section-header flex justify-content-center align-items-center" id="myHeader">
        <ul class="flex justify-content-around align-items-center">
            <li><a href="/">Home</a></li>
            <li><h2 class="font Size64 family title">ImageApi</h2></li>
            <li><a href="/dashboard">dashboard</a></li>
        </ul>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
