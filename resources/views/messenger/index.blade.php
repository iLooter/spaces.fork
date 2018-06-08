@extends('layouts.app')

@section('content')
        <div class="oh">
            <div class="wrapper">
                <a href="{{ route('messenger.write') }}" class="link -full     blue c-blue      ">
                    <span>
                        <img src="{{ asset('/') }}/icons/mail_blue.png" alt="" class="m"> <!--   -->
                        <span class="m">Новое сообщение</span>
                    </span>
                </a>
            </div>
            <div class="wrapper">
                <form action="http://spaces.ru/mail/?Link_id=635507&amp;List=0&amp;P=1" method="post">
                    <div class="col_blocks block">

                        @foreach($conversations as $conversation)
                            <div class="stnd_padd oh">
                                <input type="checkbox" name="CoNtact" value="26960167">
                                <img class="p14" src="{{ asset('/') }}/icons/male_off.gif" alt="(OFF)">
                                <a href="{{ route('messenger.conversation', $conversation->id) }}"> {{ $conversation->getOppositeParticipant()->getLoginOrId() }} </a>
                                <span>({{ $conversation->countUnseenMessages() }}/{{ $conversation->countAllMessages() }})
                            </span>
                            </div>
                        @endforeach


                    </div>
                    <div class="bord-top">
                        <table class="table__wrap">
                            <tbody>
                            <tr>
                                <td width="50%" class="table__cell">
                                    <button name="archive_contacts" value="В архив" class="  link full is_final    " id="archive_contacts">
                                        <img src="{{ asset('/') }}/icons/archive.png" alt="" class="m">
                                        <span class="m">В архив</span>
                                    </button>
                                </td>
                                <td width="50%" class="table__cell table__cell_last">
                                    <button name="delete_contacts" value="Удалить" class="  link full is_final" id="delete_contacts">
                                        <img src="{{ asset('/') }}/icons/garbage.png" alt="" class="m">
                                        <span class="m">Удалить</span>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <input type="hidden" name="Link_id" value="635507">
                    <input type="hidden" name="List" value="0">
                    <input type="hidden" name="r" value="mail/contact_list">
                    <input type="hidden" name="from" value="contacts">
                    <input type="hidden" name="P" value="1">
                    <input type="hidden" name="CK" value="9188">
                    <input type="hidden" name="cfms" value="1">
                </form>
            </div>
        </div>
        <div class="wrapper-nobg">
            <form action="http://spaces.ru/mail/?Link_id=181507&amp;List=0" method="get">
                <input type="hidden" name="Link_id" value="181507">
                <input type="hidden" name="r" value="mail/contact_list">
                <input type="hidden" name="CK" value="1">
                <table class="table__wrap search-wrap input-txt_grid">
                    <tbody>
                    <tr>
                        <td class="input-txt_grid_input">
                            <div class="input-txt_wrapper_search relative">
                                <input type="text" class="input-txt" name="q" value="" maxlength="64">
                            </div>
                        </td>
                        <td class="input-txt_grid_sep">
                        </td>
                        <td class="input-txt_grid_btn">
                            <input type="submit" class="search__btn" value="Найти" name="cfms">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
        <div id="mail__search_pagination">

        </div>
        <div class="wrapper">
            <a href="" data-counter="contacts" class="link -full   darkblue c-darkblue  link_arrow">
            <span>
                <img src="{{ asset('/') }}/icons/people_darkblue.png" alt="" class="m">
                <span class="m">  Контакты </span>
                <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
            </span>
            </a>
            <a href="" data-counter="favourite" class="link -full   darkblue c-darkblue  link_arrow">
            <span>
                <img src="{{ asset('/') }}/icons/fav_blue.png" alt="" class="m">
                <span class="m">  Избранное </span>
                <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
            </span>
            </a>
            <a href="" data-counter="archive" class="link -full   darkblue c-darkblue  link_arrow">
            <span>
                <img src="{{ asset('/') }}/icons/archive_blue.png" alt="" class="m">
                <span class="m">  Архив </span>
                <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
            </span>
            </a>
            <a href="" data-counter="spam" class="link -full   darkblue c-darkblue  link_arrow">
            <span>
                <img src="{{ asset('/') }}/icons/spam_blue.png" alt="" class="m">
                <span class="m">  Спам </span>
                <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
            </span>
            </a>
            <a href="" data-counter="garbage" class="link -full   darkblue c-darkblue  link_arrow">
            <span>
                <img src="{{ asset('/') }}/icons/garbage_blue.png" alt="" class="m">
                <span class="m">  Корзина </span>
                <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
            </span>
            </a>
        </div>
        <div class="wrapper">
            <a href="" class="link -full   darkblue c-darkblue  link_arrow">
            <span>
                <img src="{{ asset('/') }}/icons/cog_blue.png" alt="" class="m">
                <span class="m">  Настройки почты </span>
                <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
            </span>
            </a>
        </div>
        <script type="text/javascript">require('gallery')</script>
        <div style="height: 1px;"></div>
    </div>
@endsection