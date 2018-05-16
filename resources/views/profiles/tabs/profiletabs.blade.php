<ul class="nav nav-tabs nav-fill">
    @foreach($tabs as $item)
        <li class="nav-item current-profile-tab">
            <a class="nav-link" href="/profiles/{{ $currentProfile }}/{{ $profile->id }}/{{ $item }}">{{ $item }}</a>
        </li>
    @endforeach
</ul>