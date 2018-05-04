@extends('layout')


@section('content')


    <div class="main-chat-container">

        <div class="row">
            <div class="col-sm-4 left-chat-container">
                <div class="upper-chat-preview-bar">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <h2>Chats</h2>
                        </li>
                    </ul>
                </div>
                @for ($i = 0; $i < 7; $i++)
                    <div class="chat-preview-box">
                        <div class="preview-profile-pic">
                            <img src="https://picsum.photos/100/?random" alt="profile-picture" class="card-img chat-preview-profile-pic">
                        </div>
                        <div class="chat-preview-info">
                            <h3>Naam 1</h3>
                            <p>Muzikantprofiel</p>
                            <a href="#" class="btn btn-primary open-chat">Chat</a>
                        </div>
                        <div class="remove-chat">
                            <a href="#">
                                <i class="fas fa-trash-alt fa-lg"></i>
                            </a>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="col-sm-8 right-chat-container d-none d-sm-block">
                <div class="upper-chat-bar">
                    <ul class="nav">
                        <li class="nav-item">
                            <div class="preview-profile-pic">
                                <img src="https://picsum.photos/100/?random" alt="profile-picture" class="card-img chat-preview-profile-pic">
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="chat-preview-info">
                                <h3>Naam 1</h3>
                                <p>Muzikantprofiel</p>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary" href="#" role="button">Boek</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary" href="#" role="button">Koppel</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

@endsection