<form method="POST" action="/profiles/make-profile">
    <div class="modal fade" id="createprofileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Creëer een profiel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kies uw profiel</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option value="musician-profile">Muzikant Profiel</option>
                                <option value="band-profile">Band Profiel</option>
                                <option value="stage-profile">Podium Profiel</option>
                            </select>
                            <small id="profileHelp" class="form-text text-muted">Kies hier het soort profiel u wilt creëren.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Naam</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Voer naam in">
                            <small id="emailHelp" class="form-text text-muted">Voer hier uw muzikant/band/podium naam in.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Voer email in">
                            <small id="emailHelp" class="form-text text-muted">Voer hier de email in die gecontact kan worden door mensen die het profiel bezoeken.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhone1">Telefoonnummer</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Voer telefoonnummer in">
                            <small id="emailHelp" class="form-text text-muted">Voer hier het telefoonnummer in waarop u gecontact kan worden.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Locatie</label>
                            <select class="custom-select form-control">
                                <option selected>Selecteer de provincie</option>
                                <option value="1">Zuid-Holland</option>
                                <option value="2">Noord-Holland</option>
                                <option value="3">Noord-Brabant</option>
                                <option value="4">Groningen</option>
                                <option value="5">Gelderland</option>
                                <option value="6">Flevoland</option>
                                <option value="7">Zeeland</option>
                                <option value="8">Overijssel</option>
                                <option value="9">Limburg</option>
                                <option value="10">Friesland</option>
                                <option value="11">Drenthe</option>
                                <option value="12">Utrecht</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluit</button>
                    <button type="submit" id="bookSubmit" class="btn btn-primary" data-dismiss="modal">Maak profiel</button>
                </div>
            </div>
        </div>
    </div>
</form>