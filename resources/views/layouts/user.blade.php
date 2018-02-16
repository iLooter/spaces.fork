@extends('layouts.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/css/touch_light_cache_r1538p.css" data-main-css="1">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/css/3993701284_r1538p.css" data-main-css="1">
@endsection

@section('js')

@endsection

@section('header')
    @include('layouts.header_auth')
@endsection

@section('footer')
   @include('layouts.footer_auth')
@endsection

