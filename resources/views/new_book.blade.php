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
                    <input type="text" name="title" placeholder="naslov" value="{{ old('title') }}"><br>
                    <input type="text" name="author" placeholder="autor" value="{{ old('author') }}"><br>
                    <input type="text" name="genre" placeholder="žanr" value="{{ old('genre') }}"><br>
                    <input type="text" name="isbn" placeholder="ISBN" value="{{ old('isbn') }}"><br>
                    <input type="submit" name="submit" value="Sačuvajte knjigu" class="button">
                </form>

                @if (session('success'))
                    <div class="success-message">
                        {{ session('success') }}
                    </div>
                @endif
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