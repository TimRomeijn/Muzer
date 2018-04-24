{{--<div class="card">--}}
    {{--<img class="card-img-top" src="https://picsum.photos/300/300" alt="Profile Image">--}}
    {{--<div class="card-body">--}}
        {{--<h5 class="card-title">ProfielNaam</h5>--}}
        {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
        {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
    {{--</div>--}}
{{--</div>--}}

<div class="card hovercard">
    <div class="card-background">
        <img class="card-bkimg" alt="" src="https://picsum.photos/300/300">
        <!-- http://lorempixel.com/850/280/people/9/ -->
    </div>
    <div class="useravatar">
        <img alt="" src="https://picsum.photos/300/300">
    </div>
    <div class="card-body">
        <h5 class="card-title">ProfielNaam</h5>
        <ul class="card-text">
            <li>John Doe</li>
            <li>john@email.com</li>
            <li>0698765432</li>
            <li>Groningen, groningen</li>
        </ul>
        <a href="#" class="btn btn-primary">Contact</a>
    </div>
</div>

<ul class="nav nav-tabs nav-fill">
    @foreach($menuItems as $item)
        <li class="nav-item tprofile">
            <a class="nav-link " href="#">{{ $item }}</a>
        </li>
    @endforeach
</ul>