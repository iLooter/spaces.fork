@extends('layouts.app')

@section('content')

<div class="wrapper">
    <a href="{{ url('/settings/change_login') }}" class="link -full    blue c-blue  link_arrow">
        <span>
            <table class="table__wrap table_no_borders">
                <tbody>
                <tr>
                    <td class="table__cell text_left" width="42px">
                        <img src="{{ asset('/') }}/icons/pair_users_blue_b.png" alt="" width="32px" height="32px">
                    </td>
                    <td class="table__cell text_left">
                        <span class="m">  Выберите свой ник, по которому вас будут идентифицировать на сайте </span>
                    </td>
                </tr>
                </tbody>
            </table>
        </span>
    </a>
</div>

<div class="wrapper">
    <div class="block grey">
        <a class="right relative z10 sq_click" href="">
            <img class="m p16" src="{{ asset('/') }}/icons/cross_light.png" alt="">
        </a>
        <a href="" class="link -full    blue c-blue  link_arrow">
            <span>
                <table class="table__wrap table_no_borders">
                    <tbody>
                    <tr>
                        <td class="table__cell text_left" width="42px">
                            <img src="{{ asset('/') }}/icons/pair_users_blue_b.png" alt="" width="32px" height="32px">
                        </td>
                        <td class="table__cell text_left">
                            <span class="m">  Найти друзей </span>
                            <div class="grey m lbl_sub_text"> Узнайте, кто из ваших друзей уже зарегистрирован на Spaces </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
            </span>
        </a>
    </div>
</div>

<div class="wrapper oh">
    <div class="block pdb">
        <div class="upcs b"> Найдите друзей на spaces</div>
        <div class="grey"> Выполнено 1 из 6</div>
    </div>
    <div>
        <a href="" class="link arrow">
            <img src="{{ asset('/') }}/icons/com_closed.gif" alt="" class="m" width="9px" height="9px">
            <span class="m">Сделайте закладку для входа</span>
            <br>
        </a>
        <a href="" class="link">
            <img src="{{ asset('/') }}/icons/com_open.gif" alt="" class="m" width="9px" height="9px">
            <span class="m">Сохраните свой аккаунт</span>
            <br>
            <span class="green">Выполнено</span>
        </a>
        <a href="" class="link arrow">
            <img src="{{ asset('/') }}/icons/com_closed.gif" alt="" class="m" width="9px" height="9px">
            <span class="m">Заполните анкету</span>
            <br>
        </a>
        <a href="" class="link arrow">
            <img src="{{ asset('/') }}/icons/com_closed.gif" alt="" class="m" width="9px" height="9px">
            <span class="m">Найдите друзей</span>
            <br>
        </a>
        <a href="" class="link arrow">
            <img src="{{ asset('/') }}/icons/com_closed.gif" alt="" class="m" width="9px" height="9px">
            <span class="m">Используйте поиск</span>
            <br>
        </a>
        <a href="" class="link arrow">
            <img src="{{ asset('/') }}/icons/com_closed.gif" alt="" class="m" width="9px" height="9px">
            <span class="m">Пригласите друзей</span>
            <br>
        </a>
    </div>
</div>

<!-- Startpage -->
<div class="bord-botm">
    <div class="wrapper-nobg">
        <form action="" method="post">
            <input type="hidden" name="link_id" value="925840">
            <input type="hidden" name="from" value="sidebar">
            <input type="hidden" name="CK" value="1">
            <table class="table__wrap search-wrap input-txt_grid">
                <tbody>
                <tr>
                    <td class="input-txt_grid_input">
                        <div class="input-txt_wrapper_search relative">
                            <input type="text" class="input-txt" name="q" value="" maxlength="64">
                        </div>
                    </td>
                    <td class="input-txt_grid_sep"></td>
                    <td class="input-txt_grid_btn">
                        <input type="submit" class="search__btn" value="Найти" name="cfms"></td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>

<div class="list_item grey_bg">
    <table class="table__wrap table_no_borders show_icons">
        <tbody>
        <tr>
            <td class="table__cell b m text_left"> Разделы сайта</td>
            <td class="table__cell m" width="16px">
                <a href="">
                    <img src="{{ asset('/') }}/icons/settings.png" alt="" class="m p16">
                </a>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<a href="" class="link darkblue">
    <img src="{{ asset('/') }}/icons/exchange_bright_m.png" alt="" class="m p16">
    <span class="m">Зона обмена</span>
</a>

<a href="" class="link darkblue">
    <img src="{{ asset('/') }}/icons/music_bright_m.png" alt="" class="m p16">
    <span class="m">Музыка</span>
</a>

<a href="" class="link darkblue">
    <img src="{{ asset('/') }}/icons/love_bright_m.png" alt="" class="m p16">
    <span class="m">Знакомства</span>
</a>

<a href="" class="link darkblue">
    <img src="{{ asset('/') }}/icons/diary_bright_m.png" alt="" class="m p16">
    <span class="m">Блоги</span>
</a>

