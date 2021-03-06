@extends('layouts.app')


@section('content')

    <a href="" class="list-link list-link_online" id="header_path">
        <span class="ico ico_user_online">Сейчас онлайн: 22482</span>
    </a>
    <div id="main_page">

        <div class="wrapper hide">
            <a href="http://spaces.ru/#" class="link darkblue t_center"> О сайте Spaces.ru
                <img src="{{ asset('/') }}/icons/ico_arr_bottom.png" alt="" class="about_arr_bottom">
            </a>
        </div>

        <!--About Site-->
        <div class="wrapper relative wbg" id="about_spaces">
            <div class="block t_center">
                <a href="">
                    <img src="{{ asset('/') }}/icons/remove_small.png" alt="" width="16px" height="16px"
                         class="about_close">
                </a> Добро пожаловать на <b class="darkblue">Spaces.ru</b> - приватную социальную сеть нового поколения!
            </div>

            <div class="about_separator">
                <span class="darkblue">Чем Spaces отличается от других соц. сетей?</span>
            </div>

            <div class="oh word_break pad_t_a">
                <div class="about_pic">
                    <img src="{{ asset('/') }}/icons/about_mobile.png" alt="" width="32px" height="32px">
                </div>
                <div class="oh pad_b_a">
                    <div class="upcs">
                        <b>Мобильность</b>
                    </div>
                    <div class="grey">
                         Сайт доступен с любых устройств, но разрабатывался специально для мобильных.
                    </div>
                </div>
                <div class="cl"></div>

                <div class="about_pic">
                    <img src="{{ asset('/') }}/icons/about_privacy.png" alt="" width="32px" height="32px">
                </div>
                <div class="oh pad_b_a">
                    <div class="upcs">
                        <b>Приватность</b>
                    </div>
                    <div class="grey">
                         Мы уважаем вашу анонимность. Никто не узнает ваш ник на Spaces, пока вы сами не
                        расскажете. Общайтесь в секретных группах и чатах с избранными людьми.
                    </div>
                </div>
                <div class="cl"></div>

                <div class="about_pic">
                    <img src="{{ asset('/') }}/icons/about_contacts.png" alt="" width="32px" height="32px">
                </div>
                <div class="oh">
                    <div class="upcs">
                        <b>Новые знакомства</b>
                    </div>
                    <div class="grey">
                         Вы можете общаться не только с друзьями, но и познакомиться с массой новых интересных
                        людей.
                    </div>
                </div>

            </div>

            <div class="block bord-botm t_center">
                 Зарегистрируйтесь за 20 секунд, и сразу получите доступ ко всем
                возможностям
                Spaces.
            </div>
            <a href="{{ url('register') }}" class="link -full  blue c-blue   is_final">
                <span>
                    <img src="{{ asset('/') }}/icons/befriends_blue.png" alt="" class="m">
                    <span class="m b">Зарегистрироваться</span>
                </span>
            </a>
        </div>

        <!--Search-->
        <div class="wrapper-nobg">
        <form action="" method="post">
            <input type="hidden" name="from" value="main_top">
            <input type="hidden" name="CK" value="1">
            <table class="table__wrap search-wrap input-txt_grid">
                <tbody>
                <tr>
                    <td class="input-txt_grid_input">
                        <div class="input-txt_wrapper_search relative">
                            <input type="text" class="input-txt" name="q" value="" maxlength="64">
                        </div>
                    </td>
                    <td class="input-txt_grid_sep"/>
                    <td class="input-txt_grid_btn">
                        <input type="submit" class="search__btn" value="Найти" name="cfms">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>

        <!--Main Categories-->
        <div class="wrapper">
        <a href="" class="link darkblue">
            <img src="{{ asset('/') }}/icons/zo.png" alt="" class="m p16">
            <span class="m">Зона обмена</span>
        </a>
        <a href="" class="link darkblue">
            <img src="{{ asset('/') }}/icons/music.png" alt="" class="m p16">
            <span class="m">Музыка</span>
        </a>
        <a href="" class="link darkblue">
            <img src="{{ asset('/') }}/icons/people.png" alt="" class="m p16">
            <span class="m">Люди</span>
        </a>
        <a href="" class="link darkblue">
            <img src="{{ asset('/') }}/icons/comm.png" alt="" class="m p16">
            <span class="m">Сообщества</span>
        </a>
        <a href="" class="link darkblue">
            <img src="{{ asset('/') }}/icons/dating.png" alt="" class="m p16">
            <span class="m">Знакомства</span>
        </a>
        <a href="" class="link darkblue">
            <img src="{{ asset('/') }}/icons/forum.png" alt="" class="m p16">
            <span class="m">Форум</span>
        </a>
        <a href="" class="link darkblue">
            <img src="{{ asset('/') }}/icons/chats.png" alt="" class="m p16">
            <span class="m">Чат</span>
        </a>
        <a href="" class="link darkblue">
            <img src="{{ asset('/') }}/icons/poster.png" alt="" class="m p16">
            <span class="m">Объявления</span>
        </a>
        <a href="" class="link darkblue">
            <img src="{{ asset('/') }}/icons/ogames.png" alt="" class="m p16">
            <span class="m">Онлайн-Игры</span>
        </a>
    </div>

        <!--Popular photos-->
        <div class="wrapper">
        <div class="title oh black relative text_left">
            <a href="" class="right strong_link full_link"> Все
                <img src="{{ asset('/') }}/icons/arr_blue.png" alt="">
            </a>
            <span class="block-title">Популярные фото</span>
        </div>
        <div class="block grey">
            <div class="i_fix">
                <table style="width: auto;">
                    <tbody>
                    <tr>
                        <td class="top break-word topi">
                            <a class="tdn gview_link" href="" g="201335108|7|1690">
                                <div class="inl_bl relative">
                                    <img src="{{ asset('/') }}/icons/pop_photo_1.jpg" alt=""
                                         class="preview s81_80">
                                </div>
                            </a>
                        </td>
                        <td class="top break-word topi">
                            <a class="tdn gview_link" href="" g="201306378|7|1690">
                                <div class="inl_bl relative">
                                    <img src="{{ asset('/') }}/icons/pop_photo_2.jpg" alt=""
                                         class="preview s81_80">
                                </div>
                            </a>
                        </td>
                        <td style="vertical-align: middle;">
                            <a href="">
                                <span class="m">Все</span>
                                <img src="{{ asset('/') }}/icons/arr_darkblue.png" class="m" width="6" height="10"
                                     style="width: initial">
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

        <!--Blogs-->
        <div class="wrapper bb0">
        <div class="title oh black relative text_left">
            <a href="" class="right strong_link full_link"> Все <img src="{{ asset('/') }}/icons/arr_blue.png"
                                                                     alt=""></a>
            Блоги
        </div>
        <div class="block bord-botm relative attaches_limiter">
            <div class="oh">
                <span class="right">
                    <span class="grey m">вчера в 08:23</span>
                </span>
                <div class="grey">
                    <img class="p14" src="{{ asset('/') }}/icons/users_group.png" alt="(OFF)">
                    DjeffeR
                </div>
                <div class="cl pad_t_a"></div>
                <div class="left t-padd_right">
                    <div>
                        <span class="short_attach">
                            <div class="inl_bl">
                                <span class="pr">
                                    <div class="inl_bl relative">
                                        <img src="{{ asset('/') }}/icons/blog_image.jpg" alt="" class="preview s81_80">
                                    </div>
                                </span>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="oh">
                    <a class="arrow_link full_link" href="">
                        <b>Польский неонацист и русофоб Мацейчук в очередной раз вылетел из студии НТВ</b>
                    </a>
                    <div> Мацейчук в очередной раз вылетел из студии НТВ...</div>
                </div>
            </div>
            <div>
                <div class="oh">
                    <div class="oh cl grey pad_t_a"><span class="left">
                            <img src="{{ asset('/') }}/icons/comm_ico.png" class="m p16" alt="">
                            <span class="m">318</span> </span>
                        <span class="m right">
                            <span>Происшествия</span>
                        </span>
                    </div>
                    <div class="cl"></div>
                </div>
            </div>
            <div class="cl"></div>
        </div>
    </div>

        <!--Popular video-->
        <div class="wrapper">
        <div class="title oh black relative text_left">
            <a href="" class="right strong_link full_link"> Все
                <img src="{{ asset('/') }}/icons/arr_blue.png" alt="">
            </a>
            <span class="block-title">Популярные видео</span>
        </div>
        <div class="block grey">
            <div class="i_fix">
                <table style="width: auto;">
                    <tbody>
                    <tr>
                        <td class="top break-word topi">
                            <a class="tdn gview_link"
                               href="" g="9699538|25|4|video">
                                <div class="fdw font0">
                                    <div class="inl_bl relative">
                                        <img src="{{ asset('/') }}/icons/video1.jpg" alt=""
                                             class="preview s115_80">
                                    </div>
                                    <span class="fd">0:48</span>
                                </div>
                            </a>
                        </td>
                        <td class="top break-word topi">
                            <a class="tdn gview_link"
                               href="" g="9696978|25|4|video">
                                <div class="fdw font0">
                                    <div class="inl_bl relative">
                                        <img src="{{ asset('/') }}/icons/video2.jpg" alt=""
                                             class="preview s115_80">
                                    </div>
                                    <span class="fd">7:11</span>
                                </div>
                            </a>
                        </td>
                        <td style="vertical-align: middle;">
                            <a href="">
                                <span class="m">Все</span>
                                <img src="{{ asset('/') }}/icons/arr_darkblue.png" class="m" width="6" height="10"
                                     style="width: initial">
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

        <!--Interesting communities and games-->
        <div class="list">
        <div class="wrapper">
            <div class="title oh black relative text_left">
                <a href="" class="right strong_link full_link"> Все
                    <img src="{{ asset('/') }}/icons/arr_blue.png" alt="">
                </a>
                <span class="block-title">Интересные сообщества</span>
            </div>
            <div class="wbg grey">
                <div class="list f-c_fll">
                    <div class="block oh relative bord-botm">
                        <div class="left p40">
                            <span class="pr">
                                <div class="inl_bl relative">
                                    <img src="{{ asset('/') }}/icons/comm1.jpg" alt="" class="preview s81_80">
                                </div>
                            </span>
                        </div>
                        <div class="oh pre_content_wrap">
                            <a href="" class="full_link">
                                <b class="word_break">Футбольные Новости | Ставки</b>
                            </a>
                            <br>Футбол-ето жизнь! Играй с душой! Борись до конца! (5-сезон) <br>
                            <span class="grey">

                                <img src="{{ asset('/') }}/user.png" alt="" class="m">
                                <span class="m">624 участника</span>
                            </span>
                        </div>
                    </div>
                    <div class="block oh relative bord-botm">
                        <div class="left p40">
                            <span class="pr">
                                <div class="inl_bl relative">
                                    <img src="{{ asset('/') }}/icons/comm2.jpg" alt="" class="preview s81_80">
                                </div>
                            </span>
                        </div>
                        <div class="oh pre_content_wrap">
                            <a href="" class="full_link">
                                <b class="word_break">Всё о Компьютерах</b>
                            </a>
                            <br>У вас проблемы с ПК? Заходите - мы вам поможем. <br>
                            <span class="grey">
                                <img src="{{ asset('/') }}/icons/user.png" alt="" class="m">
                                <span class="m">71044 участника</span>
                            </span>
                        </div>
                    </div>
                    <div class="last">
                        <div class="block oh relative bord-botm">
                            <div class="left p40">
                                <span class="pr">
                                    <div class="inl_bl relative">
                                        <img src="{{ asset('/') }}/icons/comm3.jpg"
                                             alt=""
                                             class="preview s81_80">
                                    </div>
                                </span>
                            </div>
                            <div class="oh pre_content_wrap">
                                <a href="" class="full_link">
                                    <b class="word_break">Moto SSSR</b>
                                </a>
                                <br>Мото это жизнь... <br>
                                <span class="grey">
                                    <img src="{{ asset('/') }}/user.png" alt="" class="m">
                                    <span class="m">1104 участника</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="title oh black relative text_left">
                <a href="" class="right strong_link full_link">Все<img src="{{ asset('/') }}/icons/arr_blue.png" alt=""></a>
                <span class="block-title">Популярные игры</span>
            </div>

            <div class="wbg grey">
                <div class="list f-c_fll">
                    <div>
                        <div class="block bord-botm oh relative">
                            <div class="left dot_pic font0">
                                <img src="{{ asset('/') }}/icons/lbarbars.gif" alt="">
                            </div>
                            <div class="oh">
                                <a href="" class="full_link">
                                    <b>Варвары</b>
                                </a>
                                <div> Варвары - это непрерывная война между Севером и Югом за контроль над
                                    территориями! Прокачка героя, кланы, арены, турниры, профессии,
                                    торговля,
                                    умения...
                                </div>
                                <div>
                                    <img src="{{ asset('/') }}/icons/user_grey.png" alt="" class="m p16">
                                    <span class="m grey">857 112 играют</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="block bord-botm oh relative">
                            <div class="left dot_pic font0">
                                <img src="{{ asset('/') }}/icons/lmars.gif" alt="">
                            </div>
                            <div class="oh">
                                <a href="" class="full_link">
                                    <b>Марс</b>
                                </a>
                                <div> После ошеломляющей новости о находке воды на Марсе сотни космических
                                    кораблей с переселенцами ринулись к Красной планете. Не упусти этот
                                    шанс!
                                    Отправляйся...
                                </div>
                                <div>
                                    <img src="{{ asset('/') }}/icons/user_grey.png" alt="" class="m p16">
                                    <span class="m grey">153 697 играют</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="last">
                        <div>
                            <div class="block bord-botm oh relative">
                                <div class="left dot_pic font0">
                                    <img src="{{ asset('/') }}/icons/lclans.gif" alt="">
                                </div>
                                <div class="oh">
                                    <a href="" class="full_link">
                                        <b>Мафия: Война кланов</b>
                                    </a>
                                    <div> Криминальная игра в стиле GTA: мафия, триады и кортели делят
                                        власть
                                        над городом Лас-Верона. Присоединяйся к банде или создай свой
                                        доминирующий клан!
                                    </div>
                                    <div>
                                        <img src="{{ asset('/') }}/icons/user_grey.png" alt="" class="m p16">
                                        <span class="m grey">183 127 играют</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!--Forum&Info-->
        <div class="wrapper">
        <a href="" class="link -full  darkblue c-darkblue">
            <span>
                <img src="{{ asset('/') }}/icons/forum.png" alt="" class="m">
                <span class="m">Форум</span>
            </span>
        </a>
        <a href="" class="link -full  darkblue c-darkblue">
            <span>
                <img src="{{ asset('/') }}/icons/info.png" alt="" class="m">
                <span class="m">Информация</span>
            </span>
        </a>
    </div>

    </div>

@endsection

