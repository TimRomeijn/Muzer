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
            <h1>Beste {{ $name }},</h1>
        </div>

        <div class="reason">
            <p>{{ $mailcontent }}</p>
        </div>

        <div class="socials">
            Meer informatie over ons podium is te vinden op ons Muzer profiel: <a href="http://localhost:8000/profiles/stageprofile/{{ $stage }}">{{ $profile }}</a>
        </div>

        <div class="closing">
            Groeten en als er nog vragen zijn dan horen wij dat natuurlijk graag!,
            <br>
            {{ $profile }}
        </div>

        <footer class="mail-footer">
            <i>Email verzonden met Muzer</i>
        </footer>

    </div>

</body>
</html>