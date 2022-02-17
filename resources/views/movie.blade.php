@extends('layouts.app')
@section('title', $movie->title)
@section('content')
    <div>
        <h1>{{ $movie->title }}</h1>
        <h2>{{ $movie->director }}</h2>
        <p>{{ $movie->storyline }}</p>
        <div>
            <h4>Comments:</h4>
            @foreach ($comments as $comment)
                <div class="border border-dark">
                    <p>{{ $comment->content }}</p>
                    <p>{{ $comment->created_at }}</p>
                </div>
                <br>
            @endforeach
            <form method="POST" action="/comment/add">
                @csrf
                <input type="hidden" name="movie_id" value="{{ $movie->id }}">
                <textarea name="content" cols="80" rows="5"></textarea>
                <br>
                @error('content')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror

                <button type="submit">Post!</button>
            </form>
        </div>
        <br>
        <h3><a style="text-decoration: none; color:black" href="/genres/{{ $movie->genre }}">{{ $movie->genre }} </a>
        </h3>
        <h3>{{ $movie->year_recorded }}</h3>
    </div>

@endsection
