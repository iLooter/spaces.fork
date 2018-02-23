@extends('layouts.app')

@section('content')

    <div class="header upcs b"> Изменение E-mail</div>

    <div class="wrapper">

        @if( ! filled( session('status') ) )

            <form action="{{ route('settings.email.change') }}" method="POST">

                @csrf

                <div class="block bord-botm error_wrapper">
                    <div class={{ $errors->any() ? "error" : ""}}>
                        <label class="lbl"> Введите новый E-mail: </label>
                        <div class="input-txt_wrapper">
                            <input placeholder="Введите E-mail" class="input-txt" type="text" name="email" value="{{ old('email') }}"
                                   maxlength="150">
                        </div>
                        @if($errors->any())
                            <div class="grey pad_t_a">{{ $errors->first() }}</div>
                        @endif
                    </div>
                </div>
                <table class="table__wrap">
                    <tbody>
                    <tr>
                        <td width="50%" class="table__cell">
                            <button name="cfms" value="Сохранить" class="link  blue full is_final" id="cfms">
                                <img src="{{ asset('/') }}/icons/ok_blue.png" alt="" class="m">
                                <span class="m">Сохранить</span>
                            </button>
                        </td>
                        <td width="50%" class="table__cell table__cell_last">
                            <a href="{{ route('settings.index') }}" class="link -full">
                                <span>Отменить</span>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </form>
    </div>

    <div class="wrapper">
        <a href="" class="link -full  red c-red">
                 <span>
                       <img src="{{ asset('/') }}/icons/delete.png" alt="" class="m">
                        <span class="m">Удалить E-mail</span>
                 </span>
        </a>
    </div>
    @else
        <div class="block"> Вам отправлено два письма, на старый и на новый E-mail адреса.<br><br> 1. Вам нужно
            подтвердить удаление старого E-mail адреса.<br> 2. После этого подтвердить новый почтовый адрес <br><br>
            Если в течении часа вы не получите письмо с ссылкой для подтверждения, убедитесь, что письмо не попало в
            СПАМ, а также в правильности ввода E-mail адреса.
        </div>
    @endif

@endsection