@extends('layout')

    @section('content')

        <div class="banner container">
            @include('profiles.profilebanner.banner')
        </div>

        <div class="right-container col-sm-4 float-sm-right">

            @auth
                <div class="booking-button">
                    <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#stageModal">Boekingsverzoek</button>
                </div>
            @endauth

            @guest
                <div class="booking-button">
                    <button type="button" class="btn btn-primary btn-block"  data-toggle="tooltip" data-placement="top" title="Registreer en log in om een boeking te doen.">Boekingsverzoek</button>
                </div>
            @endguest

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

            <!-- Modal -->
            @include('partials.modals.stagebookmodal')

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
