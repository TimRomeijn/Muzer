@extends('layout')

    @section('content')


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
