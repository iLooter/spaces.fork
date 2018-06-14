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
        <form action="" method="post">


            @csrf

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
                                            <input maxlength="64" name="search_login" value="" class="input-txt"
                                                   placeholder="Введите  ник">
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

            @if( $errors->any() )
                <div class="wrapper bb0">
                    <div class="block bord-botm"> {{ $errors->first() }} </div>
                </div>
            @endif

            @if(!empty($users))

                <div class="wrapper bb0">
                    <div class="bord-botm fix_btn-width">
                        <div class="list f-c_fll">

                            @foreach ($users as $user)

                                <div class="{{ $users->last()->id == $user->id ? "last" : "" }}">
                                <div class="js-row block bord-botm oh grey relative">
                                    <div class="left font0">
                                        <a href="{{ route('messenger.new_message', ['user' => $user->login]) }}"
                                           class="tdn">
                                                    <span class="pr">
                                                        <div class="inl_bl relative">
                                                            <img src="" alt="" itemprop="thumbnailUrl"
                                                                 class="preview s41_40">
                                                        </div>
                                                     </span>
                                        </a>
                                    </div>
                                    <div class="pre_content_wrap break-word black">
                                        <img class="p14" src="//s.spac.me/i/man_off.gif" alt="(OFF)">
                                        <a href="{{ route('messenger.new_message', ['user' => $user->login]) }}"
                                           class="black full_link">
                                            <b>{{ $user->login }}</b>
                                        </a>
                                        <div class="grey">

                                        </div>
                                    </div>

                                    </div>
                                    @endforeach

                                </div>

                        </div>
                    </div>
                </div>
            @endif

        </form>


        <a href="{{ redirect()->back() }}" class="link darkblue return full_link">
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