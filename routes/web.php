<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/create', [MoviesController::class, 'create']);
Route::get('/movies', [MoviesController::class, 'index']);
Route::get('/movies/{id}', [MoviesController::class, 'show']);
Route::post('/create', [MoviesController::class, 'store']);
Route::post('/comment/add', [CommentsController::class, 'store']);
Route::get("/genres/{genre}", [GenresController::class, 'show']);
