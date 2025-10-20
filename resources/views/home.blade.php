<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moja biblioteka</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="hero" style="background-image: url('{{ asset('images/bookshelf.png') }}');">
        <div class="overlay"></div>
        <div class="content">
            <div class="form">
                <h2>Moja biblioteka</h2>
                <form action="/login">
                    <h3>Prijava</h3>
                    <input type="text" name="username" placeholder="(username)"><br>
                    <input type="password" name="password" placeholder="(password)"><br>
                    <input type="submit" name="submit" value="Prijavite se" id="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>