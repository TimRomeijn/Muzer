<div class="content-blocks">

<div class="row">
        <div class="col">
            @foreach($blocks as $key => $value)
                <div class="card col-md">
                    <div class="card-body">
                        <h5 class="card-title">{{ $value }}</h5>
                        <button type="button" class="btn btn-info">
                            <span class="oi oi-pencil" title="pencil" aria-hidden="true"></span>Edit
                        </button>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <p class="card-text">
                            @foreach($newData as $k => $v)
                                @if ($k == $key)
                                    <span>{{ $v }}</span>
                                @endif
                            @endforeach
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

