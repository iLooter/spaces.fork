<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('main.meta.title') }}</title>
    <meta name="description" content="{{ config('main.meta.description') }}">
    <meta name="format-detection" content="telephone=no">

    @section('css')
        @include('layouts.css')
    @show

    @section('js')
        @include('layouts.js')
    @show

    <link rel="canonical" href="{{ route('home') }}">
</head>


<body class="js-on font_14 {{ Auth::check() ? 'auth' : 'not_auth' }}  mobile touch_light  safari   new_browser">
    <div id="main_wrap" style="max-width:680px;margin: 0 auto;">

        @section('header')
            @include('layouts.header')
        @show

        <div class="main">
            @yield('content')
        </div>

        @section('footer')
            @include('layouts.footer')
        @show

    </div>
</body>
</html>
