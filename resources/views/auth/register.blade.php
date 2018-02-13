@extends('lite.layouts.template')

@section('content')


    <div class="lc_br wbg font0 relative oh" id="header_path">
        <a href="http://spaces.ru/" style="font-size:0;">
            <img src="{{ asset('style/'.env('THEME')) }}/icons/home.png" alt="">
        </a>
        <span class="lc_brw">
            <img src="{{ asset('style/'.env('THEME')) }}/icons/sep.png" alt="" class="lc_br_sep">
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
        <div class="block t_center b upcs"> через соц. сеть</div>
        <div class="block t_center pdt pdb">☺
            <a href="" class="soc-link vk">
                <img src="{{ asset('style/'.env('THEME')) }}/icons/vk.png" alt="" class="m p16">
            </a>
            <a href="" class="soc-link ok">
                <img src="{{ asset('style/'.env('THEME')) }}/icons/ok.png" alt="" class="m p16">
            </a>
            <a href="" class="soc-link mymir"> <img src="{{ asset('style/'.env('THEME')) }}/icons/mymir.png" alt="" class="m p16"> </a>
            <a href="" class="soc-link fb">
                <img src="{{ asset('style/'.env('THEME')) }}/icons/fb.png" alt="" class="m p16">
            </a>
        </div>
        <div class="block pdb t_center b"> или</div>
        <form class="no_ajax" action="{{ url('/register') }}" method="POST" _lpchecked="1">

            {{ csrf_field() }}

            <div class="block error_wrapper">
                <div class={{ $errors->has() ? 'error' : '' }}>
                    <div class="input-txt_wrapper">
                        <input placeholder="Введите ваш E-mail или телефон"
                                                          class="input-txt" type="text" name="contact" value=""
                                                          maxlength="87">
                    </div>
                    @if($errors->has())
                        @foreach($errors->all() as $error)
                            <div class="grey pad_t_a">{{ $error }}</div>
                        @endforeach
                    @endif
                </div>
            </div>

            <div class="block pdb pdt">
                <button name="cfms" value="Продолжить" class="  submit_link    link full  green-full" id="cfms">
                    <img src="{{ asset('style/'.env('THEME')) }}/icons/shared_white.png" alt="" class="m">
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
                        <img src="{{ asset('style/'.env('THEME')) }}/icons/lock_darkblue.png" alt="" class="m">
                        <span class="m">Не можете войти?</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div style="height: 1px;"></div>

@endsection


{{--
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}
