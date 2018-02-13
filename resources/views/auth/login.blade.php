@extends('lite.layouts.template')

@section('content')

    <div class="lc_br wbg font0 relative oh" id="header_path">
        <a href="http://spaces.ru/" style="font-size:0;">
            <img src="{{ asset('style/'.env('THEME')) }}/icons/home.png" alt="">
        </a>
        <span class="lc_brw">
            <img src="{{ asset('style/'.env('THEME')) }}/icons/sep.png" alt="" class="lc_br_sep">
            <span class="lc_br_text">Вход</span>
        </span>
    </div>
    <div class="tabs_block oh">
        <div class="tab_item left tab_active black"> Вход</div>
        <a href="{{ url('register') }}" class="tab_item left"> Регистрация </a>
    </div>

    <!-- FORM -->
    <div class="wrapper">
        <form action="{{ url('/login') }}" method="POST" class="no_ajax">
            {{ csrf_field() }}
            <div class="block pdb">

            @if($errors->has())
                    <div class="error">
                        @foreach($errors->all() as $error)
                            <span class="help-block">
                                 <strong>{{ $error }}</strong>
                             </span><br>
                        @endforeach
                    </div>
            @endif

            </div>
            <div class="block error_wrapper first pdb">
                <div>
                    <div class="input-txt_wrapper">
                        <input placeholder="Ваш телефон, E-mail или ник"
                                                          class="input-txt"type="email" name="email" value="{{ old('email') }}"
                                                          maxlength="87"
                                                          style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAUBJREFUOBGVVE2ORUAQLvIS4gwzEysHkHgnkMiEc4zEJXCMNwtWTmDh3UGcYoaFhZUFCzFVnu4wIaiE+vvq6+6qTgthGH6O4/jA7x1OiCAIPwj7CoLgSXDxSjEVzAt9k01CBKdWfsFf/2WNuEwc2YqigKZpK9glAlVVwTTNbQJZlnlCkiTAZnF/mePB2biRdhwHdF2HJEmgaRrwPA+qqoI4jle5/8XkXzrCFoHg+/5ICdpm13UTho7Q9/0WnsfwiL/ouHwHrJgQR8WEwVG+oXpMPaDAkdzvd7AsC8qyhCiKJjiRnCKwbRsMw9hcQ5zv9maSBeu6hjRNYRgGFuKaCNwjkjzPoSiK1d1gDDecQobOBwswzabD/D3Np7AHOIrvNpHmPI+Kc2RZBm3bcp8wuwSIot7QQ0PznoR6wYSK0Xb/AGVLcWwc7Ng3AAAAAElFTkSuQmCC&quot;);
                                                          background-repeat: no-repeat;
                                                          background-attachment: scroll;
                                                          background-size: 16px 18px;
                                                          background-position: 98% 50%;
                                                          cursor: auto;">
                    </div>
                </div>
            </div>
            <div class="block error_wrapper pdb">
                <div class=""><label class="lbl"> Введите пароль: </label>
                    <div class="input-txt_wrapper"><input maxlength="30" class="input-txt" type="password"
                                                          name="password" value=""
                                                          style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAUBJREFUOBGVVE2ORUAQLvIS4gwzEysHkHgnkMiEc4zEJXCMNwtWTmDh3UGcYoaFhZUFCzFVnu4wIaiE+vvq6+6qTgthGH6O4/jA7x1OiCAIPwj7CoLgSXDxSjEVzAt9k01CBKdWfsFf/2WNuEwc2YqigKZpK9glAlVVwTTNbQJZlnlCkiTAZnF/mePB2biRdhwHdF2HJEmgaRrwPA+qqoI4jle5/8XkXzrCFoHg+/5ICdpm13UTho7Q9/0WnsfwiL/ouHwHrJgQR8WEwVG+oXpMPaDAkdzvd7AsC8qyhCiKJjiRnCKwbRsMw9hcQ5zv9maSBeu6hjRNYRgGFuKaCNwjkjzPoSiK1d1gDDecQobOBwswzabD/D3Np7AHOIrvNpHmPI+Kc2RZBm3bcp8wuwSIot7QQ0PznoR6wYSK0Xb/AGVLcWwc7Ng3AAAAAElFTkSuQmCC&quot;);
                                                          background-repeat: no-repeat;
                                                          background-attachment: scroll;
                                                          background-size: 16px 18px;
                                                          background-position: 98% 50%;">
                    </div>
                </div>
            </div>
            <div class="block">
                <div>
                    <button name="cfms" value="Войти" class="  submit_link    link full  green-full   " id="cfms">
                        <img src="{{ asset('style/'.env('THEME')) }}/icons/key_white.png" alt="" class="m">
                        <span class="m">Войти</span>
                    </button>
                </div>
            </div>

        </form>

    <!-- FORM -->
        <div class="block t_center b pdt"> или </div>
        <div class="block t_center pdt">
            <a href="" class="soc-link vk">
                <img src="{{ asset('style/'.env('THEME')) }}/icons/vk.png" alt="" class="m p16">
            </a>
            <a href="" class="soc-link ok">
                <img src="{{ asset('style/'.env('THEME')) }}/icons/ok.png" alt="" class="m p16">
            </a>
            <a href="" class="soc-link mymir"> <img src="{{ asset('style/'.env('THEME')) }}/icons/mymir.png" alt="" class="m p16">
            </a>
            <a href="" class="soc-link fb"> <img src="{{ asset('style/'.env('THEME')) }}/icons/fb.png" alt="" class="m p16">
            </a>
        </div>
    </div>
    <div class="wrapper">
        <div class="list f-c_fll">
            <div class="last"><a href="http://spaces.ru/registration/nick/restore/?link_id=431346"
                                 class="link -full  darkblue c-darkblue      "> <span><!--     --><img
                                src="{{ asset('style/'.env('THEME')) }}/icons/lock_darkblue.png" alt="" class="m"> <!--   --><span class="m">Не можете войти?</span>
                        <!--    --></span> </a></div>
        </div>
    </div>
    <div style="height: 1px;">

    </div>
    </div>

@endsection

{{--
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
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
