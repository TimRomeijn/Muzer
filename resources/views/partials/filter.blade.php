@php
    $rockIsChecked = false;
    $popIsChecked = false;
    $metalIsChecked = false;
    $jazzIsChecked = false;
    $guitarIsChecked = false;
    $bassIsChecked = false;
    $drumsIsChecked = false;
    $vocalsIsChecked = false;
    $otherIsChecked = false;
    $proIsChecked = false;
    $amateurIsChecked = false;
    $sessionIsChecked = false;
    $zeroOneIsChecked = false;
    $oneThreeIsChecked = false;
    $threeFiveIsChecked = false;
    $lessTimeIsChecked = false;
    $moreTimeIsChecked = false;
    $yesMissingIsChecked = false;
    $noMissingIsChecked = false;
    $nvtMissingIsChecked =false;
    $backlineIsChecked = false;
    $instrumentsIsChecked = false;
    $lightsIsChecked = false;
    $moreEquipmentIsChecked = false;
    $yesGageIsChecked = false;
    $noGageIsChecked = false;
    $nvtGageIsChecked = false;
    $yesContractIsChecked = false;
    $noContractIsChecked = false;
    $nvtContractIsChecked = false;





        if(isset($_GET['genre'])){
            foreach ($_GET['genre'] as $val){
                if ($val == 'Rock'){
                    $rockIsChecked = true;
                } else if ($val == 'Pop'){
                    $popIsChecked = true;
                } else if ($val == 'Metal'){
                    $metalIsChecked = true;
                } else if ($val == 'Jazz'){
                    $jazzIsChecked = true;
                }
            }
        }
        if(isset($_GET['instruments'])){
            foreach ($_GET['instruments'] as $val){
                if ($val == 'gitaar(elektrisch)'){
                    $guitarIsChecked = true;
                }else if ($val == 'basgitaar'){
                    $bassIsChecked = true;
                }else if ($val == 'drums'){
                    $drumsIsChecked = true;
                }else if ($val == 'vocalen'){
                    $vocalsIsChecked = true;
                }else if ($val == 'overig'){
                    $otherIsChecked = true;
                }
            }
        }
        if(isset($_GET['typemusician'])){
            foreach ($_GET['typemusician'] as $val){
                if ($val == 'professioneel'){
                    $proIsChecked = true;
                }else if ($val == 'amateur'){
                    $amateurIsChecked = true;
                }else if ($val == 'sessie'){
                    $sessionIsChecked = true;
                }
            }
        }
        if(isset($_GET['timemanagement'])){
            foreach ($_GET['timemanagement'] as $val){
                if ($val == '0-1'){
                    $zeroOneIsChecked = true;
                }else if ($val == '1-3'){
                    $oneThreeIsChecked = true;
                }else if ($val == '3-5'){
                    $threeFiveIsChecked = true;
                }else if ($val == 'minder'){
                    $lessTimeIsChecked = true;
                }else if ($val == 'meer'){
                    $moreTimeIsChecked = true;
                }
            }
        }
        if(isset($_GET['missing'])){
            foreach ($_GET['missing'] as $val){
                if ($val == 'ja'){
                    $yesMissingIsChecked = true;
                }else if ($val == 'nee'){
                    $noMissingIsChecked = true;
                }else if ($val == 'nvt'){
                    $nvtMissingIsChecked = true;
                }
            }
        }
        if(isset($_GET['equipment'])){
            foreach ($_GET['equipment'] as $val){
                if ($val == 'backline'){
                    $backlineIsChecked = true;
                } else if ($val == 'instrumenten'){
                    $instrumentsIsChecked = true;
                } else if ($val == 'lichten'){
                    $lightsIsChecked = true;
                } else if ($val == 'meer'){
                    $moreEquipmentIsChecked = true;
                }
            }
        }
        if(isset($_GET['gage'])){
            foreach ($_GET['gage'] as $val){
                if ($val == 'ja'){
                    $yesGageIsChecked = true;
                }else if ($val == 'nee'){
                    $noGageIsChecked = true;
                }else if ($val == 'nvt'){
                    $nvtGageIsChecked = true;
                }
            }
        }
        if(isset($_GET['contract'])){
            foreach ($_GET['contract'] as $val){
                if ($val == 'ja'){
                    $yesContractIsChecked = true;
                }else if ($val == 'nee'){
                    $noContractIsChecked = true;
                }else if ($val == 'nvt'){
                    $nvtContractIsChecked = true;
                }
            }
        }
