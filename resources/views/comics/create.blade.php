<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add new DcComic</title>
    @vite('resources/js/app.js')
</head>

<body>
    @include('comics.header')
    <div class="container">
        <div class="row">
            <div class="form">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="form-content">
                        <label for="title">Title: </label>
                        <input type="text" name="title" placeholder="Title">
                    </div>
                    <div class="form-content">
                        <label for="description">Description: </label>
                        <input type="text" name="description" placeholder="Description">
                    </div>
                    <div class="form-content">
                        <label for="thumb">Image URL :</label>
                        <input type="text" name="thumb" placeholder="Thumb">
                    </div>
                    <div class="form-content">
                        <label for="series">Series: </label>
                        <input type="text" name="series" placeholder="Series">
                    </div>
                    <div class="form-content">
                        <label for="price">Price: </label>
                        <input type="text" name="price" placeholder="Price">
                    </div>
                    <div class="form-content">
                        <label for="sale_date">Sale Date:</label>
                        <input type="date" name="sale_date" placeholder="Sale Date">
                    </div>
                    <div class="form-content">
                        <label for="type">Art type:</label>
                        <select name="type">
                            <option>comic book</option>
                            <option>graphic novel</option>
                        </select>
                    </div>
                    <div class="form-content">
                        <label for="artists">Artists: </label>
                        <textarea name="artists"></textarea>
                    </div>
                    <div class="form-content">
                        <label for="writers">Writers: </label>
                        <textarea name="writers"></textarea>
                    </div>
                    <div class="button">
                        <button>Create comic</button>
                    </div>
                </form>
                <div class="button">
                    <button onclick="window.location='{{ route('comics.index') }}'">Torna Indietro</button>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
