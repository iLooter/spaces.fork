@auth
    <div>
        <div class="light_header" id="navi">
            <div class="menu_wrap ">
                <table cellspacing="0" cellpadding="0" class="table__wrap table_no_borders">
                    <tbody>
                    <tr>
                        <td width="19%" class="table__cell">
                            <a class="top_menu_link user_color_link" href="http://spaces.ru/startpage/?Link_id=314300">
                                <img class="m p25" src="//c.spac.me/i/qlt/menu_b.png" alt="Старт">
                            </a>
                        </td>
                        <td width="21%" class="table__cell">
                            <a class="top_menu_link user_color_link" href="http://spaces.ru/mail/?Link_id=314300">
                                <div class="inl_bl relative">
                                    <img class="m p25" src="//c.spac.me/i/qlt/mail_b.png" alt="Почта">
                                </div>
                            </a>
                        </td>
                        <td width="20%" class="table__cell">
                            <a class="top_menu_link user_color_link" href="http://spaces.ru/journal/?Ext=1&amp;F=0&amp;S=2&amp;link_id=314300">
                                <div class="inl_bl relative">
                                    <img class="m p25" src="//c.spac.me/i/qlt/journal_b.png" alt="Жур">
                                </div>
                            </a>
                        </td>
                        <td width="20%" class="table__cell">
                            <a class="top_menu_link user_color_link" href="http://spaces.ru/lenta/?Link_id=314300">
                                <div class="inl_bl relative">
                                    <img class="m p25" src="//c.spac.me/i/qlt/lenta_b.png" alt="Лента">
                                </div>
                            </a>
                        </td>
                        <td width="20%" class="table__cell">
                            <a class="top_menu_link user_color_link" href="http://spaces.ru/mysite/?link_id=314300">
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
    </div>

@else
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