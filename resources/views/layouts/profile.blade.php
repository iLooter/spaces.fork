@extends('layouts.app')

@section('content')
    <div>
        <div>
            <div class="stnd_padd oh pdb">
                <div class="left dot_pic">
                    <a class="tdn" href="">
                        <div class="inl_bl relative">
                            <img src="{{ asset('/') }}/icons/102713872.p.81.80.0.jpg" alt="" class="preview s81_80">
                        </div>
                    </a>
                </div>
                <div class="left">
                    <span class="m">
                        <a href="">
                            <img class="p14" src="//c.spac.me/i/woman_off.gif" alt="(OFF)">
                        </a>
                        <a href="" class="mysite-link">
                            <b class="nick black">{{ empty($user->login) ? 'id' : '' }}{{ empty($user->login) ? $user->id : $user->login }}</b>
                        </a>
                    </span>
                    <div class="inl_bl m">
                        <a href="" class="bordered grey"> {{ $user->rating }} </a>
                    </div>
                    <div>
                        <div class="grey break-word">{{ $user->first_name }}</div>
                        <div class="grey"> {{ empty($user->howOld()) ? '' : $user->howOld().' y. o.' }}</div>
                        <div class="oh">
                            @if($user->isOnline())
                                <div>
                                    <a href="" class="bordered  on  signature"> В сети </a>
                                </div>
                            @else
                                <div class="left">
                                <span class="bordered grey c-grey">
                                    <span class=" grey c-grey">  {{ $user->last_visit }} </span>
                                </span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="stnd_padd light_border_bottom">
                <div class="relative">
                    <div id="original_status">
                        <div class="att_it mt_0">
                            <span class="service_item">Я не знаю, того что будет со мной в будущем. Но я точно знаю как я хочу жить: я хочу жить, держа за руку того, кто меня ценит, любит и уважает...</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=""></div>
        </div>

        <div class="tabs_block oh">
            <div class="tab_item left tab_active black"> Профиль</div>
            <a href="http://spaces.ru/anketa/?Link_id=915011&amp;user=id64711363" class="tab_item left"> Анкета </a>
        </div>
        <div class="wrapper wbg">
            <div class="start_page_padd" style="padding-top: 5px;">
                <span style="margin-right:4px;" class="tdn">
                    <a href="" class="arrow_link">
                        <img src="//c.spac.me/i/gifts/25/otkrytka.png" alt="" class="m">
                    </a>
                </span>
                <span style="margin-right:4px;" class="tdn">
                    <a href="" class="arrow_link">
                        <img src="//c.spac.me/i/gifts/25/otkrytka.png" alt="" class="m">
                    </a>
                </span>
                <span style="margin-right:4px;" class="tdn">
                    <a href="" class="arrow_link">
                        <img src="//c.spac.me/i/gifts/25/otkrytka.png" alt="" class="m">
                    </a>
                </span>
                <span style="margin-right:4px;" class="tdn">
                    <a href="" class="arrow_link">
                        <img src="//c.spac.me/i/gifts/25/otkrytka.png" alt="" class="m">
                    </a>
                </span>
                <a href="" class="arrow_link">
                    <img src="//c.spac.me/i/ico/arr_r_gray.png" class="m" width="8" height="12">
                </a>
            </div>
            <div class="widgets-group links-group bb0">
                <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <img src="//c.spac.me/i/ico/gb.png" alt="" class="m">
                        <span class="m">  Гостевая </span>
                        <span class="m">(4)</span>
                        <img src="//c.spac.me/i/ico/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
                </a>
                <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <img src="//c.spac.me/i/ico/blog.png" alt="" class="m">
                        <span class="m">  Личный блог </span>
                        <span class="m">(227)</span>
                        <img src="//c.spac.me/i/ico/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
                </a>
                <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <img src="//c.spac.me/i/ico/forum.png" alt="" class="m">
                        <span class="m">  Темы и комментарии </span>
                        <img src="//c.spac.me/i/ico/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
                </a>
                <div class="bord-botm"></div>
                <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <img src="//c.spac.me/i/ico/photo.png" alt="" class="m">
                        <span class="m">  Фотографии </span>
                        <span class="m">(88)</span>
                        <img src="//c.spac.me/i/ico/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
                </a>
                <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <img src="//c.spac.me/i/ico/music.png" alt="" class="m">
                        <span class="m">  Музыка </span>
                        <span class="m">(26)</span>
                        <img src="//c.spac.me/i/ico/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
                </a>
                <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <img src="//c.spac.me/i/ico/file.png" alt="" class="m">
                        <span class="m">  Файлы </span>
                        <span class="m">(3)</span>
                        <img src="//c.spac.me/i/ico/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
                </a>
                <div class="bord-botm"></div>
                <a href="" class="link -full  darkblue c-darkblue  link_arrow">
                    <span>
                        <img src="//c.spac.me/i/ico/readers.png" alt="" class="m">
                        <span class="m">  Читатели </span>
                        <span class="m">(345)</span>
                        <img src="//c.spac.me/i/ico/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
                </a>
            </div>
        </div>
        @section('soc_actions')
            @include('layouts.soc_actions')
        @show
    </div>
    <div style="height: 1px;"></div>
@endsection