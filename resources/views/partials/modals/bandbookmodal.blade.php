<form method="post" action="/mail/sendmail">
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
                                @guest
                                    <option>Log in om een profiel te kiezen voor het boeken!</option>
                                @endguest
                                @auth
                                    @foreach($stageprofiles as $sprofile)
                                        <option>{{ $sprofile->name }}</option>
                                    @endforeach
                                @endauth
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
                    <button type="submit" id="bookSubmit" class="btn btn-primary" data-dismiss="modal">Stuur verzoek</button>
                </div>
            </div>
        </div>
    </div>
</form>