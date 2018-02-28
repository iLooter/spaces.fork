@if(empty(Auth::user()->login))
<a href="{{ route('settings.change_login_form') }}" class="inl-link    link-blue c-blue">
    <span class="m">  Выберите свой ник </span>
    <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
</a>
@else
    <a href="{{ route('settings.change_login_form') }}" class="inl-link    link-blue c-blue">
        <span class="m">  Расскажите о себе </span>
        <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
    </a>
@endif