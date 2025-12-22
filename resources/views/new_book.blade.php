<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nova knjiga</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="hero" style="background-image: url('{{ asset('images/bookshelf.png') }}');">
        <div class="overlay"></div>
        <div class="content">
            <div class="form">
                <h2>Informacije o knjizi</h2>
                <form action="/new-book" method="POST">
                    @csrf
                    <input type="text" name="title" placeholder="naslov"><br>
                    <input type="text" name="author" placeholder="autor"><br>
                    <input type="text" name="genre" placeholder="žanr"><br>
                    <input type="text" name="isbn" placeholder="ISBN"><br>
                    <input type="submit" name="submit" value="Sačuvajte knjigu" class="button">
                </form>
            </div>
        </div>
    </div>
</body>
</html>