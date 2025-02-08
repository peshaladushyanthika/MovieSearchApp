@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h2 class="mb-4">Search Results</h2>

    @if(isset($movies['Search']))
        <div class="row">
            @foreach ($movies['Search'] as $movie)
                <div class="col-md-3 mb-4">
                    <div class="card bg-light text-dark h-100">
                        <img src="{{ $movie['Poster'] }}" class="card-img-top" alt="Movie Poster" style="height: 150px; object-fit: cover;">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title">{{ $movie['Title'] }}</h5>
                            <p class="card-text">Year: {{ $movie['Year'] }}</p>
                            <a href="{{ route('movie.show', ['id' => $movie['imdbID']]) }}" class="btn btn-primary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>No movies found. Try another search.</p>
    @endif
    <form action="/" method="GET">
    <button type="submit" class="btn btn-primary">Back</button>
    </form>
</div>
@endsection
