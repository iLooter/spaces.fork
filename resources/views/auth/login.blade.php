@extends('layouts.app')

@section('content')
    <div class="lc_br wbg font0 relative oh" id="header_path">
        <a href="http://spaces.ru/" style="font-size:0;">
            <img src="{{ asset('/') }}/icons/home.png" alt="">
        </a>
        <span class="lc_brw">
            <img src="{{ asset('/') }}/icons/sep.png" alt="" class="lc_br_sep">
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

            @csrf

            <div class="block pdb">

                @if(count( $errors ) > 0)
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
                               class="input-txt" type="email" name="email" value="{{ old('email') }}"
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
                    <div class="input-txt_wrapper">
                        <input maxlength="30" class="input-txt" type="password"
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
                        <img src="{{ asset('/') }}/icons/key_white.png" alt="" class="m">
                        <span class="m">Войти</span>
                    </button>
                </div>
            </div>

        </form>

        <!-- FORM -->
        <div class="block t_center b pdt"> или</div>
        <div class="block t_center pdt">
            <a href="" class="soc-link vk"><img src="{{ asset('/') }}/icons/vk.png" alt="" class="m p16"></a>
            <a href="" class="soc-link ok"><img src="{{ asset('/') }}/icons/ok.png" alt="" class="m p16"></a>
            <a href="" class="soc-link mymir"> <img src="{{ asset('/') }}/icons/mymir.png" alt="" class="m p16"></a>
            <a href="" class="soc-link fb"> <img src="{{ asset('/') }}/icons/fb.png" alt="" class="m p16"></a>
        </div>
    </div>
    <div class="wrapper">
        <div class="list f-c_fll">
            <div class="last">
                <a href="" class="link -full  darkblue c-darkblue">
                    <span>
                        <img src="{{ asset('/') }}/icons/lock_darkblue.png" alt="" class="m">
                        <span class="m">Не можете войти?</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div style="height: 1px;">

    </div>
@endsection

