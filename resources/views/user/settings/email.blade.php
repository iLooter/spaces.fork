@extends('layouts.app')

@section('content')

    <div class="wrapper">
        <div class="block grey">
            <span class="grey">Ваш E-mail:</span>
            <span class="black">{{ Auth::user()->getHiddenEmail() }}</span>
            <a href="{{ route('settings.email.change_form') }}" class="inl-link   "> Изменить </a>
        </div>
    </div>

    <div class="wrapper">
        <div class="title oh black"><span class="block-title">Настройки оповещений</span></div>
        <div class="wbg grey">
            <form action="{{ route('settings.email') }}" method="POST">

                @csrf

                <div class="bord-botm">
                    <div class="block break-word transpar">
                        <label class="input-checkbox">
                            <input type="checkbox" value="1" name="Forward" checked="checked" class="m">
                            <span class="m grey chb_lbl">Пересылать E-mail сообщения</span>
                        </label>
                    </div>
                    <div class="block break-word transpar">
                        <label class="input-checkbox">
                            <input type="checkbox" value="1" name="System" checked="checked" class="m">
                            <span class="m grey chb_lbl">Пересылать сообщения от Системы</span>
                        </label>
                    </div>
                    <div class="block break-word transpar">
                        <label class="input-checkbox">
                            <input type="checkbox" value="1" name="User" checked="checked" class="m">
                            <span class="m grey chb_lbl">Пересылать сообщения от пользователей</span>
                        </label>
                    </div>
                    <div class="block break-word transpar">
                        <label class="input-checkbox">
                            <input type="checkbox" value="1" name="Remind" checked="checked" class="m">
                            <span class="m grey chb_lbl">Присылать периодические оповещения</span>
                        </label>
                    </div>
                    <div class="block break-word transpar">
                        <label class="input-checkbox">
                            <input type="checkbox" value="1" name="Friends" checked="checked" class="m">
                            <span class="m grey chb_lbl">Присылать оповещения о дружбе</span>
                        </label>
                    </div>
                </div>
                <button name="cfms" value="Сохранить" class="link  blue full is_final" id="cfms">
                    <img src="{{ asset('/') }}/icons/ok_blue.png" alt="" class="m">
                    <span class="m">Сохранить</span>
                </button>
            </form>
        </div>
    </div>
@endsection