@endphp
<form name="filter-form" id="filter-form" method="GET" action="/advancedsearch/filter">
@if($isMusician)
    <div id="accordion" class="panel panel-primary behclick-panel">
        <input type="hidden" name="type" value="musician">
        <div class="panel-heading">
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
                                <input  name="genre[]" class="filter-input checkBox" type="checkbox" value="Rock" @php if($rockIsChecked)echo "checked='checked'";  @endphp>
                                Rock
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input name="genre[]" class="filter-input checkBox" type="checkbox" value="Pop" @php if($popIsChecked)echo "checked='checked'";  @endphp>
                                Pop
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="genre[]" class="filter-input checkBox" type="checkbox" value="Metal" @php if($metalIsChecked)echo "checked='checked'";  @endphp  >
                                Metal
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="genre[]" class="filter-input checkBox" type="checkbox" value="Jazz" @php if($jazzIsChecked)echo "checked='checked'";  @endphp >
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
                    <option value="">Selecteer de provincie</option>
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
                                <input name="instruments[]" class="filter-input" type="checkbox" value="gitaar(elektrisch)" @php if($guitarIsChecked)echo "checked='checked'";  @endphp>
                                Gitaar(Elektrisch)
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input name="instruments[]" class="filter-input" type="checkbox" value="basgitaar" @php if($bassIsChecked)echo "checked='checked'";  @endphp>
                                Basgitaar
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="instruments[]" class="filter-input" type="checkbox" value="drums" @php if($drumsIsChecked)echo "checked='checked'";  @endphp>
                                Drums
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="instruments[]" class="filter-input" type="checkbox" value="vocals" @php if($vocalsIsChecked)echo "checked='checked'";  @endphp>
                                Vocals
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="instruments[]" class="filter-input" type="checkbox" value="overig" @php if($otherIsChecked)echo "checked='checked'";  @endphp>
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
                                <input name="typemusician[]" class="filter-input" type="checkbox" value="professioneel" @php if($proIsChecked)echo "checked='checked'";  @endphp>
                                Professioneel
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input name="typemusician[]" class="filter-input" type="checkbox" value="amateur"  @php if($amateurIsChecked)echo "checked='checked'";  @endphp>
                                Amateur
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input name="typemusician[]" class="filter-input" type="checkbox" value="sessie"  @php if($sessionIsChecked)echo "checked='checked'";  @endphp>
                                Sessie
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endif
@if($isBand)
    <div id="accordion" class="panel panel-primary behclick-panel">
        <input type="hidden" name="type" value="band">
        <div class="panel-heading">
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
                                <input name="genre[]" class="filter-input" type="checkbox" value="Rock" @php if($rockIsChecked)echo "checked='checked'";  @endphp>
                                Rock
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input name="genre[]" class="filter-input" type="checkbox" value="Pop" @php if($popIsChecked)echo "checked='checked'";  @endphp>
                                Pop
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="genre[]" class="filter-input" type="checkbox" value="Metal" @php if($metalIsChecked)echo "checked='checked'";  @endphp>
                                Metal
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="genre[]" class="filter-input" type="checkbox" value="Jazz" @php if($jazzIsChecked)echo "checked='checked'";  @endphp>
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
                    <input  name="bandnaam" type="text" class="form-control" placeholder="Bandnaam" aria-label="BandNaam" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary filter-input" type="submit">Zoek</button>
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
                    <option value="">Selecteer de provincie</option>
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
                                <input name="timemanagement[]" class="filter-input" type="checkbox" value="0-1" @php if($zeroOneIsChecked)echo "checked='checked'";  @endphp>
                                0-1 x per week
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input name="timemanagement[]" class="filter-input" type="checkbox" value="1-3" @php if($oneThreeIsChecked)echo "checked='checked'";  @endphp>
                                1-3 x per week
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="timemanagement[]" class="filter-input" type="checkbox" value="3-5" @php if($threeFiveIsChecked)echo "checked='checked'";  @endphp>
                                3-5 x per week
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="timemanagement[]" class="filter-input" type="checkbox" value="minder" @php if($lessTimeIsChecked)echo "checked='checked'";  @endphp>
                                Minder
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                            <label>
                                <input name="timemanagement[]" class="filter-input" type="checkbox" value="meer" @php if($moreTimeIsChecked)echo "checked='checked'";  @endphp >
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
                                <input name="missing[]" class="filter-input" type="checkbox" value="ja" @php if($yesMissingIsChecked)echo "checked='checked'";  @endphp>
                                Ja
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox" >
                            <label>
                                <input name="missing[]" class="filter-input" type="checkbox" value="nee" @php if($noMissingIsChecked)echo "checked='checked'";  @endphp>
                                Nee
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input name="missing[]" class="filter-input" type="checkbox" value="nvt" @php if($nvtMissingIsChecked)echo "checked='checked'";  @endphp>
                                N.v.t
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endif

