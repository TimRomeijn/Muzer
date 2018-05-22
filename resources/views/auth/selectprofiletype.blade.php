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

            {{--<form method="POST" action="/profiles/{{ $profile }}/addprofile">--}}

                {{--{{ csrf_field() }}--}}

            {{--<div class="form-group">--}}
                {{--<label for="exampleFormControlSelect1">Kies uw profiel</label>--}}
                {{--<select class="form-control" name="profile-types" id="exampleFormControlSelect1">--}}
                    {{--<option value="musician-profile">Muzikant Profiel</option>--}}
                    {{--<option value="band-profile">Band Profiel</option>--}}
                    {{--<option value="stage-profile">Podium Profiel</option>--}}
                {{--</select>--}}
                {{--<small id="profileHelp" class="form-text text-muted">Kies hier het soort profiel u wilt creëren.</small>--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}
                {{--<label for="exampleInputName1">Naam</label>--}}
                {{--<input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Voer naam in">--}}
                {{--<small id="emailHelp" class="form-text text-muted">Voer hier uw muzikant/band/podium naam in.</small>--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}
                {{--<label for="exampleInputEmail1">Email</label>--}}
                {{--<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Voer email in">--}}
                {{--<small id="emailHelp" class="form-text text-muted">Voer hier de email in die gecontact kan worden door mensen die het profiel bezoeken.</small>--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}
                {{--<label for="exampleInputPhone1">Telefoonnummer</label>--}}
                {{--<input type="text" name="phonennumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Voer telefoonnummer in">--}}
                {{--<small id="emailHelp" class="form-text text-muted">Voer hier het telefoonnummer in waarop u gecontact kan worden.</small>--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}
                {{--<label for="exampleFormControlTextarea1">Locatie</label>--}}
                {{--<select name="location" class="custom-select form-control">--}}
                    {{--<option selected>Selecteer de provincie</option>--}}
                    {{--<option value="Zuid-Holland">Zuid-Holland</option>--}}
                    {{--<option value="Noord-Holland">Noord-Holland</option>--}}
                    {{--<option value="Noord-Brabant">Noord-Brabant</option>--}}
                    {{--<option value="Groningen">Groningen</option>--}}
                    {{--<option value="Gelderland">Gelderland</option>--}}
                    {{--<option value="Flevoland">Flevoland</option>--}}
                    {{--<option value="Zeeland">Zeeland</option>--}}
                    {{--<option value="Overijssel">Overijssel</option>--}}
                    {{--<option value="Limburg">Limburg</option>--}}
                    {{--<option value="Friesland">Friesland</option>--}}
                    {{--<option value="Drenthe">Drenthe</option>--}}
                    {{--<option value="Utrechy">Utrecht</option>--}}
                {{--</select>--}}
            {{--</div>--}}
            {{--</form>--}}
        </div>




            {{--<button type="submit" id="profileCreateSubmit" class="btn btn-primary" data-dismiss="modal">Maak profiel</button>--}}

        @include('partials.modals.profilecreationmodal')

        @include('partials.errors')

    @endsection