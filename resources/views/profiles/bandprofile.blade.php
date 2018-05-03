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
                <i class="fas fa-user fa-3x bandmember-icon"></i>
                <i class="fas fa-user fa-3x bandmember-icon"></i>
                <i class="fas fa-user fa-3x bandmember-icon"></i>
                <a href="#" class="btn btn-primary add-bandmember-button">Voeg bandlid toe</a>
            </div>
            <div class="card-footer text-muted">
                Missende drummer
            </div>
        </div>

        <div class="modal fade" id="bandModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Verstuur een boekingsverzoek</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Kies uw profiel</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>{{ $currentProfile }}</option>
                                    <option>Ander profiel als je er meer hebt.</option>
                                </select>
                                <small id="profileHelp" class="form-text text-muted">Kies hier het profiel dat de band kan bekijken voor de boeking.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Voer email in">
                                <small id="emailHelp" class="form-text text-muted">Zodat de band u ook via de mail kan bereiken.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Contract uploaden</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                <small id="contractHelp" class="form-text text-muted">Indien beschikbaar</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Reden voor boeken</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluit</button>
                        <button type="button" id="bookSubmit" class="btn btn-primary" data-dismiss="modal">Stuur verzoek</button>
                    </div>
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

