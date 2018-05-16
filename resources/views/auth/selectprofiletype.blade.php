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
                    <form method="POST" action="/profiles/make-profile-musician">

                        {{csrf_field()}}

                        <a href="profiles/musicianprofile">
                            <button type="submit" name="create-musician" class="btn btn-primary btn-block profile-type-button">Muzikant</button>
                        </a>
                    </form>

                    <a href="profiles/bandprofile">
                        <button type="button" class="btn btn-primary btn-block profile-type-button">Band</button>
                    </a>
                    <a href="profiles/stageprofile">
                        <button type="button" class="btn btn-primary btn-block profile-type-button">Podium</button>
                    </a>
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


    @endsection