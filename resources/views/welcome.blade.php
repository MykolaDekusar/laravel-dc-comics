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
    <h1>
        Template
    </h1>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="card">
                    <h2>{{ $comic->title }}</h2>
                    <img src="{{ $comic->thumb }}" alt="">
                    <h3>{{ $comic->price }}</h3>

                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
