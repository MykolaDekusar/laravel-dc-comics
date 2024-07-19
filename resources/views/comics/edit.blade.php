@extends('layouts.main')
@section('header')
    <header>
        <div class="title">
            <h1>Modify Comic</h1>
        </div>
    </header>
@endsection
@section('main')
    <div class="container">
        <div class="row">
            <div class="form">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-content">
                        <label for="title">Title: </label>
                        <input type="text" name="title" value="{{ $comic->title }}">
                        @error('title')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-content">
                        <label for="description">Description: </label>
                        <input type="text" name="description" value="{{ $comic->description }}">
                        @error('description')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-content">
                        <label for="thumb">Image URL :</label>
                        <input type="text" name="thumb" value="{{ $comic->thumb }}">
                        @error('thumb')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-content">
                        <label for="series">Series: </label>
                        <input type="text" name="series" value="{{ $comic->series }}">
                        @error('series')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-content">
                        <label for="price">Price: </label>
                        <input type="text" name="price"value="{{ $comic->price }}">
                        @error('price')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-content">
                        <label for="sale_date">Sale Date:</label>
                        <input type="date" name="sale_date" value="{{ $comic->sale_date }}">
                        @error('sale_date')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-content">
                        <label for="type">Art type:</label>
                        <select name="type">
                            @if ($comic->type === 'comic book')
                                <option selected>comic book</option>
                                <option>graphic novel</option>
                            @endif
                            @if ($comic->type === 'graphic novel')
                                <option>comic book</option>
                                <option selected>graphic novel</option>
                            @endif
                        </select>
                    </div>
                    <div class="form-content">
                        <label for="artists">Artists: </label>
                        <textarea name="artists">{{ $comic->artists }}</textarea>
                        @error('artists')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-content">
                        <label for="writers">Writers: </label>
                        <textarea name="writers">{{ $comic->writers }}</textarea>
                        @error('writers')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="button">
                        <button>Edit comic</button>
                    </div>
                </form>
                <div class="button form-content">
                    <button onclick="window.location='{{ route('comics.index') }}'">Go Back</button>
                </div>
            </div>
        </div>
    </div>
@endsection
