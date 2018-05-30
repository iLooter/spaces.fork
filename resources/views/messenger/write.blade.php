@extends('layouts.app')
@section('content')
    <div class="main">
        <div class="lc_br wbg font0 relative oh" id="header_path">
            <a href="" style="font-size:0;">
                <img src="{{ asset('/') }}/icons/home.png" alt=""> </a>
            <span class="lc_brw">
                <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
                <a href="">id22780475</a>
            </span>
            <span class="lc_brw">
                <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
                <a href="">Почта</a>
            </span>
            <span class="lc_brw">
                <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
                <span class="lc_br_text">Новое сообщение</span>
            </span>
        </div>
        <div class="wrapper">
            <div class="list f-c_fll">
                <a href="" class="link -full   blue c-blue">
                    <span>
                        <img src="{{ asset('/') }}/icons/users_blue.png" alt="" class="m">
                        <span class="m">Создать групповую беседу</span>
                    </span>
                </a>
                <div class="last">
                    <a href="{{ route('messenger.new_message') }}" class="link -full   blue c-blue">
                        <span>
                            <img src="{{ asset('/') }}/icons/befriends_blue.png" alt="" class="m">
                            <span class="m">Новый контакт</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <form action="" method="post">
            <input type="hidden" name="Link_id" value="672651">
            <input type="hidden" name="sid" value="6066638039259188">
            <input type="hidden" name="CK" value="9188">
            <input type="hidden" name="Sgsm" value="">
            <input type="hidden" name="gl_psq" value="">
            <input type="hidden" name="s" value="mail_write_aV19hQl4UUVv481gCCApJw">
            <div class="wrapper-nobg none_border">
                <input type="submit" class="hide" value="" name="">
                <table class="table__wrap table_no_borders show_icons">
                    <tbody>
                    <tr>
                        <td class="table__cell" width="100%">
                            <table class="table__wrap search-wrap input-txt_grid">
                                <tbody>
                                <tr>
                                    <td class="input-txt_grid_input">
                                        <div class="input-txt_wrapper_search relative">
                                            <input maxlength="64" name="gl_sq" value="" class="input-txt"
                                                   placeholder="Введите имя или ник">
                                        </div>
                                    </td>
                                    <td class="input-txt_grid_sep">
                                    </td>
                                    <td class="input-txt_grid_btn">
                                        <input type="submit" class="search__btn" value="Найти">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="wrapper bb0">
                <div class="bord-botm fix_btn-width">
                    <div class="list f-c_fll">
                        <div class="last">
                            <label class="block oh break-word bord-botm">
                                <img src="{{ asset('/') }}/icons/4.png" alt="" class="p16 m dot_pic">
                                <input class="darkblue inline_button m b font-medium" type="submit"
                                       name="gl_cg_91502506" value="Семья">
                                <div class="right grey font-medium" style="padding: 5px 0;"> 0 человек</div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <a href="http://spaces.ru/mail/?Link_id=635507" class="link darkblue return full_link">
            <span class="ico ico_arrow-back">
            </span> Назад
        </a>
        <div style="height: 1px;"></div>
    </div>
    <div class="lc_br wbg font0 relative oh" id="footer_path">
        <a href="http://spaces.ru/?sid=6066638039259188" style="font-size:0;">
            <img src="{{ asset('/') }}/icons/home.png" alt="">
        </a>
        <span class="lc_brw">
            <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
            <a href="">id22780475</a>
        </span>
        <span class="lc_brw">
            <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
            <a href="http://spaces.ru/mail/?sid=6066638039259188">Почта</a>
        </span>
        <span class="lc_brw">
            <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
            <span class="lc_br_text">Новое сообщение</span>
        </span>
    </div>

@endsection