<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Favorite;


class MovieController extends Controller
{
    //index view when running app
    public function index() {
        return view('index');
    }
    //search movies
    public function search(Request $request) {
        $response = Http::get(env('MOVIE_API_URL'), [
            'apikey' => env('MOVIE_API_KEY'),
            's' => $request->query('q'),
        ]);
        return view('search', ['movies' => $response->json()]);
    }
    //show details of movie
    public function show($id) {
        $response = Http::get(env('MOVIE_API_URL'), [
            'apikey' => env('MOVIE_API_KEY'),
            'i' => $id,
        ]);
        return view('details', ['movie' => $response->json()]);
    }
    //add favorite movies to database
    public function addFavorite(Request $request) {
        $exists = Favorite::where('user_id', auth()->id())
                      ->where('movie_id', $request->movie_id)
                      ->exists();
    if ($exists) {
        return redirect('/favorites')->with('error', 'Movie is already in your favorites.');
    }
        Favorite::create([
            'user_id' => auth()->id(),
            'movie_id' => $request->movie_id,
            'title' => $request->title,
            'year' => $request->year,
            'poster' => $request->poster,
        ]);
        return redirect('/favorites')->with('success', 'Movie added to favorites!');
    }
    public function favorites() {
        $favorites = Favorite::where('user_id', auth()->id())->get();
        return view('favorites', compact('favorites'));
    }
}
