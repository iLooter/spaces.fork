<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('main.meta.title') }}</title>
    <meta name="description" content="{{ config('main.meta.description') }}">
    <meta name="format-detection" content="telephone=no">

    @yield('css')
    @yield('js')

    <link rel="canonical" href="{{ route('home') }}">
</head>

@yield('header')
@yield('content')
@yield('footer')

</body>
</html>
