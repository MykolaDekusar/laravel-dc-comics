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
        <h2>{{ $comic->title }}</h2>
        <p>Type: {{ $comic->type }}</p>
        <img src="{{ $comic->thumb }}" alt="">
        <h3>Price: {{ $comic->price }}</h3>
        <h4>{{ $comic->description }} <br>First sale date: {{ $comic->sale_date }}</h4>
        <h3>Styled by: {{ $comic->artists }}</h3>
        <h3>Written by: {{ $comic->writers }}</h3>
        <button onclick="window.location='{{ route('comics.index') }}'">Torna alla home</button>
    </div>
</body>

</html>
