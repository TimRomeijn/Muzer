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
            <h5 class="card-title">{{ $currentProfile }}</h5>
            <ul class="card-text d-md-none d-sm-block">
                <li>John Doe</li>
                <li>john@email.com</li>
                <li>0698765432</li>
                <li>Groningen, groningen</li>
            </ul>
            <a href="chatsystem">
                <button type="button" class="btn btn-primary">
                    <i class="far fa-comments fa-2x"></i>Contact/Chat
                </button>
            </a>
        </div>
    </div>

    <div class="card d-none d-md-inline col-sm-4">
        <div class="card-body">
            <h5 class="card-title">Algemene info</h5>
            <ul class="banner-info-text">
                <li>John Doe</li>
                <li>john@email.com</li>
                <li>0698765432</li>
                <li>Groningen, groningen</li>
            </ul>
        </div>
    </div>
</div>
