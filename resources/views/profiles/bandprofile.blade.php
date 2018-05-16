@extends('layout')

    @section('content')

    <div class="banner container">
        @include('profiles.profilebanner.banner')
    </div>

    <div class="right-container col-sm-4 float-sm-right">

        <div class="booking-button">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#bandModal">Boekingsverzoek</button>
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
                Huidige bandleden
            </div>
            <div class="card-body">
                <div class="bandmembers">
                    @foreach($musicianprofiles as $mprofile)
                        <i class="fas fa-user fa-3x bandmember-icon"></i>
                        <a href="/profiles/musicianprofile/{{ $mprofile->id }}">
                            <p class="bandmember-text">{{ $mprofile->name }}</p>
                        </a>
                    @endforeach
                </div>
                <div class="add-bandmember-button">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addmemberModal">
                        <i class="fas fa-plus fa-2x"></i>Voeg bandlid toe
                    </button>
                </div>
            </div>
            <div class="card-footer text-muted missing-musician">
                <p>Missende <i>random muzikant</i></p>
            </div>
        </div>

        @include('partials.modals.bandbookmodal')

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

