@extends('layout')

@section('content')

    <div class="email-container">
        <h1>Hallo Podium</h1>

        <span>{{ $mailcontent }}</span>

        <footer>Email verzonden met Muzer</footer>

    </div>

@endsection
