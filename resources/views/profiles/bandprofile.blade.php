@extends('layout')

    @section('content')

    <div class="banner container">
        @include('profiles.profilebanner.banner')
    </div>

    <div class="right-container col-sm-4 float-sm-right">

        <div class="booking-button">
            <button type="button" class="btn btn-primary btn-block">Boek</button>
        </div>

        <div class="card">
            <div class="card-header text-center">
                Profielprogressie
            </div>
            <div class="card-body">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
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

