@extends('layout')


@section('content')


    <div class="main-chat-container">

        <div class="row">

            <div class="col-sm-4 left-chat-container">
                <div class="upper-chat-preview-bar sticky-top">
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
                        <div class="remove-chat mx-auto">
                            <a href="#">
                                <i class="fas fa-trash-alt fa-2x"></i>
                            </a>
                        </div>
                    </div>
                @endfor
            </div>

            <div class="col-sm-8 right-chat-container d-none d-sm-block">
                <div class="upper-chat-bar sticky-top">
                    <ul class="nav">
                        <li class="nav-item">
                            <div class="profile-pic-chat">
                                <img src="https://picsum.photos/100/?random" alt="profile-picture" class="card-img chat-profile-pic">
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="chat-preview-info">
                                <h3>Naam 1</h3>
                                <p>Muzikantprofiel</p>
                            </div>
                        </li>
                        <div class="chat-action-buttons ml-auto">
                            <li class="nav-item action-button">
                                <a class="btn btn-primary" href="#" role="button">Boek</a>
                            </li>
                            <li class="nav-item action-button">
                                <a class="btn btn-primary" href="#" role="button">Koppel</a>
                            </li>
                        </div>
                    </ul>
                </div>
                <div class="chat-messages-area">
                    {{--@for($i=0; $i < 5; $i++)--}}
                        {{--<div class="card">--}}
                            {{--<div class="card-body">--}}
                                {{--<h5 class="card-title">Username</h5>--}}
                                {{--<p class="card-text">Hallo dit is mijn chatbericht naar jou toe. Veel plezier ermee!</p>--}}
                            {{--</div>--}}
                            {{--<div class="card-footer text-muted">--}}
                                {{--7-5-2018 - 13:59--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--@endfor--}}
                        <chat-messages :messages="messages"></chat-messages>
                </div>
                <div class="chat-input-area">
                    <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}">

                    </chat-form>
                    {{--<div class="input-group">--}}
                        {{--<input type="text" class="form-control" placeholder="Typ hier om een bericht te versturen..." aria-describedby="basic-addon2">--}}
                        {{--<div class="input-group-append">--}}
                            {{--<label class="btn btn-default btn-file">--}}
                                {{--<i class="fas fa-paperclip fa-2x"></i> <input type="file" style="display: none;">--}}
                            {{--</label>--}}
                            {{--<button class="btn btn-outline-secondary" type="button">--}}
                                {{--<i class="fas fa-envelope fa-2x"></i>--}}
                            {{--</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>

        </div>

    </div>

@endsection