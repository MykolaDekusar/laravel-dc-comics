@extends('layouts.main')
@section('header')
    <header>
        <div class="title">
            <h1>Create Comic</h1>
        </div>
    </header>
@endsection
@section('main')
    <div class="container">
        <div class="row">
            <div class="form">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="form-content">
                        <label for="title">Title: </label>
                        <input type="text" name="title" placeholder="Title">
                        @error('title')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-content">
                        <label for="description">Description: </label>
                        <input type="text" name="description" placeholder="Description">
                        @error('description')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-content">
                        <label for="thumb">Image URL :</label>
                        <input type="text" name="thumb" placeholder="Thumb">
                        @error('thumb')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-content">
                        <label for="series">Series: </label>
                        <input type="text" name="series" placeholder="Series">
                        @error('series')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-content">
                        <label for="price">Price: </label>
                        <input type="text" name="price" placeholder="Price">
                        @error('price')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-content">
                        <label for="sale_date">Sale Date:</label>
                        <input type="date" name="sale_date" placeholder="Sale Date">
                        @error('sale_date')
                            <p class="error">{{ $message }}</p>
                        @enderror
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
                        @error('artists')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-content">
                        <label for="writers">Writers: </label>
                        <textarea name="writers"></textarea>
                        @error('writers')
                            <p class="error">{{ $message }}</p>
                        @enderror
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
@endsection
@include('utils.footer')
