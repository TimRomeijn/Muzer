<form name="filter-form" id="filter-form" method="GET" action="/advancedsearch/filter">
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
                                <input name="genre" class="filter-input" type="checkbox" value="Rock">
                                Rock
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input name="genre" class="filter-input" type="checkbox" value="Pop">
                                Pop
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="genre" class="filter-input" type="checkbox" value="Metal">
                                Metal
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="genre" class="filter-input" type="checkbox" value="Jazz">
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
                <select name="location" class="custom-select filter-input">
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
                    <option value="Utrecht">Utrecht</option>
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
                                <input name="instruments" class="filter-input" type="checkbox" value="Gitaar(Elektrisch)">
                                Gitaar(Elektrisch)
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input name="instruments" class="filter-input" type="checkbox" value="Basgitaar">
                                Basgitaar
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="instruments" class="filter-input" type="checkbox" value="Drums">
                                Drums
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="instruments" class="filter-input" type="checkbox" value="Vocals">
                                Vocals
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="instruments" class="filter-input" type="checkbox" value="Overig">
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
                                <input name="typemusician" class="filter-input" type="checkbox" value="Proffesioneel/beroeps">
                                Proffesioneel/beroeps
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input name="typemusician" class="filter-input" type="checkbox" value="Hobby">
                                Hobby
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input name="typemusician" class="filter-input" type="checkbox" value="Sessie">
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
                                <input name="genre" class="filter-input" type="checkbox" value="Rock">
                                Rock
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input name="genre" class="filter-input" type="checkbox" value="Pop">
                                Pop
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="genre" class="filter-input" type="checkbox" value="Metal">
                                Metal
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="genre" class="filter-input" type="checkbox" value="Jazz">
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
                        <button class="btn btn-outline-primary filter-input" type="button">Zoek</button>
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
                <select name="location" class="filter-input custom-select">
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
                    <option value="Utrecht">Utrecht</option>
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
                                <input name="timemanagement" class="filter-input" type="checkbox" value="0-1">
                                0-1 x per week
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input name="timemanagement" class="filter-input" type="checkbox" value="1-3">
                                1-3 x per week
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="timemanagement" class="filter-input" type="checkbox" value="3-5">
                                3-5 x per week
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="timemanagement" class="filter-input" type="checkbox" value="minder">
                                Minder
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="timemanagement" class="filter-input" type="checkbox" value="meer">
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
                                <input name="missing" class="filter-input" type="checkbox" value="ja">
                                Ja
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input name="missing" class="filter-input" type="checkbox" value="nee">
                                Nee
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input name="missing" class="filter-input" type="checkbox" value="nvt">
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
                                <input name="genre" class="filter-input" type="checkbox" value="Rock">
                                Rock
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input name="genre" class="filter-input" type="checkbox" value="Pop">
                                Pop
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="genre" class="filter-input" type="checkbox" value="Metal">
                                Metal
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="genre" class="filter-input" type="checkbox" value="Jazz">
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
                        <button class="btn btn-outline-primary filter-input" type="button">Zoek</button>
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
                <select name="location" class="filter-input custom-select">
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
                    <option value="Utrecht">Utrecht</option>
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
                                <input name="equipment" class="filter-input" type="checkbox" value="backline">
                                Backline
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input name="equipment" class="filter-input" type="checkbox" value="instrumenten">
                                Instrumenten
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="equipment" class="filter-input" type="checkbox" value="lichten">
                                Lichten
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="equipment" class="filter-input" type="checkbox" value="meer">
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
                                <input name="gage" class="filter-input" type="checkbox" value="ja">
                                Ja
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input name="gage" class="filter-input" type="checkbox" value="nee">
                                Nee
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input name="gage" class="filter-input" type="checkbox" value="nvt">
                                N.v.t
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="panel-heading" >
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse6"><i class="indicator fa fa-caret-down" aria-hidden="true"></i>Contract aanwezig</a>
                </h4>
            </div>
            <div id="collapse6" class="panel-collapse collapse">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input name="contract" class="filter-input" type="checkbox" value="ja">
                                Ja
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input name="contract" class="filter-input" type="checkbox" value="nee">
                                Nee
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input name="contract" class="filter-input" type="checkbox" value="nvt">
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
</form>