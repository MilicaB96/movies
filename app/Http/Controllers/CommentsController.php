<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(StoreCommentRequest $request)
    {
        $data = $request->validated();
        $movie_id = $request->get('movie_id');
        $movie = Movie::findOrFail($movie_id);
        $movie->comments()->create($data);
        return redirect("/movies/$movie_id");
    }
}
