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
    @include('utils.header')
    <main>
        <div class="container">
            <div class="row">
                <button class="home-create" onclick="window.location='{{ route('comics.create') }}'">Crea nuovo
                    fumetto</button>
                @foreach ($comics as $comic)
                    <div class="card">
                        <h2>{{ $comic->title }}</h2>
                        <div class="img-settings">
                            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        </div>
                        <div class="content">
                            <button onclick="window.location='{{ route('comics.show', $comic->id) }}'">Espandi</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    @include('utils.footer')
</body>

</html>
