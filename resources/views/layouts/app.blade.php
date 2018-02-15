<!DOCTYPE html>
<html lang="eng">
<head>

    <!-- META -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <title>{{ config('main.meta.title') }}</title>
    <meta name="description" content="{{ config('main.meta.description') }}">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/css/touch_light.css"
          data-main-css="1">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/css/not_auth.css" data-main-css="1">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/css/AboutLite.css" data-tmp_css="1">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/css/PlayerLite.css" data-tmp_css="1">

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('/') }}/js/boot-touch_light.js"/>
    <script type="text/javascript" src="{{ asset('/') }}/js/preload-touch_light.js" async="async"/>
    <link rel="canonical" href="{{ route('home') }}">
</head>

<body class="js-on font_14 not_auth   mobile touch_light      chrome  ver64   new_browser   ">
<script type="text/javascript">Loader.init();</script>
<body id="main_wrap">
<div class="unauth_header">
    <table width="100%" class="unauth_header" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td class="to"><a href="{{ route('home') }}" id="home_link" class="unauth_header__link unauth_header__link_menu"> <span class="m">Меню</span> </a>
            </td>
            <td class="to" style="width: 100%;"><a href="{{ route('home') }}" class="unauth_header__link unauth_header__link_logo t_center">
                    <img src="{{ asset('/') }}/icons/0.png" alt="" class="m"> </a></td>
            <td class="to"><a href="{{ route('login') }}" class="unauth_header__link unauth_header__link_enter"> <span class="m unauth_header__link-text">Вход</span>
                </a></td>
        </tr>
        </tbody>
    </table>
</div>
<div class="main">
    @yield('content')
</div>
<div id="navi_footer" class="stnd_padd lh_160 ucsep"><a
            href="{{--{{ route('info.about_us') }}--}}">О сайте</a> | <a
            href="{{--{{ route('info.contacts') }}--}}">Контакты</a> | <a
            href="{{--{{ route('loads') }}--}}">ЗО</a> | <a
            href="{{--{{ url('login') }}--}}">Вход</a> | <a
            href="{{--{{ route('search') }}--}}">Поиск</a></div>
<div class="cl"></div>
<div class="bottom_fix oh">
    <div class="cl"></div>
    <div class="site-versions right tdn">
        <span class="grey">Версия:</span>
        <a href="" class="inl-link  no_ajax  "> Mobile</a> | <b>Lite</b> |
        <a href="" class="inl-link  no_ajax  "> Touch</a>
    </div>
    <div class="stnd_padd3 relative" style="background:#ebebeb;">
       <!-- Counters -->
    </div>
</div>
</div>

<!-- Scripts -->

</body>
</html>
