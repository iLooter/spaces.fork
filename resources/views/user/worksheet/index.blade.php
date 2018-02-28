@extends('layouts.app')

@section('content')

@section('header_path')
    @include('layouts.header_path')
@show

<div>
    <div class="stnd_padd oh light_border_bottom pdt">
        <div class="left dot_pic">
            <a class="tdn"
               href="http://spaces.ru/pictures/view//?Link_id=1543624&amp;Read=196896562&amp;name=UlybkaDozhdya">
                <div class="inl_bl relative">
                    <img src="{{ asset('/') }}/icons/196896562.p.81.80.0.jpg" alt="" class="preview s81_80">
                </div>
            </a>
        </div>
        <div class="left">
			<span class="m">
                <a href="http://spaces.ru/anketa/?Link_id=1543624&amp;user=UlybkaDozhdya">
                    <img class="p14" src="{{ asset('/') }}/icons/woman_off.gif" alt="(OFF)">
                </a>
                <a href="" class="mysite-link">
                    <b class="nick black">UlybkaDozhdya</b>
                </a>
            </span>
            <div class="inl_bl m">
                <a href="" class="bordered grey"> 1380.2 </a>
            </div>
            <span class="inl_bl m red">
                <img class="t_bottom p16 m" src="{{ asset('/') }}/icons/rate_down.png" alt="">
                <span class="m">-35.4</span>
            </span>
            <div>
                <div class="grey break-word">Оксана</div>
                <div class="grey"> 27 лет, <a href="" class="arrow_link">
                        <span>Москва, Россия</span>
                    </a>
                </div>
                <div class="oh">
                    <div class="left">
                        <span class="bordered grey c-grey">
                            <span class=" grey c-grey">  в 11:46 </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=""></div>
</div>
<div class="tabs_block oh">
    <a href="" class="tab_item left"> Профиль </a>
    <div class="tab_item left tab_active black"> Анкета</div>
</div>
<div class="wrapper">
    <div class="block col_blocks">
        <div>
            <span class="grey">Регистрация:</span> 16 дек 2008
        </div>
        <div class="pad_t_a">
            <span class="grey">Рейтинг:</span>
            <a href="">1380.2</a>
        </div>
        <div class="pad_t_a">
            <span class="grey">Место в рейтинге:</span>
            <a href="">2</a>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="block">
        <div>
            <span class="grey">Номер телефона:</span> подтверждён
        </div>
        <div class="pad_t_a">
            <span class="grey">Последний визит:</span> в 11:46
        </div>
        <div class="pad_t_a">
            <span class="grey">Время онлайн:</span> &gt;500 ч.
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="title oh black">
        <span class="block-title">Основная информация</span>
    </div>
    <div class="wbg grey">
        <div class="list f-c_fll">

           {{-- if fill--}}
            <div class="last">
                <div class="block break-word">
                    <div>
                        <span class="grey">Имя:</span> Оксана
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Пол:</span> Женский
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Дата рождения:</span> 3 фев 1991
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Семейное положение:</span> Не замужем
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Место проживания:</span>
                        <a href=""> Москва,
                            Россия
                        </a>
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Модель телефона:</span>
                        <a href="" class="inl-link   "> Samsung Galaxy S7 32Gb</a>
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Род занятий:</span> Работаю
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Профессия:</span> Интересная
                    </div>
                </div>
            </div>

            {{--if unfill--}}
            <div class="block bord-botm">
                <table width="100%">
                    <tbody>
                    <tr>
                        <td class="td_progress">
                            <div class="progress-item">
                                <div class="progress-item__runner progress-item__runner_light" style="width: 0%"></div>
                            </div>
                        </td>
                        <td class="td_progress_num">
                            <div class="progress-item__num">0%</div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="block bord-botm">
                <span>  Заполните основную информацию о себе, чтобы друзья могли вас узнать. </span>
            </div>
            <div class="last">
                <a href="" class="link -full  blue c-blue   is_final">
                    <span>
                        <img src="//c.spac.me/i/ico/plus.png" alt="" class="m">
                        <span class="m">Добавить основную информацию</span>
                    </span>
                </a>
            </div>


        </div>
    </div>
