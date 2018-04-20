<?php
$isMusician = isset($isMusician) ? $isMusician : false;
$isBand = isset($isBand) ? $isBand : false;
$isStage = isset($isStage) ? $isStage : false;

//?>
<div class="container">
    <div class="row">
        <div class="col filter-container d-none d-sm-block">
            @include('partials.filter' )
        </div>
        <div class="col results-container-mobile d-sm-none">
            @include('partials.results')
        </div>
        <div class="col-6 results-container">
            @include('partials.results')
        </div>
        <div class="col rightsection-container d-none d-sm-block">
            @include('partials.rightsection')
        </div>
    </div>
</div>