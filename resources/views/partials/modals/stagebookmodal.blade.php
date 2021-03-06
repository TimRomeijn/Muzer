<form action="/mail/sendmailtostage" method="post" enctype="multipart/form-data">

    {{ csrf_field() }}

    <div class="modal fade" id="stageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <input type="hidden" name="id" value="{{ $profile->id }}">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kies uw profiel</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="profile">
                                @guest
                                    <option>Log in om een profiel te kiezen voor het boeken!</option>
                                @endguest
                                @auth
                                    @foreach($bandprofiles as $sprofile)
                                        <option>{{ $sprofile->name }}</option>
                                    @endforeach
                                @endauth
                            </select>
                            <small id="profileHelp" class="form-text text-muted">Kies hier het profiel dat het podium kan bekijken voor de boeking.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Voer email in..." required>
                            <small id="emailHelp" class="form-text text-muted">*VERPLICHT Zodat het podium u ook via de mail kan bereiken.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Contract uploaden</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="contract">
                            <small id="contractHelp" class="form-text text-muted">Indien beschikbaar</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhone1">Telefoonnummer</label>
                            <input type="text" name="phonenumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Voer telefoonnummer in">
                            <small id="emailHelp" class="form-text text-muted">Voer hier het telefoonnummer in waarop u gecontact kan worden.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Reden voor boeken</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="bookingstagereason"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluit</button>
                    <button type="submit" id="bookSubmit" class="btn btn-primary">Stuur verzoek</button>
                </div>
            </div>
        </div>
    </div>
</form>