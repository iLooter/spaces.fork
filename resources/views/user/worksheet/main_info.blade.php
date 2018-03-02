@extends('layouts.app')

@section('content')

@include('layouts.header_path')

<form method="post" action="{{ route('worksheet.main_info') }}">
    @csrf

    <div class="wrapper">
        <div class="block">
            <div class="oh">
                <div class="left dot_pic">
                    <span class="pr">
                        <div class="inl_bl relative">
                            <img src="{{ asset('/') }}/icons/101115855.p.41.40.0.jpg" alt="" class="preview s41_40">
                        </div>
                    </span>
                </div>
                <div class="oh">
                    <a href="http://spaces.ru/anketa/edit_photo/?Link_id=1648611">Сменить аватар</a>
                </div>
            </div>
            <div class="pad_t_a">
                <div class={{ $errors->has('first_name') ? "error" : ""}}>
                    <label class="lbl"> {{ __('worksheet.first_name') }}: </label>
                    <div class="input-txt_wrapper">
                        <input placeholder="Input your {{ __('worksheet.first_name') }}" class="input-txt" type="text" name="first_name" value="" maxlength="100">
                    </div>
                    @if($errors->has('first_name'))
                        <div class="grey pad_t_a">{{ $errors->first('first_name') }}</div>
                    @endif
                </div>
            </div>
            <div class="pad_t_a">
                <div class={{ $errors->has('last_name') ? "error" : ""}}>
                    <label class="lbl"> {{ __('worksheet.last_name') }}: </label>
                    <div class="input-txt_wrapper">
                        <input placeholder="Input your {{ __('worksheet.last_name') }}" class="input-txt" type="text" name="last_name" value="" maxlength="100">
                    </div>
                    @if($errors->has('last_name'))
                        <div class="grey pad_t_a">{{ $errors->first('last_name') }}</div>
                    @endif
                </div>
            </div>

            <div class="pad_t_a">
                <label class="lbl">{{ __('worksheet.gender') }}:</label>
                <div class={{ $errors->has('gender') ? "error" : ""}}>
                <label class="input-radio">
                    <input type="radio" name="gender" id="Gender0" value="male">{{ __('worksheet.gender.male') }} </label>
                <br>
                <label class="input-radio">
                    <input type="radio" name="gender" id="Gender1" value="female"> {{ __('worksheet.gender.female') }} </label>
                </div>
            </div>
            <div class="pad_t_a">
                <label class="lbl">{{ __('worksheet.birthday') }}</label>
                <div class={{ $errors->has('birthday') ? "error" : ""}}>

                    <select name="day" class="select">
                        <option value="0" selected="selected">-</option>
                       @for($i = 1; $i<=31; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>

                    <select name="month" class="select">
                        <option value="0" selected="selected">-</option>

                        @foreach(__('month') as $k => $month)
                            <option value="{{ $k+1 }}">{{ $month }}</option>
                        @endforeach
                    </select>

                    <select name="year" class="select">
                        <option value="0" selected="selected">-</option>
                        @for($i = 2012; $i>=1930; $i--)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    @if($errors->has('birthday'))
                        <div class="grey pad_t_a">{{ $errors->first('birthday') }}</div>
                    @endif
                </div>
            </div>

            <div class="pad_t_a">
                <label class="lbl">{{ __('worksheet.marital_status') }}:</label>
                <div class={{ $errors->has('marital_status') ? "error" : ""}}>
                    <label class="input-radio">
                        <input type="radio" name="marital_status" id="Marriage-1" value="none" checked="checked">
                        {{ __('worksheet.marital_status.none') }}
                    </label>
                    <br>
                    <label class="input-radio">
                        <input type="radio" name="marital_status" id="Marriage0" value="unmarried">
                        {{ __('worksheet.marital_status.unmarried') }}
                    </label>
                    <br>
                    <label class="input-radio">
                        <input type="radio" name="marital_status" id="Marriage1" value="married">
                        {{ __('worksheet.marital_status.married') }}
                    </label>
                    <br>
                    <label class="input-radio">
                        <input type="radio" name="marital_status" id="Marriage2" value="no_longer_married">
                        {{ __('worksheet.marital_status.no_longer_married') }}
                    </label>
                    <br>
                    <label class="input-radio">
                        <input type="radio" name="marital_status" id="Marriage3" value="active_search">
                        {{ __('worksheet.marital_status.active_search') }}
                    </label>
                    <br>
                    <label class="input-radio">
                        <input type="radio" name="marital_status" id="Marriage4" value="inlove">
                        {{ __('worksheet.marital_status.in_love') }}
                    </label>
                    <br>
                    <label class="input-radio">
                        <input type="radio" name="marital_status" id="Marriage5" value="betrothed">
                        {{ __('worksheet.marital_status.betrothed') }}
                    </label>
                    <br>
                    <label class="input-radio">
                        <input type="radio" name="marital_status" id="Marriage6" value="complicated">
                        {{ __('worksheet.marital_status.complicated') }}
                    </label>
                    @if($errors->has('marital_status'))
                        <div class="grey pad_t_a">{{ $errors->first('marital_status') }}</div>
                    @endif
                </div>
            </div>



            <div class="pad_t_a">
                <div class={{ $errors->has('profession') ? "error" : ""}}>
                    <label class="lbl"> {{ __('worksheet.profession') }} </label>
                    <div class="input-txt_wrapper">
                        <input class="input-txt" type="text" name="profession" value="" maxlength="40">
                    </div>
                    @if($errors->has('profession'))
                        <div class="grey pad_t_a">{{ $errors->first('profession') }}</div>
                    @endif
                </div>
            </div>
        </div>

        <table class="table__wrap table__links bord-top">
            <tbody>
            <tr>
                <td width="50%" class="table__cell">
                    <input class="link blue full is_final" type="submit" name="cfms" value="{{ __('actions.save') }}">
                </td>
                <td width="50%" class="table__cell table__cell_last">
                    <a href="" class="link -full">
                        <span>{{ __('actions.cancel') }}</span>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</form>

@include('layouts.back')


@endsection