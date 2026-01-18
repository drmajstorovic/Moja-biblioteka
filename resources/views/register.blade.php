<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registracija</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="hero" style="background-image: url('{{ asset('images/bookshelf.png') }}');">
        <div class="overlay"></div>
        <div class="content">
            <div id="register-form" class="form">
                <h2>Registrujte se</h2>
                <form action="/register" method="POST">
                    @csrf
                    <h4>Korisničko ime</h4>
                    <input type="text" name="name" placeholder="(username)"><br><br>
                    <h4>E-mail</h4>
                    <input type="email" name="email" placeholder="(email adresa)"><br><br>
                    <h4>Lozinka</h4>
                    <input type="password" name="password" placeholder="(password)" required><br><br>
                    <h4>Ponovite lozinku</h4>
                    <input type="password" name="password_confirmation" placeholder="(password)" required><br><br>
                    <input type="submit" name="submit" value="Registrujte se" class="button">
                </form>
                @if ($errors->any())
                    <div class="errors">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>