</div>
<div class="wrapper">
    <div class="title oh black">
        <span class="block-title">О себе</span>
    </div>
    <div class="wbg grey">
        <div class="list f-c_fll">
            <div class="last">
                <div class="block break-word">
                    <div> Приветствую! Если интересно, подписывайтесь пожалуйста на мою страничку: <br>жмите вверху на
                        иконку <a href="">«Читать»!</a>
                        <br>
                        <br>А также, хотелось бы пригласить вас на наш уютный сайт http://www.OFFzon.Ru - Уверяю, что вы
                        не пожалеете!
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Интересы:</span>
                        <a href="" class="inl-link"> Интересные люди</a>
                        , <a href="" class="inl-link"> Музыка</a>
                        , <a href="" class="inl-link"> Интернет</a>
                        , <a href="" class="inl-link"> Психология</a>
                        , <a href="" class="inl-link"> Секс</a>
                        , <a href="" class="inl-link"> Философия</a>
                        , <a href="" class="inl-link"> Неформатное кино</a>
                        , <a href="" class="inl-link"> Блоги</a>
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Любимая музыка:</span> Группа "Нэнси" и Анатолий Бондаренко. А так, самые
                        разные жанры - главное, чтобы музыка нравилась. Всех исполнителей не перечислить)
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Любимые фильмы:</span>
                        <a href="" class="inl-link"> «Изображая жертву»</a>
                        , <a href="" class="inl-link"> «Зеленая миля»</a>
                        , <a href="" class="inl-link"> «Брат»</a>
                        , <a href="" class="inl-link"> «Груз 200»</a>
                        , <a href="" class="inl-link"> «Сука любовь»</a>
                        , <a href="" class="inl-link"> «Охранник для дочери»</a>
                        , <a href="" class="inl-link"> «Кожа»</a>
                        , <a href="" class="inl-link"> в которой я живу»</a>
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Любимые сериалы:</span>
                        <a href="" class="inl-link"> «Побег»</a>
                        , <a href="" class="inl-link"> «Твин Пикс»</a>
                        , <a href="" class="inl-link"> «Во все тяжкие»</a>
                        , <a href="" class="inl-link"> «Клон»</a>
                        , <a href="" class="inl-link   "> «Хиромант»</a>
                        <!-- -->
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Любимые книги:</span>
                        <a href="" class="inl-link"> «Сияние» Стивена Кинга</a>
                        , <a href="" class="inl-link"> «Сто лет одиночества» Габриэля Гарсиа Маркеса</a>
                        , <a href="" class="inl-link"> «Generation П» Виктора Пелевина</a>
                        , <a href="" class="inl-link"> «Вероника решает умереть» Пауло Коэльо</a>
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Любимые цитаты:</span> Всё или ничего - не теряю ничего.
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Полит. взгляды:</span>
                        <a href="" class="inl-link   ">
                            Умеренные
                        </a>
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Мировоззрение:</span>
                        <a href="" class="inl-link   ">
                            Православие
                        </a>
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Отношение к курению:</span>
                        <a href="">Нейтральное</a>
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Отношение к алкоголю:</span>
                        <a href="">Нейтральное</a>
                    </div>
                </div>
            </div>
        </div>

        {{--if unfill--}}
        <div class="block bord-botm">
            <table width="100%">
                <tbody>
                <tr>
                    <td class="td_progress">
                        <div class="progress-item">
                            <div class="progress-item__runner progress-item__runner_light" style="width: 0%"></div>
                        </div>
                    </td>
                    <td class="td_progress_num">
                        <div class="progress-item__num">0%</div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="block bord-botm">
            <span>  Заполните основную информацию о себе, чтобы друзья могли вас узнать. </span>
        </div>
        <div class="last">
            <a href="{{ route('worksheet.about_form') }}" class="link -full  blue c-blue   is_final">
                    <span>
                        <img src="//c.spac.me/i/ico/plus.png" alt="" class="m">
                        <span class="m">Добавить основную информацию</span>
                    </span>
            </a>
        </div>

    </div>
