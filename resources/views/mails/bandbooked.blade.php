@extends('layout')

@section('content')

    <div class="email-container">
        <h1>Hallo {{ $profile }}</h1>



        <h3>Dit is een mailtje van {{ $mailadress }}</h3>

        <span>{{ $mailcontent }}</span>

        <footer>Email verzonden met Muzer</footer>

    </div>

@endsection