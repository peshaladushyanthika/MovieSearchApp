@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h4 class="text-center mb-4">Search for Movies</h4>
                    <form action="/search" method="GET">
                        <div class="input-group">
                            <input type="text" name="q" placeholder="Search movies..." class="form-control" required>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-search"></i> Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