@if($isStage)
<div id="accordion" class="panel panel-primary behclick-panel">
    <input type="hidden" name="type" value="stage">
    <div class="panel-heading">
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
                            <input name="genre[]" class="filter-input" type="checkbox" value="Rock" @php if($rockIsChecked)echo "checked='checked'";  @endphp>
                            Rock
                        </label>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="checkbox" >
                        <label>
                            <input name="genre[]" class="filter-input" type="checkbox" value="Pop" @php if($popIsChecked)echo "checked='checked'";  @endphp>
                            Pop
                        </label>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="checkbox"  >
                        <label>
                            <input name="genre[]" class="filter-input" type="checkbox" value="Metal" @php if($metalIsChecked)echo "checked='checked'";  @endphp>
                            Metal
                        </label>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="checkbox"  >
                        <label>
                            <input name="genre[]" class="filter-input" type="checkbox" value="Jazz" @php if($jazzIsChecked)echo "checked='checked'";  @endphp>
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
                <input type="text" name="podiumnaam" class="form-control filter-input" placeholder="Podiumnaam" aria-label="PodiumNaam" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-primary filter-input" type="submit">Zoek</button>
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
                <option value="">Selecteer de provincie</option>
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
                            <input name="equipment[]" class="filter-input" type="checkbox" value="backline" @php if($backlineIsChecked)echo "checked='checked'";  @endphp>
                            Backline
                        </label>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="checkbox" >
                        <label>
                            <input name="equipment[]" class="filter-input" type="checkbox" value="instrumenten" @php if($instrumentsIsChecked)echo "checked='checked'";  @endphp>
                            Instrumenten
                        </label>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="checkbox"  >
                        <label>
                            <input name="equipment[]" class="filter-input" type="checkbox" value="lichten" @php if($lightsIsChecked)echo "checked='checked'";  @endphp>
                            Lichten
                        </label>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="checkbox"  >
                        <label>
                            <input name="equipment[]" class="filter-input" type="checkbox" value="meer" @php if($moreEquipmentIsChecked)echo "checked='checked'";  @endphp>
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
                            <input name="gage[]" class="filter-input" type="checkbox" value="ja" @php if($yesGageIsChecked)echo "checked='checked'";  @endphp>
                            Ja
                        </label>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="checkbox" >
                        <label>
                            <input name="gage[]" class="filter-input" type="checkbox" value="nee" @php if($noGageIsChecked)echo "checked='checked'";  @endphp>
                            Nee
                        </label>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="checkbox">
                        <label>
                            <input name="gage[]" class="filter-input" type="checkbox" value="nvt" @php if($nvtGageIsChecked)echo "checked='checked'";  @endphp>
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
                            <input name="contract[]" class="filter-input" type="checkbox" value="ja" @php if($yesContractIsChecked)echo "checked='checked'";  @endphp>
                            Ja
                        </label>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="checkbox" >
                        <label>
                            <input name="contract[]" class="filter-input" type="checkbox" value="nee" @php if($noContractIsChecked)echo "checked='checked'";  @endphp>
                            Nee
                        </label>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="checkbox">
                        <label>
                            <input name="contract[]" class="filter-input" type="checkbox" value="nvt" @php if($nvtContractIsChecked)echo "checked='checked'";  @endphp>
                            N.v.t
                        </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endif

</form>