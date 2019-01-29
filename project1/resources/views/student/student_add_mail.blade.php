<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
                content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>StudentMail</title>
    </head>

    <body>
        <div>
            <p>Dear {{$name}},</p>
            <p>Your login credentials for the PDC system are mentioned below.</p>
            <p>Username: {{$username}}</p>
            <p>Password: {{$password}}</p>
            <b></b>
            <p>Thank You.</p>
        </div>
    </body>
</html>
