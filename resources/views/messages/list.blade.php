@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="lc_br wbg font0 relative oh" id="header_path">
            <a href="http://spaces.ru/?sid=6025202448574600" style="font-size:0;">
                <img src="{{ asset('/') }}/icons/home.png" alt="">
            </a>
            <span class="lc_brw">
                <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
                <a href="http://spaces.ru/mysite/?name=QwertyRa&amp;sid=6025202448574600">QwertyRa</a>
            </span>
            <span class="lc_brw">
                <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
                <a href="http://spaces.ru/mail/?List=0&amp;sid=6025202448574600">Почта</a>
            </span>
            <span class="lc_brw">
                <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
                <a href="">Система</a>
            </span>
        </div>
        <div class="wrapper">
            <div class="js-row block bord-botm oh grey relative block-cntrl">
                <div class="left font0">
                    <div class="tdn">
                        <span class="pr">
                            <div class="inl_bl relative">
                                <img src="{{ asset('/') }}/icons/1840249.p.41.40.0.jpg" alt=""
                                     itemprop="thumbnailUrl" class="preview s41_40">
                            </div>
                        </span>
                    </div>
                </div>
                <div class="pre_content_wrap break-word black">
                    <img class="p14" src="{{ asset('/') }}/icons/man_off.gif" alt="(OFF)">
                    <b>Система</b>
                    <div class="grey">

                    </div>
                </div>
                <div class="menu_btn" onclick="return Spoilers.click(this)" data-toggle="more_menu_4839"
                     title="Действия">
                    <img src="{{ asset('/') }}/icons/arrow_bottom.png" data-hide="arrow_up.png"
                         data-show="arrow_bottom.png" id="more_menu_4839-icon" alt="" class="p16">
                </div>
            </div>
            <div id="more_menu_4839" class="js-row wrap_list hide wbg">
                <div>
                    <a href="" class="link -full">
                        <span>
                            <img src="{{ asset('/') }}/icons/attach.png" alt="" class="m">
                            <span class="m">Вложения</span>
                        </span>
                    </a>
                </div>
                <div>
                    <a href="" class="link -full">
                        <span>
                            <img src="{{ asset('/') }}/icons/archive.png" alt="" class="m">
                            <span class="m">В архив</span>
                        </span>
                    </a>
                </div>
                <div>
                    <a href="" class="link -full   red c-red">
                        <span>
                            <img src="{{ asset('/') }}/icons/garbage_red.png" alt="" class="m">
                            <span class="m">Удалить</span>
                        </span>
                    </a>
                </div>
            </div>
            <div id="loadNewMessages_place"></div>
            <div class="pad_t_a">
                <div class="mail__dialog_wrapper" id="m359746652">
                    <div class="   block_narrow pdt pad_b_a  ">
                        <div class="  block message answer  ">
                            <div class="oh">
                                <span class="user__nick">
                                    <img class="p14" src="{{ asset('/') }}/icons/man_off.gif" alt="(OFF)">
                                    <b class="nick black">Система</b>
                                </span>
                                <span class="slb right padd_left">
                                <a href="">
                                    <span class="slb m padd_right">14 фев в 00:07</span>
                                    <img src="{{ asset('/') }}/icons/dots_grey.png" alt="" class="m" width="3px"
                                         height="15px">
                                </a>
                            </span>
                            </div>
                            <div class="word_break">
                                <div>
                                    <div>
                                        <div id="previewText359746652"> Приветствуем вас, id47612653!<br> Добро
                                            пожаловать на Spaces.ru - приватную мобильную социальную сеть нового
                                            поколения!<br> Теперь у вас есть собственный сайт в сети по адресу
                                            <a href=""></a><br>
                                            Вы можете хранить здесь свои файлы и фотографии, и они всегда будут доступны
                                            с мобильного телефона или компьютера.<br> Расскажите о своем сайте друзьям,
                                            и они всегда будут знать, чем вы живете в данный момент.<br> <br> Вот три
                                            простых шага, чтобы быстро освоиться на сайте:<br> <br> 1. <b>
                                                <a href="">Заполните вашу анкету</a>
                                            </b><br> Добавьте фото и максимум информации о себе.
                                            Вашим друзьям будет проще вас найти, а мы сможем порекомендовать вам новых
                                            знакомых.<br> <br> 2. <b>
                                                <a href="">Найдите друзей</a>
                                            </b><br> Узнайте, кто из ваших друзей уже здесь.<br> <br>
                                            3.
                                            <b>
                                                <a href="">Начните общаться</a>
                                            </b><br> Сообщества, Блоги, Чаты - везде можно найти
                                            новых интересных знакомых.<br> Выбирайте, где вам удобнее.<br> <br>
                                            Несколько полезных ссылок:<br>
                                            <a href="">Зона обмена</a> - здесь пользователи Spaces обмениваются файлами.<br>
                                            <a href="">Музыка</a>
                                            - составьте свою музыкальную коллекцию.<br>
                                            <a href="">Знакомства</a>
                                            - найдите свою вторую половинку.<br>
                                            <a href="">Help</a>
                                            - сообщество для новичков. Здесь вам всегда помогут.<br>
                                            <a href="">Support</a>
                                            - служба поддержки пользователей.<br> <br> Чтобы узнать больше, почитайте
                                            <a href="">Путеводитель
                                                для новичков</a>.<br> Внизу любой страницы есть ссылка Помощь. Там вы
                                            можете задать свой вопрос онлайн-помощникам.<br> Удачи!
                                            <img src="{{ asset('/') }}/icons/04_wink.gif" alt="">
                                        </div>
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
                <a href="" class="link -full"> <span>
                    <img src="{{ asset('/') }}/icons/archive.png" alt="" class="m">
                    <span class="m">В архив</span>
                </span>
                </a>
            </div>
            <div>
                <a href="" class="link -full"> <span>
                    <img src="{{ asset('/') }}/icons/garbage.png" alt="" class="m">
                    <span class="m">Удалить</span>
                </span>
                </a>
            </div>
        </div>
        <a href="" class="link darkblue return full_link">
            <span class="ico ico_arrow-back"></span> Назад
        </a>
        <script type="text/javascript">require('gallery')</script>
        <div style="height: 1px;"></div>
    </div>
    <div class="lc_br wbg font0 relative oh" id="footer_path">
        <a href="http://spaces.ru/?sid=6025202448574600" style="font-size:0;">
            <img src="{{ asset('/') }}/icons/home.png" alt="">
        </a>
        <span class="lc_brw">
        <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
        <a href="http://spaces.ru/mysite/?name=QwertyRa&amp;sid=6025202448574600">QwertyRa</a>
    </span>
        <span class="lc_brw">
        <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
        <a href="http://spaces.ru/mail/?List=0&amp;sid=6025202448574600">Почта</a>
    </span>
        <span class="lc_brw">
        <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
        <a href="">Система</a>
    </span>
    </div>
@endsection