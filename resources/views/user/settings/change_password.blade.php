@extends('layouts.app')

@section('content')

    @section('header_path')
        @include('layouts.header_path')
    @show

    @if($errors->any())
        <div class="error_block list_item">  {{ $errors->first() }} </div>
    @endif



    @if( ! filled( session('status') ) )
        <div class="list_item">
        <form method="POST" action="{{ route('settings.change_password') }}">

         @csrf

         <div class="pad_t_a">
              <label for="current_password">
                  <b class="grey"> Введите ваш текущий пароль:</b>
              </label>
               <br>
               <input name="current_password" size="20" maxlength="16" type="password" value="" id="current_password" style="width:35%;">
         </div>
          <div class="pad_t_a">
                <label for="new_password">
                    <b class="grey"> Введите новый пароль:</b>
              </label>
               <br>
               <input name="new_password" size="20" maxlength="16" type="password" value="" id="new_password" style="width:35%;">
         </div>
          <div class="pad_t_a">
               <label for="new_password_confirmation">
                  <b class="grey"> Повторите новый пароль:</b>
               </label>
               <br>
               <input name="new_password_confirmation" size="20" maxlength="16" type="password" value="" id="repeat_new_password"
                       style="width:35%;">
          </div>
           <div class="pad_t_a">
              <input type="checkbox" id="logout_others" value="1" name="logout_others">
              <label for="logout_others"> Выйти со всех устройств, кроме текущего </label>
            </div>
         <div class="pad_t_a">
                <input type="submit" value="Сохранить" class="main_submit">
          </div>
        </form>
        </div>
         <div class="list_item light_blue"> Используйте только латинские буквы и цифры. <br>
    Пароль должен содержать не менее 6 и не более 16 символов и состоять из латинских букв и цифр. <br>
    Пробелы недопустимы.
</div>
    @else
        <div class="info list_item"> {{ session('status') }} </div>
    @endif

    @section('back')
        @include('layouts.back')
    @show

@endsection