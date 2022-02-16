@extends('layouts.app')
@section('title', $movie->title)
@section('content')
    <h1>{{ $movie->title }}</h1>
    <h2>{{ $movie->director }}</h2>
    <p>{{ $movie->storyline }}</p>
    <h3>{{ $movie->genre }}</h3>
    <h3>{{ $movie->year_recorded }}</h3>
@endsection
