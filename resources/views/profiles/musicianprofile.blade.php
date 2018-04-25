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


    <div class="banner">
        @include('profiles.profilebanner.banner')
    </div>

    <div class="tabs">
        @include('profiles.tabs.profiletabs')
    </div>

    <div class="blocks">
        @include('profiles.contentblocks.blocks')
    </div>




    @endsection
