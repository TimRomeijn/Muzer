@extends('layout')

    @section('content')


        <div class="container select-profile-container">
            <div class="select-profile-title">
                <h1>Kies het soort profiel dat u wilt aanmaken.</h1>
            </div>
            <div class="card text-center profile-types-card">
                <div class="card-header">
                    Profieltypes
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary btn-block profile-type-button" data-toggle="modal" data-target="#createprofileModal">Kies een profiel</button>
                </div>
            </div>
            <div class="sub-button-text">
                <h2>Of ga gelijk door met zoeken!</h2>
            </div>
            <div class="advanced-search-nav-button text-center">
                <a href="/advancedsearch">
                    <button type="button" class="btn btn-primary">Geavanceerd zoeken</button>
                </a>
            </div>
        </div>

        @include('partials.modals.profilecreationmodal')


    @endsection