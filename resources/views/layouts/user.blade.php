<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <title>Старт : id47612653</title>
    <meta name="description" content="{{ config('main.meta.description') }}">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes">

    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/css/touch_light_cache_r1538p.css"
          data-main-css="1">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/css/3993701284_r1538p.css" data-main-css="1">
    <script type="text/javascript" src="{{ asset('/') }}/js/boot-touch_light.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/css/preload-touch_light.js"
            async="async"></script>
    <link rel="canonical" href="/startpage/">
</head>
<body class="js-on font_14 auth   mobile touch_light      chrome  ver64   new_browser   ">
<script type="text/javascript">Loader.init();</script>
<div id="main_wrap" style="max-width:680px;margin: 0 auto;">
    <div>
        <div class="light_header" id="navi">
            <div class="menu_wrap ">
                <table cellspacing="0" cellpadding="0" class="table__wrap table_no_borders">
                    <tbody>
                    <tr>
                        <td width="19%" class="table__cell">
                            <a class="top_menu_link user_color_link" href="">
                                <img class="m p25" src="{{ asset('/') }}/icons/menu_b.png" alt="Старт">
                            </a>
                        </td>
                        <td width="21%" class="table__cell">
                            <a class="top_menu_link user_color_link" href="">
                                <div class="inl_bl relative">
                                    <img class="m p25" src="{{ asset('/') }}/icons/mail_b.png" alt="Почта">
                                    <span class="newevent">1</span>
                                </div>
                            </a>
                        </td>
                        <td width="20%" class="table__cell">
                            <a class="top_menu_link user_color_link" href="">
                                <div class="inl_bl relative">
                                    <img class="m p25" src="{{ asset('/') }}/icons/journal_b.png" alt="Жур">
                                </div>
                            </a>
                        </td>
                        <td width="20%" class="table__cell">
                            <a class="top_menu_link user_color_link" href="">
                                <div class="inl_bl relative">
                                    <img class="m p25" src="{{ asset('/') }}/icons/lenta_b.png" alt="Лента">
                                </div>
                            </a>
                        </td>
                        <td width="20%" class="table__cell">
                            <a class="top_menu_link user_color_link" href="">
                                <span class="pr">
                                    <div class="inl_bl relative">
                                        <img src="{{ asset('/') }}/icons/101115855.p.41.40.0.jpg" alt="" class="preview s41_40">
                                    </div>
                                </span>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="main">

        @yield('content')

        <div id="navi_footer" class="stnd_padd lh_160 ucsep"><a href="">Поиск</a>
            | <a href="">Я</a> | <a
                    href="">Помощь</a> | <a
                    href="">Игры</a> | <a
                    href="">ЗО</a> | <a
                    href="">Др</a> | <a
                    href="">+</a></div>
        <div class="cl"></div>
        <div class="bottom_fix oh">
            <div class="cl"></div>
            <div class="site-versions right tdn">
                <span class="grey">Версия:</span>
                <a href="" class="inl-link  no_ajax  "> Mobile</a><b>Lite</b> |
                <a href="" class="inl-link  no_ajax  "> Touch</a> |
                <a href="" class="inl-link  no_ajax  "> PC</a>
            </div>
            <div class="stnd_padd3 relative" style="background:#ebebeb;">
               <!-- counters -->
            </div>
        </div>
    </div>

</body>
</html>