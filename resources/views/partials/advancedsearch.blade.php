<?php
$isMusician = isset($isMusician) ? $isMusician : false;
$isBand = isset($isBand) ? $isBand : false;
$isStage = isset($isStage) ? $isStage : false;

//?>
<div class="container">
    <div class="row">
        <div class="col filter-container">
            @include('partials.filter' )
        </div>
        <div class="col-6 results-container">
            @include('partials.results')
        </div>
        <div class="col rightsection-container">
            @include('partials.rightsection')
        </div>
    </div>
</div>