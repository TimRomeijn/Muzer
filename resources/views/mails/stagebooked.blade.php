<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testmailtje</title>
</head>
<body>

    <div class="email-container">

        <div class="salutation">

            <h1>Beste {{ $name }}</h1>
        </div>

        <div class="reason">
            <b>
                <p>{{ $mailcontent }}</p>
            </b>
        </div>

        <div class="introduction">
            <p>Wij zijn {{ $profile }}</p>
        </div>



        <div class="genre">
            <p>We maken muziek in de stijl van: {{ $genre }}</p>
        </div>

        <div class="experience">
            <p></p>
        </div>

        <div class="planning">
            <p></p>
        </div>

        <div class="socials">
           Bandfoto's, riders en andere belangrijke informatie is te vinden op ons Muzer profiel: <a href="http://localhost:8000/profiles/bandprofile/{{ $band }}">{{ $profile }}</a>
        </div>

        <div class="closing">
            Groeten en als er nog vragen zijn dan horen wij dat natuurlijk graag!,
                <ul>
                    @foreach($bandmembers as $member)
                        <li>
                            {{$member->name}}
                        </li>
                    @endforeach
                </ul>
            Bandnaam: {{ $profile }}
            <br>
            Telefoonnummer: {{ $phonenumber }}
        </div>

        <footer class="mail-footer">
            <i>Email verzonden met Muzer</i>
        </footer>

    </div>

</body>
</html>
