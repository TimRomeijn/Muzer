@auth
    <div class="profile-sidebar">
        <!-- SIDEBAR USERPIC -->
        <div class="profile-userpic">
            <img src="https://picsum.photos/100/100" class="img-responsive" alt="">
        </div>
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">
                {{ Auth::user()->username }}
            </div>
        </div>
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        <div class="dropdown profile-userbuttons">
            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mijn accounts
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach($profileAccounts as $pfa)
                    <a class="dropdown-item" href="#">{{ $pfa->name }}</a>
                @endforeach
            </div>
        </div>

        <div class="card profile-progression">
            <div class="card-header text-center">
                Totale Profielenprogressie
            </div>
            <div class="card-body">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
            </div>
        </div>
        <!-- END SIDEBAR BUTTONS -->
    </div>
@endauth
@guest
    <p>Log in om uw accountinformatie te zien.</p>
@endguest