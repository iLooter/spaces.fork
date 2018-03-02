@component('windows.worsheet_unfill')
<div class="block bord-botm">
    <table width="100%">
        <tbody>
        <tr>
            <td class="td_progress">
                <div class="progress-item">
                    <div class="progress-item__runner progress-item__runner_light"
                         style="width: 0%"></div>
                </div>
            </td>
            <td class="td_progress_num">
                <div class="progress-item__num">0%</div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div class="block bord-botm">
    <span>  Заполните основную информацию о себе, чтобы друзья могли вас узнать. </span>
</div>
<div class="last">
    <a href="{{ route('worksheet.main_info_form') }}" class="link -full  blue c-blue   is_final">
                    <span>
                        <img src="//c.spac.me/i/ico/plus.png" alt="" class="m">
                        <span class="m">Добавить основную информацию</span>
                    </span>
    </a>
</div>
@endcomponent