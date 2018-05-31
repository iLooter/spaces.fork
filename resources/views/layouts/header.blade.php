@auth
    <div id="main_wrap" style="max-width:680px;margin: 0 auto;">
        <div class="light_header" id="navi">
            <div class="menu_wrap ">
                <table cellspacing="0" cellpadding="0" class="table__wrap table_no_borders">
                    <tbody>
                    <tr>
                        <td width="19%" class="table__cell">
                            <a class="top_menu_link user_color_link" href="{{ route('user.start_page') }}">
                                <img class="m p25" src="{{ asset('/') }}/icons/menu_b.png" alt="Старт">
                            </a>
                        </td>
                        <td width="21%" class="table__cell">
                            <a class="top_menu_link user_color_link" href="{{ route('messenger.index') }}">
                                <div class="inl_bl relative">
                                    <img class="m p25" src="{{ asset('/') }}/icons/mail_b.png" alt="Почта">
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
                                        <img src="http://ts01.spac.me/tpic/2463ef734ab08a9c6b553ce340cf585e/101115855.p.41.40.0.jpg?1436446779" alt="" class="preview s41_40">
                                    </div>
                                </span>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
@else
    <div id="main_wrap" style="max-width:680px;margin: 0 auto;">
    <div class="unauth_header">
    <table width="100%" class="unauth_header" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td class="to">
                <a href="" id="home_link" class="unauth_header__link unauth_header__link_menu">
                    <span class="m">Меню</span>
                </a>
            </td>
            <td class="to" style="width: 100%;">
                <a href="" class="unauth_header__link unauth_header__link_logo t_center">
                    <img src="http//c.spac.me/i/logo/default/header/0.png" alt="" class="m">
                </a>
            </td>
            <td class="to">
                <a href="{{ route('login') }}" class="unauth_header__link unauth_header__link_enter">
                    <span class="m">Вход</span>
                </a>
            </td>
        </tr>
        </tbody>
    </table>
    </div>
@endauth