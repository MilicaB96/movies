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
        </div>
        <h3>{{ $movie->genre }}</h3>
        <h3>{{ $movie->year_recorded }}</h3>
    </div>

@endsection
