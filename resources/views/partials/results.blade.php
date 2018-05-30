<div class="results">

    <ul class="nav nav-tabs nav-fill">
        <li class="nav-item current-result-tab">
            <a class="nav-link " href="/advancedsearch">Muzikant</a>
        </li>
        <li class="nav-item current-result-tab">
            <a class="nav-link" href="/advancedsearch/bandsearch">Band</a>
        </li>
        <li class="nav-item current-result-tab">
            <a class="nav-link" href="/advancedsearch/stagesearch">Podium</a>
        </li>
    </ul>

            @if($isMusician)
                @foreach($results as $result)
                    @foreach($result as $data)
                        <div class="card-group">
                            <div class="card col-md-4 d-none d-sm-block">
                                <img src="https://picsum.photos/500/?random" alt="profile-picture" class="card-img result-profile-pic">
                            </div>
                            <div class="card col-sm-8">
                                <div class="card-header">
                                    Muzikant
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $data->name }}</h5>
                                    <p class="card-text">Locatie:{{ $data->location }}</p>
                                    <p class="card-text">Genre:{{ $data->genre }}</p>
                                    <p class="card-text">Instrument:{{ $data->instruments }}</p>
                                    <a href="/profiles/musicianprofile/{{ $data->id }}" class="btn btn-primary">Bekijk</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            @endif

            @if($isBand)
                @foreach($results as $result)
                    @foreach($result as $data)
                        <div class="card-group">
                            <div class="card col-md-4 d-none d-sm-block">
                                <img src="https://picsum.photos/500/?random" alt="profile-picture" class="card-img result-profile-pic">
                            </div>
                            <div class="card col-sm-8">
                                <div class="card-header">
                                    Band
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $data->name }}</h5>
                                    <p class="card-text">Locatie:{{ $data->location }}</p>
                                    <p class="card-text">Genre:{{ $data->genre }}</p>
                                    <a href="/profiles/bandprofile/{{ $data->id }}" class="btn btn-primary">Bekijk</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            @endif

            @if($isStage)
                @foreach($results as $result)
            @foreach($result as $data)
                <div class="card-group">
                    <div class="card col-md-4 d-none d-sm-block">
                        <img src="https://picsum.photos/500/?random" alt="profile-picture" class="card-img result-profile-pic">
                    </div>
                    <div class="card col-sm-8">
                        <div class="card-header">
                            Podium
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->name }}</h5>
                            <p class="card-text">Locatie:{{ $data->location }}</p>
                            <p class="card-text">Genre:{{ $data->genre }}</p>
                            <a href="/profiles/stageprofile/{{ $data->id }}" class="btn btn-primary">Bekijk</a>
                        </div>
                    </div>
                </div>
            @endforeach
                @endforeach
            @endif

</div>

