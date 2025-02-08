@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">My Favorites</h2>
    @if($favorites->isEmpty())
        <p>No favorite movies yet.</p>
    @else
    <div class="row">
    @foreach ($favorites as $fav)
    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
    <div class="card bg-light text-dark h-100">
        <img src="{{ $fav->poster }}" class="card-img-top" style="height: 150px; object-fit: cover;" alt="Movie Poster">
        <div class="card-body text-center p-2 d-flex flex-column justify-content-between">
            <h6 class="card-title mb-1">{{ Str::limit($fav->title, 20) }}</h6>
            <p class="card-text text-muted mb-0">Year: {{ $fav->year }}</p>
        </div>
    </div>
</div>

    @endforeach
    @endif
    <form action="/" method="GET">
    <div class="mt-4">
        <button class="btn btn-primary">Back to Search</button>
    </div>
     </form>
</div>
@endsection
