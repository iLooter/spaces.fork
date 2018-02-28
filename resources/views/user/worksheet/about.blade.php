@extends('layouts.app')

@section('content')

@section('header_path')
    @include('layouts.header_path')
@show

<form method="POST" action="{{ route('worksheet.about_save') }}">
    <div class="wrapper">
        <div class="block pdt">
            <div class="pad_t_a">
                <div>
                    <label class="lbl"> О себе: </label>
                    <div class="input-txt_wrapper">
                        <textarea placeholder="Введите информацию о себе"
                                  class="input-txt" rows="5" cols="17" name="about_me"
                                  maxlength="1000"
                                  style="margin-top: 0px; margin-bottom: 0px; height: 89px;">
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="pad_t_a">
                <label class="lbl"> Интересы: </label>
                <div>
                    <div class="input-txt_wrapper">
                        <textarea class="input-txt" maxlength="" rows="5" cols="17" name="div1"></textarea>
                    </div>
                </div>
            </div>
            <div class="pad_t_a">
                <div>
                    <label class="lbl"> Любимая музыка: </label>
                    <div class="input-txt_wrapper">
                        <textarea placeholder="Введите информацию о любимой музыке"
                                  class="input-txt" rows="5" cols="17" name="music"
                                  maxlength="200">
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="pad_t_a">
                <label class="lbl"> Любимые фильмы: </label>
                <div>
                    <div class="input-txt_wrapper">
                        <textarea class="input-txt" maxlength="" rows="5" cols="17" name="div2"></textarea>
                    </div>
                </div>
            </div>
            <div class="pad_t_a">
                <label class="lbl"> Любимые сериалы: </label>
                <div>
                    <div class="input-txt_wrapper">
                        <textarea class="input-txt" maxlength="" rows="5" cols="17" name="div3"></textarea>
                    </div>
                </div>
            </div>
            <div class="pad_t_a">
                <label class="lbl"> Любимые книги: </label>
                <div>
                    <div class="input-txt_wrapper">
                        <textarea class="input-txt" maxlength="" rows="5" cols="17" name="div4"></textarea>
                    </div>
                </div>
            </div>
            <div class="pad_t_a">
                <div>
                    <label class="lbl"> Любимые цитаты: </label>
                    <div class="input-txt_wrapper">
                        <textarea placeholder="Введите информацию о любимых цитатах"
                                  class="input-txt" rows="5" cols="17" name="quotations"
                                  maxlength="4000">
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="pad_t_a">
                <label class="lbl">Полит. взгляды:</label>
                <label class="input-radio">
                    <input type="radio" name="Political" id="Political0" value="0" checked="checked"> Не важно
                </label>
                <br>
                <label class="input-radio">
                    <input type="radio" name="Political" id="Political1" value="1"> Индифферентные </label>
                <br>
                <label class="input-radio">
                    <input type="radio" name="Political" id="Political2" value="2">Коммунистические </label>
                <br>
                <label class="input-radio">
                    <input type="radio" name="Political" id="Political3" value="3">Социалистические </label>
                <br>
                <label class="input-radio">
                    <input type="radio" name="Political" id="Political4" value="4">Умеренные </label>
                <br>
                <label class="input-radio">
                    <input type="radio" name="Political" id="Political5" value="5">Либеральные </label>
                <br>
                <label class="input-radio">
                    <input type="radio" name="Political" id="Political6" value="6">Консервативные </label>
                <br>
                <label class="input-radio">
                    <input type="radio" name="Political" id="Political7" value="7">Монархические </label>
                <br>
                <label class="input-radio">
                    <input type="radio" name="Political" id="Political8" value="8">Ультраконсервативные </label>
                <br>
                <label class="input-radio">
                    <input type="radio" name="Political" id="Political9" value="9">Либертарианские </label>
            </div>
            <div class="pad_t_a">
                <label class="lbl">Мировоззрение:</label>
                <label class="input-radio">
                    <input type="radio" name="Religion" id="Religion0" value="0" checked="checked"> Не важно
                </label>
                <br>
                <label class="input-radio">
                    <input type="radio" name="Religion" id="Religion1" value="1"> Православие
                </label>
                <br>
                <label class="input-radio">
                    <input type="radio" name="Religion" id="Religion2" value="2">Католицизм
                </label>
                <br>
                <label class="input-radio">
                    <input type="radio" name="Religion" id="Religion3" value="3"> Иудаизм
                </label>
                <br>
                <label class="input-radio">
                    <input type="radio" name="Religion" id="Religion4" value="4"> Протестантизм
                </label>
                <br>
                <label class="input-radio">
                    <input type="radio" name="Religion" id="Religion5" value="5"> Ислам
                </label>
                <br>
                <label class="input-radio">
                    <input type="radio" name="Religion" id="Religion6" value="6"> Буддизм
                </label>
                <br>
                <label class="input-radio">
                    <input type="radio" name="Religion" id="Religion7" value="7">Конфуцианство
                </label>
                <br>
                <label class="input-radio">
                    <input type="radio" name="Religion" id="Religion8" value="8">Светский гуманизм
                </label>
                <br>
                <label class="input-radio">
                    <input type="radio" name="Religion" id="Religion9" value="9">Пастафарианство
                </label>
                <br>
                <label class="input-radio">
                    <input type="radio" name="Religion" id="Religion10" value="10">Атеизм
                </label>
                <br>
                <label class="input-radio">
                    <input type="radio" name="Religion" id="Religion12" value="12"> Агностицизм
                </label>
                <br>
                <label class="input-radio">
                    <input type="radio" name="Religion" id="Religion11" value="11"> Другое
                </label>
            </div>
        </div>

        @csrf

        <table class="table__wrap table__links bord-top">
            <tbody>
            <tr>
                <td width="50%" class="table__cell">
                    <input class="link blue full is_final" type="submit" name="cfms" value="Сохранить">
                </td>
                <td width="50%" class="table__cell table__cell_last">
                    <a href="{{ route('worksheet.index') }}" class="link -full">
                        <span>Отменить</span>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</form>

@section('back')
    @include('layouts.back')
@endsection
@endsection
