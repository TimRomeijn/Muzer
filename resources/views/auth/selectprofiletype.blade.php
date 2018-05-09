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
                    <a href="profiles/musicianprofile">
                        <button type="button" class="btn btn-primary btn-block profile-type-button">Muzikant</button>
                    </a>
                    <a href="profiles/bandprofile">
                        <button type="button" class="btn btn-primary btn-block profile-type-button">Band</button>
                    </a>
                    <a href="profiles/stageprofile">
                        <button type="button" class="btn btn-primary btn-block profile-type-button">Podium</button>
                    </a>
                </div>
            </div>
        </div>


    @endsection