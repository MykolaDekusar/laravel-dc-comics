<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DcCards</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="card">
                    <h2>{{ $comic->title }}</h2>
                    <img src="{{ $comic->thumb }}" alt="">
                    <div class="content">
                        <h3>Price: {{ $comic->price }}</h3>
                        <button onclick="window.location='{{ route('comics.show', $comic->id) }}'">About</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
