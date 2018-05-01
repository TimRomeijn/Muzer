<div class="content-blocks">

    <div class="row">
            <div class="col">
                    @foreach($blocks as $block)

                        {{--<div class="card-columns">--}}
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $block }}</h5>
                                    <button type="button" class="btn btn-info">
                                        <span class="oi oi-pencil" title="pencil" aria-hidden="true"></span>Edit
                                    </button>
                                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                                        Some quick example text to build on the card title and make up the bulk of the card's content.
                                        Some quick example text to build on the card title and make up the bulk of the card's content.
                                    </p>
                                </div>
                            </div>
                        {{--</div>--}}

                    @endforeach
            </div>
        </div>
    </div>

</div>

