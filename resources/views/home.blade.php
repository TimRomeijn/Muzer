@extends('layout')


@section('content')

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="home-block bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="my-3 py-3">
                <h2 class="display-5">Muzikant</h2>
                <p class="lead">Zoek hier naar de juiste muzikant voor jou!</p>
            </div>
            <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                <div class="info-buttonclass text-center">
                    <a href="advancedsearch/">
                        <button type="button" class="btn btn-primary">INFO</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="home-block bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">Band</h2>
                <p class="lead">Zoek hier naar de juiste band voor jou!</p>
            </div>
            <div class="bg-dark box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                <div class="info-buttonclass text-center">
                    <a href="advancedsearch/bandsearch">
                        <button type="button" class="btn btn-primary">INFO</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="home-block bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="my-3 py-3">
                <h2 class="display-5">Podium</h2>
                <p class="lead">Zoek hier naar het juiste podium voor jou!</p>
            </div>
            <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                <div class="info-buttonclass text-center">
                    <a href="advancedsearch/stagesearch">
                        <button type="button" class="btn btn-primary">INFO</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Ontdek!</h1>
            <p class="lead font-weight-normal">Zoek en filter hier op de muzikant,band of podium voor jou!</p>
            <a class="btn btn-outline-secondary" href="advancedsearch">ZOEK</a>
        </div>
        <div class="product-device box-shadow d-none d-md-block"></div>
        <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>


@endsection

@section('footer')

@endsection