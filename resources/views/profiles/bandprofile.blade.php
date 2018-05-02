@extends('layout')

    @section('content')

    <div class="banner container">
        @include('profiles.profilebanner.banner')
    </div>

    <div class="right-container col-sm-4 float-sm-right">

        <div class="booking-button">
            <button type="button" class="btn btn-primary btn-block">Boek</button>
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
                <i class="fas fa-user fa-3x bandmember-icon"></i>
                <i class="fas fa-user fa-3x bandmember-icon"></i>
                <i class="fas fa-user fa-3x bandmember-icon"></i>
                <a href="#" class="btn btn-primary add-bandmember-button">Voeg bandlid toe</a>
            </div>
            <div class="card-footer text-muted">
                Missende drummer
            </div>
        </div>

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

