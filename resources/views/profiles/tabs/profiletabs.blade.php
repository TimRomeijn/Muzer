<ul class="nav nav-tabs nav-fill">
    @foreach($tabs as $item)
        <li class="nav-item tprofile">
            <a class="nav-link " href="/profiles/{{ $currentProfile }}/{{ $item }}">{{ $item }}</a>
        </li>
    @endforeach
</ul>