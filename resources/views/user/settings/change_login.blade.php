@extends('layouts.app')

@section('content')

    @if($errors->any())
        <div class="busi">  {{ $errors->first() }} </div>
    @endif
    <div class="stnd_padd" style="padding-bottom:1px;"> Тщательно выбирайте ник, его нельзя будет изменить.</div>
    <div class="list_item gradient_block1">
        <form method="post" action="{{ route('settings.change_login') }}" _lpchecked="1"> Введите желаемыйник:<br>
            @csrf
            <input type="text" name="login" value="{{ old('login') }}">
            <input type="submit" value="Изменить" class="main_submit">
            <br>
            <small class="grey">(от 5 до 15 символов, только латинские буквы и цифры)</small>
        </form>
    </div>

    @section('back')
        @include('layouts.back')
    @show

@endsection