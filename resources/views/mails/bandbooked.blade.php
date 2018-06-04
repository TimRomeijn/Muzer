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
            <h1>Beste band {{ $name }},</h1>
        </div>

        <div class="reason">
            <p>{{ $mailcontent }}</p>
        </div>

        <div class="closing">
            Met vriendelijke groet,
            <br>
            {{ $profile }}
        </div>

        <footer class="mail-footer">
            <i>Email verzonden met Muzer</i>
        </footer>

    </div>

</body>
</html>