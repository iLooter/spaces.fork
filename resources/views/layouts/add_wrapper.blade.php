<div class="wrapper relative">
    @section('ads')
        <div class="block oh">
        <div class="left dot_pic font0">
            <img src="{{ asset('/') }}/icons/lmyferm_ng.gif" alt="">
        </div>
        <div class="oh">
            <a href="" class="right font0">
                <img class="m p16" src="{{ asset('/') }}/icons/shut.png" alt="">
            </a>
            <b class="darkblue"> Моя Ферма </b>
            <div class="m_pt">
                <a href="" class="arrow_link strong_link full_link full_link_indent">
                    <span class="m">Вас ждут в игре</span>
                    <img src="{{ asset('/') }}/icons/arr_blue.png" alt="" class="m">
                </a>
            </div>
        </div>
    </div>
        @show

    @section('interests')
            <div class="wbg grey">
                <a class="right relative z10 sq_click" href="">
                    <img class="m p16" src="{{ asset('/') }}/icons/cross_light.png" alt="">
                </a>
                <a href="" class="link -full    blue c-blue  link_arrow">
                    <span>
                        <span class="m">
                            <div class="b pad_b_a"> Выберите ваши интересы </div>
                        </span>
                        <div class="grey m lbl_sub_text"> Подпишитесь на интересные каналы </div>
                        <img src="{{ asset('/') }}/icons/arr_r_gray.png" class="m arr" width="8" height="12">
                    </span>
                </a>
            </div>
    @endsection

    @section('location')
            <div class="block">
                <input type="submit" style="width:16px; height:16px; background: url({{ asset('/') }}/icons/shut.png) center no-repeat !important;" class="url-btn font_medium right" title="Скрыть" value="" name="hide_form">
                <input type="hidden" name="Gcf" value="">
                <div>
                    <span class="m black">Ваш город:</span>
                    <button name="gci" value="Киев, Украина" class="url-btn" id="gci">
                        <img src="{{ asset('/') }}/icons/place.png" alt="" class="m">
                        <span class="m">Киев, Украина</span>
                        </button>
                    <input type="hidden" name="Gci" value="14751">
                    <input type="hidden" name="Grg" value="0">
                    <input type="hidden" name="Gco" value="101">
                </div>
                <div class="pad_t_a"><input type="submit" name="cfms" value="Да" class="main_submit">
                </div>
            </div>
    @endsection
</div>