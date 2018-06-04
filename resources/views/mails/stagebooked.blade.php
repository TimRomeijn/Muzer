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

            <h1>Beste poppodium {{ $name}}</h1>
        </div>

        <div class="introduction">
            <h3>Wij zijn  {{ $profile }}</h3>
        </div>

        <div class="genre">

        </div>

        <div class="experience">

        </div>

        <div class="reason">
            <p>{{ $mailcontent }}</p>
        </div>

        <div class="planning">

        </div>

        <div class="socials">
            Contact ons op: {{ $phonenumber }}.
        </div>

        <div class="closing">

        </div>

        <footer class="mail-footer">
            <i>Email verzonden met Muzer</i>
        </footer>

    </div>

</body>
</html>
