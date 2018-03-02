<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('main.meta.title') }}</title>
    <meta name="description" content="{{ config('main.meta.description') }}">
    <meta name="format-detection" content="telephone=no">

    @include('layouts.css')

    @include('layouts.js')

    <link rel="canonical" href="{{ route('home') }}">
</head>


<body class="js-on font_14 {{ Auth::check() ? 'auth' : 'not_auth' }}  mobile touch_light  safari   new_browser">
<div id="main_wrap">

    @include('layouts.header')

    <div class="main">
        {{--Session Flash --}}
        @foreach(['danger', 'warning', 'success', 'info'] as $msg)
            @if(session()->has('system-message-' . $msg))
                <div class="oh oh system-message  {{ $msg }}">
                    <span class="m"> {{ session()->get('system-message-' . $msg) }} </span>
                </div>
            @endif
        @endforeach

        @yield('content')

    </div>

    @include('layouts.footer')
</div>
</body>
</html>
