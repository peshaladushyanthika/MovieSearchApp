<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [MovieController::class, 'index']);
Route::get('/search', [MovieController::class, 'search']);
Route::get('/movie/{id}', [MovieController::class, 'show'])->name('movie.show');
Route::post('/favorite', [MovieController::class, 'addFavorite'])->middleware('auth');
Route::get('/favorites', [MovieController::class, 'favorites'])->middleware('auth');