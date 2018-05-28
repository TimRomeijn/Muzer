
<form method="POST" action="/profiles/addprofile">

{{ csrf_field() }}

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

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Kies uw profiel</label>
                        <select class="form-control" name="profile-types" id="exampleFormControlSelect1">
                            <option value="musician-profile">Muzikant Profiel</option>
                            <option value="band-profile">Band Profiel</option>
                            <option value="stage-profile">Podium Profiel</option>
                        </select>
                        <small id="profileHelp" class="form-text text-muted">Kies hier het soort profiel u wilt creëren.</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Naam</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Voer naam in">
                        <small id="emailHelp" class="form-text text-muted">Voer hier uw muzikant/band/podium naam in.</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Voer email in">
                        <small id="emailHelp" class="form-text text-muted">Voer hier de email in die gecontact kan worden door mensen die het profiel bezoeken.</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPhone1">Telefoonnummer</label>
                        <input type="text" name="phonenumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Voer telefoonnummer in">
                        <small id="emailHelp" class="form-text text-muted">Voer hier het telefoonnummer in waarop u gecontact kan worden.</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Genre</label>
                        <select name="genre" class="custom-select form-control">
                            <option selected>Selecteer het primaire genre</option>
                            <option value="Rock">Rock</option>
                            <option value="Pop">Pop</option>
                            <option value="Metal">Metal</option>
                            <option value="Jazz">Jazz</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Locatie</label>
                        <select name="location" class="custom-select form-control">
                            <option selected>Selecteer de provincie</option>
                            <option value="Zuid-Holland">Zuid-Holland</option>
                            <option value="Noord-Holland">Noord-Holland</option>
                            <option value="Noord-Brabant">Noord-Brabant</option>
                            <option value="Groningen">Groningen</option>
                            <option value="Gelderland">Gelderland</option>
                            <option value="Flevoland">Flevoland</option>
                            <option value="Zeeland">Zeeland</option>
                            <option value="Overijssel">Overijssel</option>
                            <option value="Limburg">Limburg</option>
                            <option value="Friesland">Friesland</option>
                            <option value="Drenthe">Drenthe</option>
                            <option value="Utrechy">Utrecht</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluit</button>
                    <button type="submit" id="profileCreateSubmit" class="btn btn-primary">Maak profiel</button>
                </div>
            </div>

        </div>
    </div>
</form>