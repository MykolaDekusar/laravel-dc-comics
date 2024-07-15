<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    @vite('resources/js/app.js')
</head>

<body>

    <div class="card-extended">
        <div class="card-title">
            <h2>{{ $comic->title }}</h2>
        </div>
        <div class="card-type">
            <p>Type: {{ $comic->type }}</p>
        </div>
        <img src="{{ $comic->thumb }}" alt="">
        <div class="card-price">
            <h3>Price: {{ $comic->price }}</h3>
        </div>
        <div class="card-description">
            <h4>{{ $comic->description }} <br>First sale date: {{ $comic->sale_date }}</h4>
        </div>
        <div class="card-styled">
            <h3>Styled by: {{ $comic->artists }}</h3>
        </div>
        <div class="card-written">
            <h3>Written by: {{ $comic->writers }}</h3>
        </div>

        <div class="content">
            <button onclick="window.location='{{ route('comics.index') }}'">Torna alla home</button>
            <button onclick="window.location='{{ route('comics.create') }}'">Crea nuovo comic</button>
            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Elimina Comic</button>
            </form>
        </div>
    </div>
</body>

</html>
