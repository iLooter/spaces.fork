@extends('layouts.app')

@section('content')

        <div class="wrapper">
            <div class="js-row block bord-botm oh grey relative block-cntrl">
                <div class="left font0">
                    <a href="" class="tdn">
                        <span class="pr">
                            <div class="inl_bl relative">
                                <img src="{{ asset('/') }}/101115855.p.41.40.0.jpg" alt="" itemprop="thumbnailUrl" class="preview s41_40">
                            </div>
                        </span>
                    </a>
                </div>
                <div class="pre_content_wrap break-word black">
                    <img class="p14" src="{{ asset('/') }}/man_off.gif" alt="(OFF)">
                    <a href="" class="black full_link">
                        <b>QwertyRa</b>
                    </a>
                    <span class="grey">(22 мая в 18:06)</span>
                    <div class="grey"></div>
                </div>
                <div class="menu_btn" onclick="return Spoilers.click(this)" data-toggle="more_menu_65687151" title="Действия">
                    <img src="{{ asset('/') }}/arrow_bottom.png" data-hide="arrow_up.png" data-show="arrow_bottom.png" id="more_menu_65687151-icon" alt="" class="p16">
                </div>
            </div>
            <div id="more_menu_65687151" class="js-row wrap_list hide wbg">
                <div>
                    <a href="" class="link -full">
                        <span>
                            <img src="{{ asset('/') }}/plus_grey.png" alt="" class="m">
                            <span class="m">Добавить собеседников</span>
                        </span>
                    </a>
                </div>
                <div>
                    <a href="" class="link -full">
                        <span>
                            <img src="{{ asset('/') }}/attach.png" alt="" class="m">
                            <span class="m">Вложения</span>
                        </span>
                    </a>
                </div>
                <div>
                    <a href="" class="link -full">
                        <span>
                            <img src="{{ asset('/') }}/archive.png" alt="" class="m">
                            <span class="m">В архив</span>
                        </span>
                    </a>
                </div>
                <div>
                    <a href="" class="link -full   red c-red">
                        <span>
                            <img src="{{ asset('/') }}/garbage_red.png" alt="" class="m">
                            <span class="m">Удалить</span>
                        </span>
                    </a>
                </div>
            </div>
            <div id="loadNewMessages_place"></div>
            <div class="wbg" id="messages_list_form">
                <div class="mail_form_fix">
                    <form action="" method="post">
                        <div>

                        </div>
                        <div class="error__item_wrapper">
                            <div class="block  js-toolbar_wrap">
                                <div class="text-input__wrap">
                                    <div class="cl" style="margin-bottom: 5px;">
                                        <div class="relative">
                                            <div class="js-toolbar toolbar">
                                                <span class="right counterBlock">
                                                    <span id="tcounter_tb_1527161901376">0</span>/20000</span>
                                                <table class="bb_table hide" id="bbtable_tb_1527161901376">
                                                    <tbody>
                                                    <tr>
                                                        <td class="bb_cell">
                                                            <a href="" data-tag="quote" class="js-bb bb bb_quote" title="Вставить цитату" id="tb_1527161901376-quote">
                                                                <img src="{{ asset('/') }}/quote.png" alt="" class="m">
                                                            </a>
                                                        </td>
                                                        <td class="bb_cell">
                                                            <a href="" data-tag="url" class="js-bb bb bb_url" title="Вставить ссылку" id="tb_1527161901376-url">
                                                                <img src="{{ asset('/') }}/link.png" alt="" class="m">
                                                            </a>
                                                        </td>
                                                        <td class="bb_cell">
                                                            <a href="" data-tag="color" class="js-bb bb bb_color" title="Цветной текст" id="tb_1527161901376-color">
                                                                <img src="{{ asset('/') }}/color.png" alt="" class="m">
                                                            </a>
                                                        </td>
                                                        <td class="bb_cell">
                                                            <a href="" data-tag="b" class="js-bb bb bb_b" title="Жирный текст" id="tb_1527161901376-b">
                                                                <img src="{{ asset('/') }}/bold.png" alt="" class="m">
                                                            </a>
                                                        </td>
                                                        <td class="bb_cell">
                                                            <a href="" data-tag="i" class="js-bb bb bb_i" title="Наклонутый текст" id="tb_1527161901376-i">
                                                                <img src="{{ asset('/') }}/italics.png" alt="" class="m">
                                                            </a>
                                                        </td>
                                                        <td class="bb_cell">
                                                            <a href="" data-tag="u" class="js-bb bb bb_u" title="Подчёркнутый текст" id="tb_1527161901376-u">
                                                                <img src="{{ asset('/') }}/underline.png" alt="" class="m">
                                                            </a>
                                                        </td>
                                                        <td class="bb_cell">
                                                            <a href="" data-tag="s" class="js-bb bb bb_s" title="Зачёркнутый текст" id="tb_1527161901376-s">
                                                                <img src="{{ asset('/') }}/strike.png" alt="" class="m">
                                                            </a>
                                                        </td>
                                                        <td class="bb_cell">
                                                            <a href="" data-tag="smile" class="js-bb bb bb_smile" title="Смайлы" id="tb_1527161901376-smile">
                                                                <img src="{{ asset('/') }}/smile.png" alt="" class="m">
                                                            </a>
                                                        </td>
                                                        <td class="bb_cell">
                                                            <a href="" data-tag="code" class="js-bb bb bb_code" title="Код" id="tb_1527161901376-code">
                                                                <img src="{{ asset('/') }}/code.png" alt="" class="m">
                                                            </a>
                                                        </td>
                                                        <td class="bb_cell">
                                                            <a href="" data-tag="fon" class="js-bb bb bb_fon" title="Фон текста" id="tb_1527161901376-fon">
                                                                <img src="{{ asset('/') }}/bg.png" alt="" class="m">
                                                            </a>
                                                        </td>
                                                        <td class="bb_cell">
                                                            <a href="" data-tag="more" class="js-bb bb bb_more" title="Ещё" id="tb_1527161901376-more">
                                                                <img src="{{ asset('/') }}/dots_light.png" alt="" class="m">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="hide"></tr>
                                                    <tr class="hide"></tr>
                                                    <tr class="hide"></tr>
                                                    </tbody>
                                                </table>
                                                <div id="bbmenu_tb_1527161901376"></div>&nbsp;
                                            </div>
                                            <div class="input-txt_wrapper">
                                                <textarea class="input-txt" tabindex="1"
                                                                                     name="texttT" rows="4"
                                                                                     id="textarea"
                                                                                     data-maxlength="20000"
                                                                                     data-toolbar="{hide:true,disable:{}}"
                                                                                     cols="17">

                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="hide" id="toolbar_payload"
                                          data-stickers="[&quot;http://spaces.ru/services/stickers/?cat=1&amp;link_id=500994&quot;,&quot;http://spaces.ru/services/stickers/?cat=2&amp;link_id=500994&quot;,&quot;http://spaces.ru/services/stickers/?cat=3&amp;link_id=500994&quot;,&quot;http://spaces.ru/services/stickers/?cat=4&amp;link_id=500994&quot;,&quot;http://spaces.ru/services/stickers/?cat=5&amp;link_id=500994&quot;]"
                                          data-clipboard=""></span>
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
                                            <img src="{{ asset('/') }}/smile(1).png" alt="" class="m">
                                            <span class="m"></span>
                                        </button>
                                    </span>
                                    <span class="form-tools__left left">
                                        <span class="js-bb_toggle">
                                            <button name="response_btn" value="" class="url-btn" id="response_btn">
                                                <img src="{{ asset('/') }}/a.png" alt="" class="m">
                                                <span class="m"></span>
                                            </button>
                                        </span>
                                    </span>
                                    <div class="cl"></div>
                                </div>
                                <div class="js-attach_menu spoiler_inject"></div>
                            </div>
                        </div>

                    </form>
                    <div class="cl"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="pad_t_a">
                <div class="mail__dialog_wrapper mail__dialog_my" id="m366536338">
                    <div class="   block_narrow pdt pad_b_a  ">
                        <div class="  block message my  ">
                            <div class="oh">
                                <span style="color:#CC0000" class="not_read_text">(не прочитано)</span>
                                <span class="slb right padd_left">
                                    <a href="">
                                        <span class="slb m padd_right">в 14:38</span>
                                        <img src="{{ asset('/') }}/dots_grey.png" alt="" class="m" width="3px" height="15px">
                                    </a>
                                </span>
                            </div>
                            <div class="word_break">
                                <div>
                                    <div>
                                        <div id="previewText366536338"> test</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cl"></div>
                </div>
                <div class="mail__dialog_wrapper mail__dialog_my" id="m366416779">
                    <div class="   block_narrow pdt pad_b_a  ">
                        <div class="  block message my  ">
                            <div class="oh">
                                <span style="color:#CC0000" class="not_read_text">(не прочитано)</span>
                                <span class="slb right padd_left">
                                    <a href="">
                                        <span class="slb m padd_right">вчера в 16:22</span>
                                        <img src="{{ asset('/') }}/dots_grey.png" alt="" class="m" width="3px" height="15px">
                                    </a>
                                </span>
                            </div>
                            <div class="word_break">
                                <div>
                                    <div>
                                        <div id="previewText366416779"> test</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cl"></div>
                </div>
                <div class="mail__dialog_wrapper mail__dialog_my" id="m366318433">
                    <div class="block_narrow pdt pad_b_a">
                        <div class="block message my">
                            <div class="oh"><span style="color:#CC0000" class="not_read_text">(не прочитано)</span>
                                <span class="slb right padd_left">
                                    <a href="">
                                        <span class="slb m padd_right">22 мая в 21:01</span>
                                        <img src="{{ asset('/') }}/dots_grey.png" alt="" class="m" width="3px" height="15px">
                                    </a>
                                </span>
                            </div>
                            <div class="word_break">
                                <div>
                                    <div>
                                        <div id="previewText366318433"> Ку</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cl"></div>
                </div>
                <div class="mail__dialog_wrapper mail__dialog_my" id="m366304698">
                    <div class="   block_narrow pdt pad_b_a  ">
                        <div class="  block message my  ">
                            <div class="oh"><span style="color:#CC0000" class="not_read_text">(не прочитано)</span>
                                <span class="slb right padd_left">
                                    <a href="">
                                        <span class="slb m padd_right">22 мая в 18:44</span>
                                        <img src="{{ asset('/') }}/dots_grey.png" alt="" class="m" width="3px" height="15px">
                                    </a>
                                </span>
                            </div>
                            <div class="word_break">
                                <div>
                                    <div>
                                        <div id="previewText366304698"> test</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cl"></div>
                </div>
                <div class="mail__dialog_wrapper mail__dialog_my" id="m366301312">
                    <div class="   block_narrow pdt pad_b_a  ">
                        <div class="  block message my  ">
                            <div class="oh">
                                <span style="color:#CC0000" class="not_read_text">(не прочитано)</span>
                                <span class="slb right padd_left">
                                    <a href="">
                                        <span class="slb m padd_right">22 мая в 18:10</span>
                                        <img src="{{ asset('/') }}/dots_grey.png" alt="" class="m" width="3px" height="15px">
                                    </a>
                                </span>
                            </div>
                            <div class="word_break">
                                <div>
                                    <div>
                                        <div id="previewText366301312"> Привет</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cl"></div>
                </div>
            </div>
        </div>
        <div class="wrapper wrap_list">
            <div>
                <a href="" class="link -full">
                    <span>
                        <img src="{{ asset('/') }}/archive.png" alt="" class="m">
                        <span class="m">В архив</span>
                    </span>
                </a>
            </div>
            <div>
                <a href="" class="link -full">
                    <span>
                        <img src="{{ asset('/') }}/garbage.png" alt="" class="m">
                        <span class="m">Удалить</span>
                    </span>
                </a>
            </div>
        </div>
        <a href="http://spaces.ru/mail/write/?Link_id=1264599" class="link darkblue return full_link">
            <span class="ico ico_arrow-back"></span> Назад </a>
        <script type="text/javascript">require('gallery')</script>
        <div style="height: 1px;"></div>
@endsection