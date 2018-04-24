@extends('layout')

    @section('content')

    {{--<div class="banner">--}}
        {{--@include('partials.profile.banner')--}}
    {{--</div>--}}
    {{--<div class="tabs">--}}
        {{--@include('partials.profile.tabs', ["data" => menu])--}}
    {{--</div>--}}
    {{--<div class="members">--}}
        {{--@include('partials.band.members', [data => "members"])--}}
    {{--</div>--}}

        @include('partials.profile')



    @endsection
