<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use Illuminate\Http\Request;
use  App\Models\Movie;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies', compact('movies'));
    }
    public function show($id)
    {
        $movie = Movie::findorFail($id);
        return view('movie', compact('movie'));
    }
    public function create()
    {
        return view('create_movie');
    }
    public function store(StoreMovieRequest $request)
    {

        $data = $request->validated();
        $movie = Movie::create($data);
        return redirect("/movies/$movie->id");
    }
}
