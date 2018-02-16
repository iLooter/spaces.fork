@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/css/touch_light.css" data-main-css="1">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/css/not_auth.css" data-main-css="1">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/css/AboutLite.css" data-tmp_css="1">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/css/PlayerLite.css" data-tmp_css="1">
@endsection

@section('js')
   {{-- <script type="text/javascript" src="{{ asset('/') }}/js/boot-touch_light.js"/>
    <script type="text/javascript" src="{{ asset('/') }}/js/preload-touch_light.js" async="async"/>--}}
@endsection

@section('content')

        @include('layouts.header_nonauth')

        @include('home_content')

        @include('layouts.footer_nonauth')
@endsection
