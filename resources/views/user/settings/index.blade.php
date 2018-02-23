@extends('layouts.app')

@section('content')

    @section('header_path')
        @include('layouts.header_path')
    @show
    <div class="wrapper">
    <div class="title oh black">
        <span class="block-title"> Основные настройки</span>
    </div>
    <div class="wbg grey">
        <div class="list f-c_fll">
            <a href="{{ route('settings.change_password_form') }}" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <span class="m"> Изменить пароль </span>
                        <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
                        </span>
            </a>
            <a href="{{ route('settings.email') }}" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <span class="m"> Настройки E - mail </span>
                        <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
            </a>
            <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <span class="m"> Настройки приватности </span>
                        <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
            </a>
            <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <span class="m"> Настройки почты </span>
                        <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12"></span>
            </a>
            <div class="last">
                <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <span class="m"> Чёрный список </span>
                        <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
    <div class="wrapper">
    <div class="title oh black">
        <span class="block-title"> Настройки интерфейса </span>
    </div>
    <div class="wbg grey">
        <div class="list f-c_fll">
            <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <span class="m"> Нижняя панель </span>
                        <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
            </a>
            <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <span class="m"> Стиль панелей </span>
                        <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12"> </span>
            </a>
            <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <span class="m"> Время </span>
                        <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
            </a>
            <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <span class="m"> Параметры отображения </span>
                        <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
            </a>
            <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <span class="m"> Экономия трафика </span>
                        <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
            </a>
            <div class="last">
                <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                        <span>
                            <span class="m"> Настройки формы </span>
                            <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
                        </span>
                </a>
            </div>
        </div>
    </div>
</div>
    <div class="wrapper">
    <div class="title oh black">
        <span class="block-title"> Быстрые настройки </span>
    </div>
    <div class="wbg grey">
        <div class="list f-c_fll">
            <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                <span> Транслит:Нет </span>
            </a>
            <div class="block bord-botm">
                <div class="grey pad_b_a"> Шрифт(Lite - версия):</div>
                <div>
                        <span style="font-size:13px;" class="horiz_sep">
                            <a href="" class="inl-link  no_ajax"> 13</a>  </span>
                    <span style="font-size:14px;" class="horiz_sep">
                            <span class="b"> 14 </span>
                        </span>
                    <span style="font-size:16px;" class="horiz_sep">
                            <a href="" class="inl-link  no_ajax"> 16 </a>
                        </span>
                    <span style="font-size:18px;" class="horiz_sep">
                            <a href="" class="inl-link  no_ajax"> 18 </a>
                        </span>
                    <span style="font-size:20px;" class="horiz_sep">
                            <a href="" class="inl-link  no_ajax"> 20 </a>
                        </span>
                    <span style="font-size:22px;" class="horiz_sep">
                            <a href="" class="inl-link  no_ajax"> 22 </a>
                        </span>
                    <span style="font-size:24px;" class="horiz_sep">
                            <a href="" class="inl-link  no_ajax"> 24 </a>
                        </span>
                </div>
            </div>
            <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                <span> Звук уведомлений: Да </span>
            </a>
        </div>
    </div>
</div>
    <div class="wrapper">
    <div class="list f-c_fll">
        <a href="{{ route('logout') }}" class="link -full  grey c-grey">
                <span>
                    <img src="{{ asset('/') }}/icons/exit.png" alt="" class="m">
                    <span class="m"> Выйти со всех устройств </span>
                </span>
        </a>
        <div class="last">
            <a href="" class="link -full  red c-red">
                    <span>
                        <img src="{{ asset('/') }}/icons/delete.png" alt="" class="m">
                        <span class="m"> Удалить аккаунт </span>
                    </span>
            </a>
        </div>
    </div>
</div>
    @section('back')
        @include('layouts.back')
    @endsection

@endsection