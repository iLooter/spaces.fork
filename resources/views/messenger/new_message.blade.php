@extends('layouts.app')

@section('content')
<div class="main">
    <div class="lc_br wbg font0 relative oh" id="header_path">
        <a href="http://spaces.ru/" style="font-size:0;">
            <img src="{{ asset('/') }}/icons/home.png" alt="">
        </a>
        <span class="lc_brw">
            <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
            <a href="http://spaces.ru/mysite/?name=id22780475">id22780475</a>
        </span>
        <span class="lc_brw">
            <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
            <a href="http://spaces.ru/mail/">Почта</a>
        </span>
        <span class="lc_brw">
            <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
            <span class="lc_br_text">Новое сообщение</span>
        </span>
    </div>
    <div class="wrapper" id="stickers_on">
        <form action="{{ route('messenger.new_message') }}" method="post" _lpchecked="1">

            @csrf

            <div class="block block_fix  pdb">
                <div>

                    <label class="lbl">
                        Выберите собеседников:
                    </label>
                    <input type="submit" class="hide" value="" name="css">
                    <table class="table__wrap table_no_borders show_icons">
                        <tbody>
                        <tr>
                            <td class="table__cell" width="100%">
                                <div class="input-txt_wrapper_inline">

                                    @if(! empty($sendToUser))
                                        <div class="left ">
                                            <div class="oh ">
                                            <span class="s-property">
                                                <div class="s-property__inner">{{ $sendToUser }}<input type="submit" name="gl_sud_14440512" value="." class="ico delete-btn"></div>
                                            </span>
                                            </div>
                                        </div>
                                    @endif

                                    <input maxlength="64" name="username" value="" class="input-txt left font-medium" placeholder="Имя, ник или E-mail">
                                </div>
                            </td>
                            <td class="table__cell" style="padding-left:10px;">
                                <button class="btn-min btn-min_fix" type="submit" value="Изменить" name="gl_g2s">
                                    <span class="ico ico_search"></span>
                                </button>
                            </td>
                            <td class="table__cell" style="padding-left:10px;">
                                <button class="btn-min btn-min_fix" type="submit" value="Изменить" name="gl_g2s">
                                    <span class="ico ico_mode_fronl"></span>
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="error__item_wrapper"></div>
            </div>
            <div class="error__item_wrapper">
                <div class="block  js-toolbar_wrap">
                    <label class="lbl">Ваше сообщение:</label>
                    <div class="text-input__wrap">
                        <div class="cl" style="margin-bottom: 5px;">
                            <div class="relative">
                                <div class="js-toolbar toolbar">
                                    <span class="right counterBlock">
                                        <span id="tcounter_tb_1527002910488">0</span>/20000</span>
                                    <table class="bb_table" id="bbtable_tb_1527002910488">
                                        <tbody>
                                        <tr>
                                            <td class="bb_cell">
                                                <a href="" data-tag="quote" class="js-bb bb bb_quote" title="Вставить цитату" id="tb_1527002910488-quote">
                                                    <img src="{{ asset('/') }}/icons/quote.png" alt="" class="m">
                                                </a>
                                            </td>
                                            <td class="bb_cell">
                                                <a href="" data-tag="url" class="js-bb bb bb_url" title="Вставить ссылку" id="tb_1527002910488-url">
                                                    <img src="{{ asset('/') }}/icons/link.png" alt="" class="m">
                                                </a>
                                            </td>
                                            <td class="bb_cell">
                                                <a href="" data-tag="color" class="js-bb bb bb_color" title="Цветной текст" id="tb_1527002910488-color">
                                                    <img src="{{ asset('/') }}/icons/color.png" alt="" class="m">
                                                </a>
                                            </td>
                                            <td class="bb_cell">
                                                <a href="" data-tag="b" class="js-bb bb bb_b" title="Жирный текст" id="tb_1527002910488-b">
                                                    <img src="{{ asset('/') }}/icons/bold.png" alt="" class="m">
                                                </a>
                                            </td>
                                            <td class="bb_cell">
                                                <a href="" data-tag="i" class="js-bb bb bb_i" title="Наклонутый текст" id="tb_1527002910488-i">
                                                    <img src="{{ asset('/') }}/icons/italics.png"
                                                            alt="" class="m">
                                                </a>
                                            </td>
                                            <td class="bb_cell">
                                                <a href="" data-tag="u" class="js-bb bb bb_u" title="Подчёркнутый текст" id="tb_1527002910488-u">
                                                    <img src="{{ asset('/') }}/icons/underline.png" alt="" class="m">
                                                </a>
                                            </td>
                                            <td class="bb_cell">
                                                <a href=""
                                                        data-tag="s" class="js-bb bb bb_s" title="Зачёркнутый текст"
                                                        id="tb_1527002910488-s">
                                                    <img src="{{ asset('/') }}/icons/strike.png" alt="" class="m">
                                                </a>
                                            </td>
                                            <td class="bb_cell">
                                                <a href="" data-tag="smile" class="js-bb bb bb_smile" title="Смайлы" id="tb_1527002910488-smile">
                                                    <img src="{{ asset('/') }}/icons/smile_light.png" alt="" class="m">
                                                </a>
                                            </td>
                                            <td class="bb_cell">
                                                <a href="" data-tag="code" class="js-bb bb bb_code" title="Код" id="tb_1527002910488-code">
                                                    <img src="{{ asset('/') }}/icons/code.png" alt="" class="m">
                                                </a>
                                            </td>
                                            <td class="bb_cell">
                                                <a href="" data-tag="fon" class="js-bb bb bb_fon" title="Фон текста" id="tb_1527002910488-fon">
                                                    <img src="{{ asset('/') }}/icons/bg.png" alt="" class="m">
                                                </a>
                                            </td>
                                            <td class="bb_cell hide">
                                                <a href="" data-tag="more" class="js-bb bb bb_more" title="Ещё" id="tb_1527002910488-more">
                                                    <img src="{{ asset('/') }}/icons/dots_light.png" alt="" class="m">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="hide"></tr>
                                        <tr class="hide"></tr>
                                        <tr class="hide"></tr>
                                        </tbody>
                                    </table>
                                    <div id="bbmenu_tb_1527002910488" class="hide"></div>
                                    <div id="sm_tb_1527002910488" class="smiles_menu hide"></div>
                                </div>
                                <div class="input-txt_wrapper">
                                    <textarea class="input-txt" tabindex="1"
                                              name="textmessage" rows="4" id="textarea"
                                              data-maxlength="20000"
                                              data-toolbar="{disable:{}}" cols="17"
                                              placeholder="Введите сообщение">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <span class="hide" id="toolbar_payload"
                              data-stickers=""
                              data-clipboard="">

                        </span>
                        <script type="text/javascript">require("form_toolbar")</script>
                    </div>
                </div>
                <div class="block block_fix  pdt">
                    <span id="captcha">  </span>
                    <div class="right">
                        <input type="submit" name="cfms" value="Отправить" class="main_submit">
                    </div>
                    <div class="tools-wrap o_vis">
                        <span class="form-tools__left left">
                            <button name="smiles_btn" value="" class="url-btn" id="smiles_btn">
                                <img src="{{ asset('/') }}/icons/smile.png" alt="" class="m">
                                <span class="m"></span>
                            </button>
                        </span>
                        <div class="cl"></div>
                    </div>
                    <div class="js-attach_menu spoiler_inject spoiler_inject-top"></div>
                </div>
            </div>

        </form>
        <div class="cl"></div>
    </div>
    <a href="http://spaces.ru/mail/write/?Link_id=672651" class="link darkblue return full_link">
        <span class="ico ico_arrow-back">
        </span> Назад </a>
    <script type="text/javascript">require('gallery')</script>
    <div style="height: 1px;"></div>
</div>
<div class="lc_br wbg font0 relative oh" id="footer_path">
    <a href="http://spaces.ru/" style="font-size:0;">
        <img src="{{ asset('/') }}/icons/home.png" alt="">
    </a>
    <span class="lc_brw">
        <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
        <a href="http://spaces.ru/mysite/?name=id22780475">id22780475</a>
    </span>
    <span class="lc_brw">
        <img src=".{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
        <a href="http://spaces.ru/mail/">Почта</a>
    </span>
    <span class="lc_brw">
        <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
        <span class="lc_br_text">Новое сообщение</span>
    </span>
</div>
@endsection