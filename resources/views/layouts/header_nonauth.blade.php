<body class="js-on font_14 not_auth  mobile touch_light  safari   new_browser">
<div id="main_wrap">
    <div class="unauth_header">
        <table width="100%" class="unauth_header" cellspacing="0" cellpadding="0">
            <tbody>
            <tr>
                <td class="to">
                    <a href="{{ route('home') }}" id="home_link" class="unauth_header__link unauth_header__link_menu">
                        <span class="m">Меню</span>
                    </a>
                </td>
                <td class="to" style="width: 100%;"><a href="{{ route('home') }}"
                                                       class="unauth_header__link unauth_header__link_logo t_center">
                        <img src="{{ asset('/') }}/icons/0.png" alt="" class="m">
                    </a>
                </td>
                <td class="to">
                    <a href="{{ route('login') }}" class="unauth_header__link unauth_header__link_enter">
                        <span class="m unauth_header__link-text">Вход</span>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>