</div>
<div class="wrapper">
    <div class="title oh black">
        <span class="block-title">Карьера</span>
    </div>
    <div class="wbg grey">
        <div class="list f-c_fll">
            <div class="last">
                <div class="block bord-botm oh">
                    <div class="b">
                        <a href="" class="arrow_link">
                            <span class="m">ООО "Лодырь и партнёры"</span>
                            <img class="m p16" src="»/search2.png" alt="">
                        </a>
                    </div>
                    <div> Москва, Россия</div>
                    <div> Работает с <b>2012</b> по <b>настоящее время</b>
                    </div>
                    <div> Исполнительный директор</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="title oh black">
        <span class="block-title">Любимые сайты</span>
    </div>
    <div class="wbg grey">
        <div class="list f-c_fll">
            <div class="last">
                <div class="block bord-botm oh">
                    <img src="{{ asset('/') }}/icons/site_12577.png" alt="" class="m p16">
                    <a href="" class="m b">offzon.ru</a>
                    <br>
                    <span class="light_item">
                        <a href="">UlybkaDozhdya</a>
                    </span>
                </div>
                <div class="block bord-botm oh">
                    <img src="{{ asset('/') }}/icons/site_39.png" alt="" class="m p16">
                    <a href="" class="m b">stihi.ru</a>
                    <br>
                    <span class="light_item">
                        <a href="">Marika</a>
                    </span>
                </div>
                <div class="block bord-botm oh">
                    <img src="{{ asset('/') }}/icons/site_9825.png" alt="" class="m p16">
                    <a href="" class="m b">strip2.me</a>
                    <br>
                    <span class="light_item">
                        <a href="{{ asset('/') }}/icons">UlybkaDozhdya</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="title oh black">
        <span class="block-title">Для знакомств</span>
    </div>
    <div class="wbg grey">
        <div class="list f-c_fll">
            <div class="last">
                <div class="block break-word">
                    <div>
                        <span class="grey">Ориентация:</span> Гетеро
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Цель знакомства:</span> Дружба и общение, Флирт, СМС-переписка
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Семейное положение:</span> Не замужем
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Рост:</span> 162
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Вес:</span> 50
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Цвет глаз:</span> Зеленые
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Цвет волос:</span> Темные, длинные
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Телосложение:</span> Обычное
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">Характер:</span> Вам не понравится
                    </div>
                    <div class="pad_t_a">
                        <span class="grey">О партнёре:</span> Готов ли ты быть со мной в онлайне и в горе, и в радости,
                        пока сбой в сети не разлучит нас?))
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper wbg">
    <table class="table__wrap table__links">
        <tbody>
        <tr>
            <td class="table__cell" width="33%">
                <a href="http://spaces.ru/mail/message_list/?Link_id=1543624&amp;user=UlybkaDozhdya"
                   class="link -full          ">
                    <span>
                        <img src="{{ asset('/') }}/icons/write.png" alt="" class="m">
                        <span class="m">Написать</span>
                    </span>
                </a>
            </td>
            <td class="table__cell" width="33%">
                <div class="js-subscr_link" data-sub="friend" data-type="add" data-user="UlybkaDozhdya" data-error="1" data-mode="2" data-rand="40214">
                    <a href="" class="link -full">
                        <span>

                            <img src="{{ asset('/') }}/icons/befriends.png" alt="" class="m">
                            <span class="m">Дружить</span>
                        </span>
                    </a>
                </div>
                <div class="js-subscr_link hide" data-sub="friend" data-type="revoke" data-user="UlybkaDozhdya"
                     data-error="1" data-mode="2" data-rand="40214">
                    <a href="" data-action="friends_revoke" class="link -full js-action_link ">
                        <span>

                            <img src="{{ asset('/') }}/icons/befriends_inprocess.png" alt="" class="m">
                            <span class="m">Запрошено</span>
                        </span>
                    </a>
                </div>
                <div class="js-subscr_link hide" data-sub="friend" data-type="delete" data-user="UlybkaDozhdya"
                     data-error="1" data-mode="2" data-rand="40214">
                    <a href="http://spaces.ru/friends/delete/?friend=UlybkaDozhdya&amp;link_id=1543624"
                       data-action="friends_delete" class="link -full    green c-green     js-action_link ">
                        <span>
                            <img src="{{ asset('/') }}/icons/befriends_on.png" alt="" class="m">
                            <span class="m">Дружите</span>
                        </span>
                    </a>
                </div>
                <script type="text/javascript">require('subscribe')</script>
            </td>
            <td class="table__cell table__cell_last" width="33%">
                <div class="js-subscr_link" data-sub="lenta" data-type="add" data-user="UlybkaDozhdya" data-mode="2"
                     data-author_id="242632" data-author_type="11">
                    <a href=""
                       data-action="lenta_subscr_add" class="link -full         js-action_link ">
                        <span>

                            <img src="{{ asset('/') }}/icons/read.png" alt="" class="m">
                            <span class="m">Читать</span>
                        </span>
                    </a>
                </div>
                <div class="js-subscr_link hide" data-sub="lenta" data-type="delete" data-user="UlybkaDozhdya"
                     data-mode="2" data-author_id="242632" data-author_type="11">
                    <a href="" data-action="lenta_subscr_remove" class="link -full    green c-green     js-action_link ">
                        <span>
                            <img src="{{ asset('/') }}/icons/read_on.png" alt="" class="m">
                            <span class="m">Читаете</span>
                        </span>
                    </a>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div class="wrapper">
    <a href="" class="link -full        ">
        <span>
            <img src="{{ asset('/') }}/icons/complaint.png" alt="" class="m">
            <span class="m">Пожаловаться</span>
        </span>
    </a>
</div>

@section('back')
    @include('layouts.back')
@endsection

@endsection
