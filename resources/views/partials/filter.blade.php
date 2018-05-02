@if($isMusician)
    <div id="accordion" class="panel panel-primary behclick-panel">
        <div class="panel-heading">
            <button type="button" class="btn btn-primary btn-lg search-button">Zoek</button>
            <div class="close-filter-button">
                <i class="fas fa-times-circle fa-lg"></i>
            </div>
        </div>
        <div class="panel-body">
            <div class="panel-heading " >
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse0">
                        <i class="indicator fa fa-caret-down" aria-hidden="true"></i> Genre
                    </a>
                </h4>
            </div>
            <div id="collapse0" class="panel-collapse collapse in" >
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="Rock">
                                Rock
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input type="checkbox" value="Pop">
                                Pop
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input type="checkbox" value="Metal">
                                Metal
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input type="checkbox" value="Jazz">
                                Jazz
                            </label>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="panel-heading " >
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse1">
                        <i class="indicator fa fa-caret-down" aria-hidden="true"></i> Locatie
                    </a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in" >
                <select class="custom-select">
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
            <div class="panel-heading" >
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse3"><i class="indicator fa fa-caret-down" aria-hidden="true"></i> Instrument(en)</a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse in">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Gitaar(Elektrisch)
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input type="checkbox" value="">
                                Basgitaar
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input type="checkbox" value="">
                                Drums
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input type="checkbox" value="">
                                Vocals
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input type="checkbox" value="">
                                Overig
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="panel-heading" >
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse2"><i class="indicator fa fa-caret-down" aria-hidden="true"></i>Soort muzikant</a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Proffesioneel/beroeps
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input type="checkbox" value="">
                                Hobby
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Sessie
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="panel-heading">
                <button type="button" class="btn btn-primary btn-lg search-button">Zoek</button>
            </div>
        </div>
    </div>
@endif
@if($isBand)
    <div id="accordion" class="panel panel-primary behclick-panel">
        <div class="panel-heading">
            <button type="button" class="btn btn-primary btn-lg search-button">Zoek</button>
            <div class="close-filter-button">
                <i class="fas fa-times-circle fa-lg"></i>
            </div>
        </div>
        <div class="panel-body">
            <div class="panel-heading " >
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse0">
                        <i class="indicator fa fa-caret-down" aria-hidden="true"></i> Genre
                    </a>
                </h4>
            </div>
            <div id="collapse0" class="panel-collapse collapse in" >
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="Rock">
                                Rock
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input type="checkbox" value="Pop">
                                Pop
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input type="checkbox" value="Metal">
                                Metal
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input type="checkbox" value="Jazz">
                                Jazz
                            </label>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="panel-heading " >
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse1">
                        <i class="indicator fa fa-caret-down" aria-hidden="true"></i> Naam
                    </a>
                </h4>
            </div>

            <div id="collapse1" class="panel-collapse collapse in">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Bandnaam" aria-label="BandNaam" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="button">Zoek</button>
                    </div>
                </div>
            </div>

            <div class="panel-heading " >
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse2">
                        <i class="indicator fa fa-caret-down" aria-hidden="true"></i> Locatie
                    </a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse in" >
                <select class="custom-select">
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
            <div class="panel-heading" >
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse3"><i class="indicator fa fa-caret-down" aria-hidden="true"></i>Tijdsbeschikking</a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse in">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="0-1">
                                0-1 x per week
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input type="checkbox" value="1-3">
                                1-3 x per week
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input type="checkbox" value="3-5">
                                3-5 x per week
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input type="checkbox" value="minder">
                                Minder
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input type="checkbox" value="meer">
                                Meer
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="panel-heading" >
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse5"><i class="indicator fa fa-caret-down" aria-hidden="true"></i>Missende muzikanten</a>
                </h4>
            </div>
            <div id="collapse5" class="panel-collapse collapse">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="ja">
                                Ja
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input type="checkbox" value="nee">
                                Nee
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="nvt">
                                N.v.t
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="panel-heading">
                <button type="button" class="btn btn-primary btn-lg search-button">Zoek</button>
            </div>
        </div>
    </div>
@endif
@if($isStage)
    <div id="accordion" class="panel panel-primary behclick-panel">
        <div class="panel-heading">
            <button type="button" class="btn btn-primary btn-lg search-button">Zoek</button>
            <div class="close-filter-button">
                <i class="fas fa-times-circle fa-lg"></i>
            </div>
        </div>
        <div class="panel-body">
            <div class="panel-heading " >
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse0">
                        <i class="indicator fa fa-caret-down" aria-hidden="true"></i> Genre
                    </a>
                </h4>
            </div>
            <div id="collapse0" class="panel-collapse collapse in" >
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="Rock">
                                Rock
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input type="checkbox" value="Pop">
                                Pop
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input type="checkbox" value="Metal">
                                Metal
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input type="checkbox" value="Jazz">
                                Jazz
                            </label>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="panel-heading " >
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse1">
                        <i class="indicator fa fa-caret-down" aria-hidden="true"></i> Naam
                    </a>
                </h4>
            </div>

            <div id="collapse1" class="panel-collapse collapse in">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Podiumnaam" aria-label="PodiumNaam" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="button">Zoek</button>
                    </div>
                </div>
            </div>

            <div class="panel-heading " >
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse2">
                        <i class="indicator fa fa-caret-down" aria-hidden="true"></i> Locatie
                    </a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse in" >
                <select class="custom-select">
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
            <div class="panel-heading" >
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse3"><i class="indicator fa fa-caret-down" aria-hidden="true"></i>Equipment</a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse in">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="backline">
                                Backline
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input type="checkbox" value="instrumenten">
                                Instrumenten
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input type="checkbox" value="lichten">
                                Lichten
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input type="checkbox" value="meer">
                                Meer
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input type="checkbox" value="meer">
                                Meer
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="panel-heading" >
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse5"><i class="indicator fa fa-caret-down" aria-hidden="true"></i>Gage</a>
                </h4>
            </div>
            <div id="collapse5" class="panel-collapse collapse">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="ja">
                                Ja
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input type="checkbox" value="nee">
                                Nee
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="nvt">
                                N.v.t
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="panel-heading" >
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse6"><i class="indicator fa fa-caret-down" aria-hidden="true"></i>Contract</a>
                </h4>
            </div>
            <div id="collapse6" class="panel-collapse collapse">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="ja">
                                Ja
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input type="checkbox" value="nee">
                                Nee
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="nvt">
                                N.v.t
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="panel-heading">
                <button type="button" class="btn btn-primary btn-lg search-button">Zoek</button>
            </div>
        </div>
    </div>
@endif
