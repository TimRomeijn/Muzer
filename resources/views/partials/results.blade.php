<div class="results">

    <ul class="nav nav-tabs nav-fill">
        <li class="nav-item">
            <a class="nav-link " href="/advancedsearch">Muzikant</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/advancedsearch/bandsearch">Band</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/advancedsearch/stagesearch">Podium</a>
        </li>
    </ul>

            @if($isMusician)
                @foreach($musicianprofiles as $result)
                    <div class="card-group">
                        <div class="card col-md-4 d-none d-sm-block">
                            <img src="https://picsum.photos/500/?random" alt="profile-picture" class="card-img result-profile-pic">
                        </div>
                        <div class="card col-sm-8">
                            <div class="card-header">
                                {{ $result->musicianname }}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Muzikant</h5>
                                <p class="card-text">{{ $result->location }}</p>
                                <a href="/profiles/musicianprofile/" class="btn btn-primary">Bekijk</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

            @if($isBand)
                @foreach($bandprofiles as $result)
                    <div class="card-group">
                        <div class="card col-md-4 d-none d-sm-block">
                            <img src="https://picsum.photos/500/?random" alt="profile-picture" class="card-img result-profile-pic">
                        </div>
                        <div class="card col-sm-8">
                            <div class="card-header">
                                {{ $result->bandname }}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Band</h5>
                                <p class="card-text">{{ $result->location }}</p>
                                <a href="/profiles/bandprofile/" class="btn btn-primary">Bekijk</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

            @if($isStage)
                @foreach($stageprofiles as $result)
                    <div class="card-group">
                        <div class="card col-md-4 d-none d-sm-block">
                            <img src="https://picsum.photos/500/?random" alt="profile-picture" class="card-img result-profile-pic">
                        </div>
                        <div class="card col-sm-8">
                            <div class="card-header">
                                Podium
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $result->stagename }}</h5>
                                <p class="card-text">{{ $result->location }}</p>
                                <a href="/profiles/stageprofile/" class="btn btn-primary">Bekijk</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

</div>

