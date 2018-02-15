@extends('layouts.app')

@section('content')

    <div class="lc_br wbg font0 relative oh" id="header_path">
        <a href="http://spaces.ru/" style="font-size:0;">
            <img src="{{ asset('/') }}/icons/home.png" alt="">
        </a>
        <span class="lc_brw">
            <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
            <span class="lc_br_text">Регистрация</span>
        </span>
    </div>
    <div class="tabs_block oh">
        <a href="{{ url('login') }}" class="tab_item left">Вход </a>
        <div class="tab_item left tab_active black"> Регистрация</div>
    </div>
    <div class="wrapper">
        <div class="block"> Зарегистрируйтесь прямо сейчас, чтобы узнать, кто из ваших друзей уже на Spaces.
            <div class="t_center b upcs pad_t_a pad_b_a"> Кроме этого вы сможете</div>
            <ul>
                <li>комментировать и оценивать фото и файлы других пользователей;</li>
                <li>сохранять файлы в свою личную онлайн коллекцию;</li>
                <li>общаться в блогах и сообществах;</li>
                <li>найти новых друзей или свою вторую половинку;</li>
                <li>и много чего ещё...</li>
            </ul>
        </div>
    </div>
    <div class="wrapper">
        <!-- <div class="block t_center b upcs"> через соц. сеть</div>
        <div class="block t_center pdt pdb">☺
            <a href="" class="soc-link vk">
                <img src="{{ asset('/') }}/icons/vk.png" alt="" class="m p16">
            </a>
            <a href="" class="soc-link ok">
                <img src="{{ asset('/') }}/icons/ok.png" alt="" class="m p16">
            </a>
            <a href="" class="soc-link mymir"> <img src="{{ asset('/') }}/icons/mymir.png" alt=""
                                                    class="m p16"> </a>
            <a href="" class="soc-link fb">
                <img src="{{ asset('/') }}/icons/fb.png" alt="" class="m p16">
            </a>
        </div>
        <div class="block pdb t_center b"> или</div>-->
        <form class="no_ajax" action="{{ url('/register') }}" method="POST" _lpchecked="1">

            @csrf

            <div class="block error_wrapper">
                <div class={{ $errors->has('email') ? 'error' : '' }}>
                    <div class="input-txt_wrapper">
                        <input placeholder="Введите ваш E-mail"
                               class="input-txt" type="text" name="email" value="{{ old('email') }}"
                               maxlength="87">
                    </div>
                    @if($errors->has('email'))
                            <div class="grey pad_t_a">{{ $errors->first('email') }}</div>
                    @endif
                </div>
            </div>

            <div class="block error_wrapper">
                <div class={{ $errors->has('password') ? 'error' : '' }}>
                    <div class="input-txt_wrapper">
                        <input placeholder="Введите желаемый пароль"
                               class="input-txt" type="password" name="password" value=""
                               maxlength="87" required>
                    </div>
                    @if($errors->has('password'))
                            <div class="grey pad_t_a">{{ $errors->first('password') }}</div>
                    @endif
                </div>
            </div>

            <div class="block error_wrapper">
                <div class={{ $errors->has('password_confirmation') ? 'error' : '' }}>
                    <div class="input-txt_wrapper">
                        <input placeholder="Подтвердите пароль"
                               class="input-txt" type="password" name="password_confirmation" value=""
                               maxlength="87" required>
                    </div>
                </div>
            </div>

            <div class="block pdb pdt">
                <button name="cfms" value="Продолжить" class="  submit_link    link full  green-full" id="cfms">
                    <img src="{{ asset('/') }}/icons/shared_white.png" alt="" class="m">
                    <span class="m">Продолжить</span>
                </button>
            </div>
        </form>

        <div class="block grey t_center"> Пароль будет отправлен на ваш E-mail или телефон. Никто не увидит
            введённые вами данные на сайте. Регистрируясь, вы соглашаетесь с <a
                    href="">правилами сайта</a>.
        </div>

    </div>
    <div class="wrapper">
        <div class="list f-c_fll">
            <div class="last">
                <a href="" class="link -full  darkblue c-darkblue      ">
                    <span>
                        <img src="{{ asset('/') }}/icons/lock_darkblue.png" alt="" class="m">
                        <span class="m">Не можете войти?</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div style="height: 1px;"></div>
@endsection