<a href="" class="link darkblue">
    <img src="{{ asset('/') }}/icons/community_bright_m.png" alt="" class="m p16">
    <span class="m">Сообщества</span>
</a>

<a href="" class="link darkblue">
    <img src="{{ asset('/') }}/icons/forum_bright_m.png" alt="" class="m p16">
    <span class="m">Форум</span>
</a>

<a href="" class="link darkblue">
    <img src="{{ asset('/') }}/icons/chat_bright_m.png" alt="" class="m p16">
    <span class="m">Чат</span>
</a>

<a href="" class="link darkblue">
    <img src="{{ asset('/') }}/icons/games_bright_m.png" alt="" class="m p16">
    <span class="m">Игры</span>
</a>

<a href="" class="link darkblue">
    <img src="{{ asset('/') }}/icons/announcement_bright_m.png" alt="" class="m p16">
    <span class="m">Объявления</span>
</a>

<a href=""  class="link darkblue">
    <img src="{{ asset('/') }}/icons/people_bright_m.png" alt="" class="m p16">
    <span class="m">Люди</span>
</a>

<a href="" class="link darkblue bord-botm">
    <img src="{{ asset('/') }}/icons/mobiles_bright_m.png" alt="" class="m p16">
    <span class="m">Каталог мобильных устройств</span>
</a>

<div class="list_item grey_bg">
    <table class="table__wrap table_no_borders show_icons">
        <tbody>
        <tr>
            <td class="table__cell b m text_left"> Мои разделы</td>
            <td class="table__cell m" width="16px">
                <a href="">
                    <img src="{{ asset('/') }}/icons/settings.png" alt="" class="m p16">
                </a>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<a href="" class="link darkblue">
    <img src="{{ asset('/') }}/icons/friends_bright_m.png" alt="" class="m p16">
    <span class="m">Друзья</span>
</a>

<a href="" class="link darkblue">
    <img src="{{ asset('/') }}/icons/photos_bright_m.png" alt="" class="m p16">
    <span class="m">Мои фото</span>
</a>

<a href="" class="link darkblue">
    <img src="{{ asset('/') }}/icons/music_bright_m.png" alt="" class="m p16">
    <span class="m">Моя музыка</span>
</a>

<a href="" class="link darkblue">
    <img src="{{ asset('/') }}/icons/videos_bright_m.png" alt="" class="m p16">
    <span class="m">Моё видео</span>
</a>

<a href="" class="link darkblue">
    <img src="{{ asset('/') }}/icons/files_bright_m.png" alt="" class="m p16">
    <span class="m">Мои файлы</span>
</a>
<a href="" class="link darkblue">
    <img src="{{ asset('/') }}/icons/favorites_bright_m.png" alt="" class="m p16">
    <span class="m">Закладки</span>
</a>
<a href="" class="link darkblue bord-botm">
    <img src="{{ asset('/') }}/icons/history_bright_m.png" alt="" class="m p16">
    <span class="m">История посещений</span>
</a>

<div class="list_item grey_bg oh">
    <table class="table__wrap table_no_borders show_icons">
        <tbody>
        <tr>
            <td class="table__cell b m text_left">
                <a href="">
                    Мои сообщества
                </a>
            </td>
            <td class="table__cell m" width="16px">
                <a href="">
                    <img src="{{ asset('/') }}/icons/settings.png" alt="" class="m p16">
                </a>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<div class="block oh relative bord-botm">
    <div class="left p40">
        <span class="pr">
            <div class="inl_bl relative">
                <img src="{{ asset('/') }}/icons/94774174.p.81.80.0.jpg" alt="" class="preview s81_80">
            </div>
        </span>
    </div>
    <div class="oh pre_content_wrap">
        <a href="" class="full_link">
            <b class="word_break">Инфо-помощь на Spaces.ru</b>
        </a>
        <div class="relative">
            <a href="">Форум</a>
            <a href="">Блог</a>
        </div>
    </div>
</div>


<div class="list_item grey_bg b"> Настройки</div>
<a href="" class="link darkblue">
    <img src="{{ asset('/') }}/icons/menu_bright_m.png" alt="" class="m p16">
    <span class="m">Настроить меню</span>
</a>
<a href="" class="link darkblue">
    <img src="{{ asset('/') }}/icons/allservices_gray_bright_m.png" alt="" class="m p16">
    <span class="m">Дополнительные услуги</span>
</a>
<a href="{{ route('settings.index') }}" class="link darkblue">
    <img src="{{ asset('/') }}/icons/options_bright_m.png" alt="" class="m p16">
    <span class="m">Настройки</span>
</a>
<a href="" class="link darkblue">
    <img src="{{ asset('/') }}/icons/help_bright_m.png" alt="" class="m p16">
    <span class="m">Помощь</span>
</a>
<a href="" class="link darkblue">
    <img src="{{ asset('/') }}/icons/exit_bright_m.png" alt="" class="m p16">
    <span class="m">Выход</span> </a>

<div class="cl"></div>
<div style="height: 1px;"></div>
@endsection