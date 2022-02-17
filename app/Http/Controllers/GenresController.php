<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MoviesController;
use  App\Models\Movie;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function show($genre)
    {
        $movies = Movie::where('genre', $genre)->get();
        return view('movies', compact('movies'));
    }
}
