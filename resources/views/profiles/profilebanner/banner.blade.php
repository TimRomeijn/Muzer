{{--@php--}}
    {{--$isMusician = isset($isMusician) ? $isMusician : false;--}}
    {{--$isBand = isset($isBand) ? $isBand : false;--}}
    {{--$isStage = isset($isStage) ? $isStage : false;--}}

{{--@endphp--}}
<div class="card-group">
    <div class="card hovercard col-md-8">
        <div class="card-background">
            {{--<img class="card-bkimg" alt="" src="https://picsum.photos/300/300">--}}
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <a href="">
                <img alt="" src="https://picsum.photos/300/300">
            </a>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $profile->name }}</h5>
            <ul class="list-group card-text d-md-none d-sm-block">
                <li class="list-group-item">{{ $profile->name }}</li>
                <li class="list-group-item">{{ $profile->email }}</li>
                <li class="list-group-item">0{{ $profile->phonenumber }}</li>
                <li class="list-group-item">{{ $profile->location }}</li>
            </ul>
            <a href="/chatsystem">
                <button type="button" class="btn btn-primary">
                    <i class="far fa-comments fa-2x"></i>Contact/Chat
                </button>
            </a>
        </div>
    </div>

    <div class="card d-none d-md-inline col-sm-4">
        <div class="card-body">
            <h5 class="card-title">Algemene info</h5>
            <ul class=" list-group banner-info-text">
                <li class="list-group-item">{{ $profile->name }}</li>
                <li class="list-group-item">{{ $profile->email }}</li>
                <li class="list-group-item">0{{ $profile->phonenumber }}</li>
                <li class="list-group-item">{{ $profile->location }}</li>
            </ul>
        </div>
    </div>
</div>
