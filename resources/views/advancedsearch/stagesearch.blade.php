@extends('layout')


@section('content')

    <div class="mobile-search d-sm-none">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Zoek" aria-label="Zoek" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-primary" type="button">Zoek</button>
            </div>
        </div>
    </div>

    <div class="filter-button d-sm-none">
        <i class="fas fa-filter fa-lg"></i>
    </div>

    @include('partials.advancedsearch', ['isStage'=> true])




@endsection