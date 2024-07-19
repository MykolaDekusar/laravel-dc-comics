@extends('layouts.main')
@section('header')
    <header>
        <div class="title">
            <h1>Dc Comics</h1>
        </div>
    </header>
@endsection
@section('main')
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
@endsection
