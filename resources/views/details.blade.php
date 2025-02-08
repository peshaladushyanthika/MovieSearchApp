@extends('layouts.app')

@section('content')
<div class="container">
    <img src="{{ $movie['Poster'] ?? asset('images/no-image.png') }}" width="200">
    <h1>{{ $movie['Title'] ?? 'Unknown Title' }} ({{ $movie['Year'] ?? 'N/A' }})</h1>
    <p>{{ $movie['Plot'] ?? 'No plot available.' }}</p>

    @auth
    <form action="/favorite" method="POST">
        @csrf
        <input type="hidden" name="movie_id" value="{{ $movie['imdbID'] }}">
        <input type="hidden" name="title" value="{{ $movie['Title'] }}">
        <input type="hidden" name="year" value="{{ $movie['Year'] }}">
        <input type="hidden" name="poster" value="{{ $movie['Poster'] }}">
        <button type="submit" class="btn btn-primary">Add to Favorites</button>
    </form>
     @else
        <p><a href="{{ route('login') }}">Login</a> to add to favorites.</p>
    @endauth
</div>
@endsection
