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
    {{--<div class="tab-content" id="myTabContent">--}}
        {{--<div class="tab-pane fade" id="muzikant" role="tabpanel" aria-labelledby="home-tab">--}}

            @if($isMusician)
                <div class="card">
                    <div class="card-header">
                        Naam
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Muzikant</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Bekijk</a>
                    </div>
                </div>
            @endif

        {{--</div>--}}
        {{--<div class="tab-pane fade" id="band" role="tabpanel" aria-labelledby="profile-tab">--}}

            @if($isBand)
                <div class="card">
                    <div class="card-header">
                        Naam
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Band</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Bekijk</a>
                    </div>
                </div>
            @endif

        {{--</div>--}}
        {{--<div class="tab-pane fade" id="podium" role="tabpanel" aria-labelledby="contact-tab">--}}

            @if($isStage)
                <div class="card">
                    <div class="card-header">
                        Naam
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Podium</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Bekijk</a>
                    </div>
                </div>
            @endif

        {{--</div>--}}
    {{--</div>--}}

</div>



