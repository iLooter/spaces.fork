<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <title>Spaces.ru</title>
    <meta name="description" content="Крупнейшая мобильная социальная сеть! Зона обмена, Музыка, Игры для андроид">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes">

    <link rel="stylesheet" type="text/css" href="{{ asset('style/'.env('THEME')) }}/css/touch_light.css"
          data-main-css="1">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/'.env('THEME')) }}/css/not_auth.css" data-main-css="1">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/'.env('THEME')) }}/css/AboutLite.css" data-tmp_css="1">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/'.env('THEME')) }}/css/PlayerLite.css"
          data-tmp_css="1">
    <script type="text/javascript" src="{{ asset('style/'.env('THEME')) }}/js/boot-touch_light.js"/>
    <script type="text/javascript" src="{{ asset('style/'.env('THEME')) }}/js/preload-touch_light.js" async="async"/>
    <link rel="canonical" href="http://spaces.ru/">
</head>
<body class="js-on font_14 not_auth   mobile touch_light      chrome  ver64   new_browser   ">
<script type="text/javascript">Loader.init();</script>
<body id="main_wrap">
<div class="unauth_header">
    <table width="100%" class="unauth_header" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td class="to"><a href="{{ route('home') }}" id="home_link"
                              class="unauth_header__link unauth_header__link_menu"> <span class="m">Меню</span> </a>
            </td>
            <td class="to" style="width: 100%;"><a href="http://spaces.ru/?sid=8395523738670959"
                                                   class="unauth_header__link unauth_header__link_logo t_center">
                    <img src="{{ asset('style/'.env('THEME')) }}/icons/0.png" alt="" class="m"> </a></td>
            <td class="to"><a href="{{ url('login') }}"
                              class="unauth_header__link unauth_header__link_enter"> <span class="m">Вход</span>
                </a></td>
        </tr>
        </tbody>
    </table>
</div>
<div class="main">
    @yield('content')

</div>
<div id="navi_footer" class="stnd_padd lh_160 ucsep"><a
            href="http://spaces.ru/info/about_us/?link_id=972847&amp;sid=8395523738670959">О сайте</a> | <a
            href="http://spaces.ru/info/contacts/?link_id=972847&amp;sid=8395523738670959">Контакты</a> | <a
            href="http://spaces.ru/sz/?link_id=972847&amp;sid=8395523738670959">ЗО</a> | <a
            href="http://spaces.ru/registration/loginform/?link_id=972847&amp;sid=8395523738670959">Вход</a> | <a
            href="http://spaces.ru/search/?link_id=972847&amp;sid=8395523738670959">Поиск</a></div>
<div class="cl"></div>
<div class="bottom_fix oh">
    <div class="cl"></div>
    <div class="site-versions right tdn"><span class="grey">Версия:</span> <a
                href="http://spaces.ru/services/force_device_type/?Link_id=972859&amp;Vck=0959&amp;dtype=mobile&amp;sid=8395523738670959"
                class="inl-link  no_ajax  "> Mobile<!-- --><!-- --><!-- --></a><!-- --> | <b>Lite</b> | <a
                href="http://spaces.ru/services/force_device_type/?Link_id=972859&amp;Vck=0959&amp;dtype=touch&amp;sid=8395523738670959"
                class="inl-link  no_ajax  "> Touch<!-- --><!-- --><!-- --></a><!-- --> </div>
    <div class="stnd_padd3 relative" style="background:#ebebeb;"><a id="mobtop" href="http://mobtop.ru/in/101328"
                                                                    title="Рейтинг мобильных сайтов."><img
                    alt="MobTop.Ru - Top Mobile Rating" src="./index_files/101328.gif"
                    style="opacity: 1 !important;"></a>
        <script type="text/javascript" async="" src="./index_files/101328.js.download"></script>
        <noscript>&lt;a href="http://mobtop.com/in/101328"&gt;&lt;img src="http://mtp.spaces.ru/101328.gif"
            alt="MobTop - top mobile rating"/&gt;&lt;/a&gt;
        </noscript>
    </div>
</div>
</div>
<script type="text/javascript">Loader.onDomReady();
    require('spoiler');</script>
<noscript>&lt;div&gt;&lt;img src="//mc.yandex.ru/watch/21137731?ut=noindex" style="position:absolute; left:-9999px;"
    alt="" /&gt;&lt;/div&gt;
</noscript>
</body>
</html>