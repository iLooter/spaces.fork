@extends('layouts.email')

@section('content')
    <table width="100%" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td width="90%" style="padding:10px;padding-bottom:30px">
                <div style="background-color:#ffffff;border-radius:3px;border:1px solid #c5d3e1;padding-left:10px;padding-right:10px;border-bottom:0">
                    <div style="color:#323232;font-size:14px;font-family:Arial;padding-top:10px;padding-bottom:7px;padding-left:5px;padding-right:5px">
                        Здравствуйте, при регистрации на <a href="{{ route('home') }}"
                                                            style="color:#0e3c87;text-decoration:none"
                                                            target="_blank">{{ config('app.name') }}</a>
                        был указан ваш e-mail.<br><br> Ваши данные для входа:<br> E-mail:
                        <b><a href="mailto:{{ $email }}">{{ $email }}</a></b><br>
                        Пароль: <b>99w43v</b><br> <br> Для завершения регистрации вам
                        следует активировать свой аккаунт.
                    </div>
                </div>
                <a href="{{ route('user.email_confirmation_check', ['token' => $email_token]) }}"
                   style="display:block;padding:10px;text-align:center;border:1px solid #c5d3e1;color:#57a3ea;text-decoration:none;background:#fff"
                   target="_blank">
                    Активировать аккаунт <img
                            src="http://c.spac.me/i/ico/arr2_r_blue.png"
                            alt="" style="vertical-align: middle; max-width: 2400px;"> </a>
            </td>
        </tr>
        </tbody>
    </table>
@endsection