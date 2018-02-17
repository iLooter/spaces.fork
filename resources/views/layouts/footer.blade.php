<div id="navi_footer" class="stnd_padd lh_160 ucsep">

@auth
    <a href="">Поиск</a>|
    <a href="">Я</a> |
    <a href="">Помощь</a> |
    <a href="">Игры</a> |
    <a href="">ЗО</a> |
    <a href="">Др</a> |
    <a href="">+</a>

@else

    <a href="{{--{{ route('info.about_us') }}--}}">О сайте</a> |
    <a href="{{--{{ route('info.contacts') }}--}}">Контакты</a> |
    <a href="{{--{{ route('loads') }}--}}">ЗО</a> |
    <a href="{{--{{ url('login') }}--}}">Вход</a> |
    <a href="{{--{{ route('search') }}--}}">Поиск</a>
@endauth

</div>
<div class="cl"></div>
    <div class="bottom_fix oh">
        <div class="cl"></div>
        <div class="site-versions right tdn">
            <span class="grey">Версия:</span>
            <a href="" class="inl-link  no_ajax  "> Mobile</a> |
            <b>Lite</b> |
            <a href="" class="inl-link  no_ajax  "> Touch</a>
        </div>
        <div class="stnd_padd3 relative" style="background:#ebebeb;"></div>
            <!-- counters -->
    </div>
</div>

