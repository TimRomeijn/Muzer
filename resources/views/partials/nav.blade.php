<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <a class="navbar-brand" href="/">Muzer</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Zoek..." aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Zoek</button>
        </form>


        <div class="right-nav-items ml-auto">
            <div class="advanced-search-nav-button ">
                <a href="/advancedsearch">
                    <button type="button" class="btn btn-primary">Geavanceerd zoeken</button>
                </a>
            </div>

            <div class="select-profile-type-button ">
                <a href="/selectprofiletype">
                    <button type="button" class="btn btn-primary">Maak een profiel</button>
                </a>
            </div>

            @guest

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registreer</a>
                    </li>

                    @else
                    <li class="nav-link">
                        <a href="#">
                            <i class="fas fa-user fa-3x"></i>
                            <p>{{ Auth::user()->username }}</p>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="btn btn-primary" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>

            @endguest
        </div>

    </div>
</nav>