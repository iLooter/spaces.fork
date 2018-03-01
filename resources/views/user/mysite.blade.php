@extends('layouts.app')

@section('content')


    <div class="lc_br wbg font0 relative oh" id="header_path">
        <a href="" style="font-size:0;">
            <img src="{{ asset('/') }}/icons/home.png" alt="">
        </a>
        <span class="lc_brw">
            <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
            <span class="lc_br_text">@include('layouts.helpers.login_or_id')</span>
        </span>
    </div>

    @section('add_wrapper')
        @include('layouts.add_wrapper')
    @show
    <div>
        <div>
            <div class="stnd_padd oh pdb">
                <div class="left dot_pic">
                    <a class="tdn" href="">
                        <div class="inl_bl relative">
                            <img src="{{ asset('/') }}/icons/102713872.p.81.80.0.jpg" alt="" class="preview s81_80">
                        </div>
                    </a>
                    <div>
                        <a href="" class="bordered  on  signature"> В сети </a>
                    </div>
                </div>
                <div class="left">
                    <span class="m">
                        <a href="">
                            <img class="p14" src="{{ asset('/') }}/icons/man_on.gif" alt="(ON)">
                        </a>
                        <a href="" class="mysite-link">
                            <b class="nick black">@include('layouts.helpers.login_or_id')</b>
                        </a>
                    </span>
                    <span class="m">Ваш рейтинг:</span>
                    <div class="inl_bl m">
                        <a href="" class="bordered grey">0.3</a>
                    </div>
                    <div>
                        <div>
                           @include('layouts.helpers.mysite_nav_settings')
                        </div>
                    </div>
                </div>
            </div>
            <div class="stnd_padd light_border_bottom">
                <div class="relative">
                    <div id="original_status">
                        <div class="oh att_it mt_0">
                            <table class="table__wrap table__wrap-fixed table_no_borders show_icons">
                                <tbody>
                                <tr>
                                    <td class="table__cell m text_left">
                                        <span class="grey">Напишите приветствие</span>
                                    </td>
                                    <td class="table__cell m" width="16px">
                                        <a href="">
                                            <img src="{{ asset('/') }}/icons/edit_info.png" alt="" class="m p16 fl_n">
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">

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
        </div>

        <div class="tabs_block oh">
            <div class="tab_item left tab_active black"> Профиль</div>
            <a href="" class="tab_item left"> Анкета </a>
        </div>
        <div class="wrapper wbg">
            <div class="widgets-group links-group bb0">
                <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <img src="{{ asset('/') }}/icons/gb.png" alt="" class="m">
                        <span class="m">  Гостевая </span>
                        <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
                </a>
                <table class="table_no_borders sublink table__wrap-fixed bord-botm" width="100%"
                       style="border-spacing:0">
                    <tbody>
                    <tr>
                        <td class="table__cell_block text_left">
                            <a href="" class="link -full  darkblue c-darkblue">
                                <span>
                                    <img src="{{ asset('/') }}/icons/blog.png" alt="" class="m">
                                    <span class="m">Личный блог</span>
                                </span>
                            </a>
                        </td>
                        <td class="table__cell table__cell_block m" width="100px">
                            <div class="sub_link nowrap oh">
                                <a href="" class="link -full">
                                    <span>
                                        <span class="bordered blue c-blue">
                                            <span class=" blue c-blue">  Написать </span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <img src="{{ asset('/') }}/icons/game.png" alt="" class="m">
                        <span class="m">  Игры </span>
                        <span class="m">(3)</span>
                        <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
                </a>
                <div class="bord-botm">

                </div>
                <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <img src="{{ asset('/') }}/icons/photo.png" alt="" class="m">
                        <span class="m">  Фотографии </span>
                        <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
                </a>
                <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <img src="{{ asset('/') }}/icons/music.png" alt="" class="m">
                        <span class="m">  Музыка </span>
                        <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
                </a>
                <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <img src="{{ asset('/') }}/icons/video.png" alt="" class="m">
                        <span class="m">  Видео </span>
                        <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
                </a>
                <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <img src="{{ asset('/') }}/icons/file.png" alt="" class="m">
                        <span class="m">  Файлы </span>
                        <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
                </a>
                <div class="bord-botm">

                </div>
                <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <img src="{{ asset('/') }}/icons/comm.png" alt="" class="m">
                        <span class="m">  Сообщества </span>
                        <span class="m">(1)</span>
                        <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
                </a>
                <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <img src="{{ asset('/') }}/icons/friends.png" alt="" class="m">
                        <span class="m">  Друзья </span>
                        <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
                </a>
                <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <img src="{{ asset('/') }}/icons/int_people.png" alt="" class="m">
                        <span class="m">  Найдите интересных друзей </span>
                        <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
                </a>
                <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <img src="{{ asset('/') }}/icons/settings.png" alt="" class="m">
                        <span class="m">  Настройки </span>
                        <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
                </a>
                <div class="bord-botm">

                </div>
                <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <img src="{{ asset('/') }}/icons/exit.png" alt="" class="m">
                        <span class="m">  Выход </span>
                        <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
                </a>
            </div>
        </div>
        <div class="wrapper">
            <a href="" class="link -full">
                <span>
                    <img src="{{ asset('/') }}/icons/gifts.png" alt="" class="m">
                    <span class="m">Сделать подарок id47612653</span>
                </span>
            </a>
        </div>
    </div>
    <div style="height: 1px;"></div>
    </div>


@endsection