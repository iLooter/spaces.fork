@extends('layouts.app')

@section('content')

        <div class="lc_br wbg font0 relative oh" id="header_path">
            <a href="http://spaces.ru/" style="font-size:0;">
                <img src="{{ asset('/') }}/icons/home.png" alt="">
            </a>
            <span class="lc_brw">
                <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
                <a href="http://spaces.ru/mysite/?name=QwertyRa">QwertyRa</a>
            </span>
            <span class="lc_brw">
                <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
                <a href="http://spaces.ru/mail/?List=0">Почта</a>
            </span>
            <span class="lc_brw">
                <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
                <a href="http://spaces.ru/mail/message_list/?Contact=27059774&amp;Link_id=180886&amp;List=0">id22780475</a>
            </span>
        </div>
        <div class="wrapper">
            <div class="js-row block bord-botm oh grey relative block-cntrl">
                <div class="left font0">
                    <a href="http://spaces.ru/mysite/?link_id=186320&amp;name=id22780475" class="tdn">
                        <span class="pr">
                            <div class="inl_bl relative">
                                <img src="{{ asset('/') }}/icons/210878384.p.41.40.0.jpg" alt="" itemprop="thumbnailUrl" class="preview s41_40">
                            </div>
                        </span>
                    </a>
                </div>
                <div class="pre_content_wrap break-word black">
                    <img class="p14" src="{{ asset('/') }}/icons/male_off.gif" alt="online_status">
                    <a href="http://spaces.ru/mysite/?link_id=186320&amp;name=id22780475" class="black full_link">
                        <b>{{ Auth::user()->getLoginOrId() }}</b>
                    </a>
                    <span class="grey">(вчера в 20:04)</span>
                    <div class="grey"></div>
                </div>
                <div class="menu_btn" onclick="return Spoilers.click(this)" data-toggle="more_menu_65937856" title="Действия">
                    <img src="{{ asset('/') }}/icons/arrow_bottom.png" data-hide="arrow_up.png" data-show="arrow_bottom.png" id="more_menu_65937856-icon" alt="" class="p16">
                </div>
            </div>
            <div id="more_menu_65937856" class="js-row wrap_list hide wbg">
                <div>
                    <a href="" class="link-full"> <span>
                            <img src="{{ asset('/') }}/icons/plus_grey.png" alt="" class="m">
                            <span class="m">Добавить собеседников</span>
                        </span>
                    </a>
                </div>
                <div>
                    <a href="" class="link-full">
                        <span>
                            <img src="{{ asset('/') }}/icons/attach.png" alt="" class="m">
                            <span class="m">Вложения</span>
                        </span>
                    </a>
                </div>
                <div>
                    <a href="" class="link-full">
                        <span>
                            <img src="{{ asset('/') }}/icons/archive.png" alt="" class="m">
                            <span class="m">В архив</span>
                        </span>
                    </a>
                </div>
                <div>
                    <a href="" class="link-full">
                        <span>
                            <img src="{{ asset('/') }}/icons/spam.png" alt="" class="m">
                            <span class="m">Заблокировать</span>
                        </span>
                    </a>
                </div>
                <div>
                    <a href="" class="link-full   red c-red">
                        <span>
                            <img src="{{ asset('/') }}/icons/garbage_red.png" alt="" class="m">
                            <span class="m">Удалить</span>
                        </span>
                    </a>
                </div>
            </div>
            <div id="loadNewMessages_place"></div>
            <div class="wbg" id="messages_list_form">
                <div class="mail_form_fix">
                    <form action="{{ route('messenger.send_message', $data['conversation_id']) }}" method="post">

                        @csrf

                        <div></div>
                        <div class="error__item_wrapper">
                            <div class="block  js-toolbar_wrap">
                                <div class="text-input__wrap">
                                    <div class="cl" style="margin-bottom: 5px;">
                                        <div class="relative">
                                            <div class="js-toolbar toolbar">
                                                <span class="right counterBlock">
                                                    <span id="tcounter_tb_1527760985065">0</span>/20000</span>
                                                <table class="bb_table hide" id="bbtable_tb_1527760985065">
                                                    <tbody>
                                                    <tr>
                                                        <td class="bb_cell">
                                                            <a href="" data-tag="quote" class="js-bb bb bb_quote" title="Вставить цитату" id="tb_1527760985065-quote">
                                                                <img src="{{ asset('/') }}/icons/quote.png" alt="" class="m">
                                                            </a>
                                                        </td>
                                                        <td class="bb_cell">
                                                            <a href="" data-tag="url" class="js-bb bb bb_url" title="Вставить ссылку" id="tb_1527760985065-url">
                                                                <img src="{{ asset('/') }}/icons/link.png" alt="" class="m">
                                                            </a>
                                                        </td>
                                                        <td class="bb_cell">
                                                            <a href="" data-tag="color" class="js-bb bb bb_color" title="Цветной текст" id="tb_1527760985065-color">
                                                                <img src="{{ asset('/') }}/icons/color.png" alt="" class="m">
                                                            </a>
                                                        </td>
                                                        <td class="bb_cell">
                                                            <a href="" data-tag="b" class="js-bb bb bb_b" title="Жирный текст" id="tb_1527760985065-b">
                                                                <img src="{{ asset('/') }}/icons/bold.png" alt="" class="m">
                                                            </a>
                                                        </td>
                                                        <td class="bb_cell">
                                                            <a href="" data-tag="i" class="js-bb bb bb_i" title="Наклонутый текст" id="tb_1527760985065-i">
                                                                <img src="{{ asset('/') }}/icons/italics.png" alt="" class="m">
                                                            </a>
                                                        </td>
                                                        <td class="bb_cell">
                                                            <a href="" data-tag="u" class="js-bb bb bb_u" title="Подчёркнутый текст" id="tb_1527760985065-u">
                                                                <img src="{{ asset('/') }}/icons/underline.png" alt="" class="m">
                                                            </a>
                                                        </td>
                                                        <td class="bb_cell">
                                                            <a href="" data-tag="s" class="js-bb bb bb_s" title="Зачёркнутый текст" id="tb_1527760985065-s">
                                                                <img src="{{ asset('/') }}/icons/strike.png" alt="" class="m">
                                                            </a>
                                                        </td>
                                                        <td class="bb_cell">
                                                            <a href="" data-tag="smile" class="js-bb bb bb_smile" title="Смайлы" id="tb_1527760985065-smile">
                                                                <img src="{{ asset('/') }}/icons/smile.png" alt="" class="m">
                                                            </a>
                                                        </td>
                                                        <td class="bb_cell">
                                                            <a href="" data-tag="code" class="js-bb bb bb_code" title="Код" id="tb_1527760985065-code">
                                                                <img src="{{ asset('/') }}/icons/code.png" alt="" class="m">
                                                            </a>
                                                        </td>
                                                        <td class="bb_cell">
                                                            <a href="" data-tag="fon" class="js-bb bb bb_fon" title="Фон текста" id="tb_1527760985065-fon">
                                                                <img src="{{ asset('/') }}/icons/bg.png" alt="" class="m">
                                                            </a>
                                                        </td>
                                                        <td class="bb_cell">
                                                            <a href="" data-tag="more" class="js-bb bb bb_more" title="Ещё" id="tb_1527760985065-more">
                                                                <img src="{{ asset('/') }}/icons/dots_light.png" alt="" class="m">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="hide"></tr>
                                                    <tr class="hide"></tr>
                                                    <tr class="hide"></tr>
                                                    </tbody>
                                                </table>
                                                <div id="bbmenu_tb_1527760985065"></div>&nbsp;
                                            </div>
                                            <div class="input-txt_wrapper">
                                                <textarea class="input-txt" tabindex="1"
                                                                                     name="content" rows="4"
                                                                                     id="textarea"
                                                                                     data-maxlength="20000"
                                                                                     data-toolbar="{hide:true,disable:{}}"
                                                                                     cols="17">

                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="hide" id="toolbar_payload"
                                          data-stickers="[&quot;http://spaces.ru/services/stickers/?cat=1&amp;link_id=186320&quot;,&quot;http://spaces.ru/services/stickers/?cat=2&amp;link_id=186320&quot;,&quot;http://spaces.ru/services/stickers/?cat=3&amp;link_id=186320&quot;,&quot;http://spaces.ru/services/stickers/?cat=4&amp;link_id=186320&quot;,&quot;http://spaces.ru/services/stickers/?cat=5&amp;link_id=186320&quot;]"
                                          data-clipboard="">

                                    </span>
                                    <script type="text/javascript">require("form_toolbar")</script>
                                </div>
                            </div>
                            <div class="block block_fix  pdt">
                                <span id="captcha">  </span>
                                <div class="attaches_list js-attaches" id="attaches_list" style="display:none;"
                                     data-max_files="10">
                                </div>
                                <input type="hidden" name="conversation_id" value="{{ $data['conversation_id'] }}">

                                <div class="right">
                                    <input type="submit" value="Отправить" class="main_submit">
                                </div>
                                <div class="tools-wrap o_vis">
                                    <span class="form-tools__left left">
                                        <button name="smiles_btn" value="" class="url-btn" id="smiles_btn">
                                            <img src="{{ asset('/') }}/icons/smile.png" alt="" class="m">
                                            <span class="m">

                                            </span>
                                        </button>
                                    </span>
                                    <span class="form-tools__left left">
                                        <button name="attaches_btn" value="" class="url-btn" id="attaches_btn">
                                            <img src="{{ asset('/') }}/icons/attach.png" alt="" class="m">
                                            <span class="m"></span>
                                        </button>
                                    </span>
                                    <span class="form-tools__left left">
                                        <span class="js-bb_toggle">
                                            <button name="response_btn" value="" class="url-btn" id="response_btn">
                                                <img src="{{ asset('/') }}/icons/a.png" alt="" class="m">
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

                @foreach( $data['messages'] as $message)
                    <div class="mail__dialog_wrapper {{ $message->isAuthUserSender() ? 'mail__dialog_my' : '' }}"
                         id="m370482888">
                        <div class="   block_narrow pdt pad_b_a  ">
                            <div class="  block message {{ $message->isAuthUserSender() ? 'my' : 'answer' }}  ">
                                <div class="oh">

                                    @if(!$message->is_seen)
                                        <span style="color: rgb(204, 0, 0); --darkreader-inline-color:#ff8782;"
                                              class="not_read_text"
                                              data-darkreader-inline-color="">(не прочитано)</span>
                                        <span class="slb right padd_left">
                                    <a href="">
                                        <span class="slb m padd_right">{{ $message->created_at }}</span>
                                        <img src="{{ asset('/') }}/icons/dots_grey.png" alt="" class="m" width="3px"
                                             height="15px">
                                    </a>
                                </span>
                                    @else
                                        @if(!$message->isAuthUserSender())
                                            <span class="user__nick">
                                                <a href="{{ route('user.profile', $data['participantID']) }}">
                                                    <img class="p14" src="{{ asset('/') }}/icons/male_off.gif" alt="(OFF)">
                                                </a>
                                                <a href="{{ route('user.profile', $data['participantID']) }}" class="mysite-link">
                                                    <b class="nick black">{{ $data['participantLog'] }}</b>
                                                </a>
                                            </span>
                                        @endif
                                            <span class="slb right padd_left">
                                                <a href="">
                                                    <span class="slb m padd_right">{{ $message->created_at }}</span>
                                                    <img src="{{ asset('/') }}/icons/dots_grey.png" alt="" class="m" width="3px" height="15px">
                                                </a>
                                            </span>
                                    @endif

                                </div>
                                <div class="word_break">
                                    <div>
                                        <div>
                                            <div id="previewText370482888"> {{ $message->content }} </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cl"></div>
                    </div>
            @endforeach

            </div>
        </div>
        <div class="wrapper">
            <div class="pag wbg">
                <div class="pgar oh font0">
                    <table class="table__wrap">
                        <tbody>
                        <tr>
                            <td class="table__cell" width="35%">
                                <div class="pagw">
                                    <span class="dis"> ← Назад </span>
                                </div>
                            </td>
                            <td class="table__cell">
                                <div class="pagw pagwb">
                                    <span class="blk"> 1 из 2 </span>
                                </div>
                            </td>
                            <td class="table__cell" width="35%">
                                <div class="pagw">
                                    <a href="">
                                        Вперёд → </a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="pagn pgl">
                    <table class="table__wrap">
                        <tbody>
                        <tr>
                            <td class="table__cell">
                                <div class="pagw pagwr">
                                    <span class="cur mr">1</span>
                                </div>
                            </td>
                            <td class="table__cell">
                                <div class="pagw">
                                    <a href="">2</a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="wrapper wrap_list">
            <div>
                <a href="" class="link -full">
                    <span>
                        <img src="{{ asset('/') }}/icons/archive.png" alt="" class="m">
                        <span class="m">В архив</span>
                    </span>
                </a>
            </div>
            <div>
                <a href="" class="link -full">
                    <span>
                        <img src="{{ asset('/') }}/icons/spam.png" alt="" class="m">
                        <span class="m">Блок</span>
                    </span>
                </a>
            </div>
            <div>
                <a href="" class="link -full">
                    <span>
                        <img src="{{ asset('/') }}/icons/garbage.png" alt="" class="m">
                        <span class="m">Удалить</span>
                    </span>
                </a>
            </div>
        </div>
        <a href="http://spaces.ru/mail/?Link_id=176498" class="link darkblue return full_link">
            <span class="ico ico_arrow-back"></span>
            Назад
        </a>
        <script type="text/javascript">require('gallery')</script>
        <div style="height: 1px;"></div>
    </div>
    <div class="lc_br wbg font0 relative oh" id="footer_path">
        <a href="http://spaces.ru/" style="font-size:0;">
            <img src="{{ asset('/') }}/icons/home.png" alt="">
        </a>
        <span class="lc_brw">
            <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
            <a href="">QwertyRa</a>
        </span>
        <span class="lc_brw">
            <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
            <a href="http://spaces.ru/mail/?List=0">Почта</a>
        </span>
        <span class="lc_brw">
            <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
            <a href="">id22780475</a>
        </span>




@endsection