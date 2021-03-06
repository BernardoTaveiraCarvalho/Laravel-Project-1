<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
@component('master.header',['Title'=>$Title,'Title1'=>$Title1,'Title2'=>$Title2,'Title3'=>$Title3,'Title4'=>$Title4,'RefTitle'=>$RefTitle,'RefTitle2'=>$RefTitle2,'RefTitle3'=>$RefTitle3,'RefTitle4'=>$RefTitle4])
@endcomponent
<main>
    @yield('content')
</main>
@component('master.footer')
@endcomponent


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('scripts')
</body>

</html>
