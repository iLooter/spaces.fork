@extends('layouts.user')

@section('content')
    @if($errors->any() or $message)
        <div class="busi">  {{ $errors->first() }} {{ $message }}</div>
    @endif
    <div class="stnd_padd" style="padding-bottom:1px;"> Тщательно выбирайте ник, его нельзя будет изменить.</div>
    <div class="list_item gradient_block1">
        <form method="post" action="{{ route('change_nick') }}" _lpchecked="1"> Введите желаемыйник:<br>
            @csrf
            <input type="text" name="login" value="{{ old('login') }}">
            <input type="submit" value="Изменить" class="main_submit">
            <br>
            <small class="grey">(от 5 до 15 символов, только латинские буквы и цифры)</small>
        </form>
    </div>
    <a href="" class="link darkblue return full_link">
        <span class="ico ico_arrow-back"></span>
        Назад
    </a>
    <div style="height: 1px;"></div>
@endsection