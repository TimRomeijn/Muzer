@extends('layout')

    @section('content')

    <div class="banner container">
        @include('profiles.profilebanner.banner')
    </div>

    <div class="right-container col-sm-4 float-sm-right">

        <div class="add-bandmember-button">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addmemberModal">
               Stuur koppelverzoek
            </button>
        </div>

        <div class="card profile-progression">
            <div class="card-header text-center">
                Profielprogressie
            </div>
            <div class="card-body">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
            </div>
        </div>

        <div class="card text-center add-bandmember-card">
            <div class="card-header">
                Huidige band(s)
            </div>
            <div class="card-body">
                <div class="bandmembers">
                    @foreach($bandprofiles as $bprofile)
                        <i class="fas fa-users fa-3x bandmember-icon"></i>
                        <a href="/profiles/bandprofile/{{ $bprofile->id }}">
                            <p class="bandmember-text">{{ $bprofile->name }}</p>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        @include('partials.modals.bandmemberaddmodal')

    </div>

    <div class="left-container col-sm-8">

        <div class="tabs">
            @include('profiles.tabs.profiletabs')
        </div>

        <div class="blocks">
            @include('profiles.contentblocks.blocks')
        </div>

    </div>

    @endsection


{{--<div class="banner">--}}
{{--@include('partials.profile.banner')--}}
{{--</div>--}}
{{--<div class="tabs">--}}
{{--@include('partials.profile.tabs', ["data" => menu])--}}
{{--</div>--}}
{{--<div class="members">--}}
{{--@include('partials.band.members', [data => "members"])--}}
{{--</div>--}}
