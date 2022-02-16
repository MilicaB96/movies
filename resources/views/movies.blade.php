@extends('layouts.app')
@section('title', 'Movies')
@section('content')
    @foreach ($movies as $movie)
        <h1><a style="text-decoration: none; color:black" href="movies/{{ $movie->id }}">{{ $movie->title }}</a></h1>
        <p>{{ $movie->storyline }}</p>
        <br>
    @endforeach
@endsection
