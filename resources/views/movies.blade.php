@extends('layouts.app')
@section('title', 'Movies')
@section('content')
    <div class="d-flex flex-shrink-0">
        <div class="d-flex flex-column p-2 bg-light" style="width: 280px;">
            <ul class="nav nav-pills flex-column mb-auto">
                @foreach ($shareddata as $data)
                    <li class="nav-item">
                        <a href="/moviee/{{ $data->id }}" class="nav-link link-dark" aria-current="page">
                            {{ $data->title }}
                        </a>
                @endforeach
                </li>
            </ul>
        </div>
        <div class="p-3">
            @foreach ($movies as $movie)
                <h1><a style="text-decoration: none; color:black"
                        href="movies/{{ $movie->id }}">{{ $movie->title }}</a>
                </h1>
                <p>{{ $movie->storyline }}</p>
                <br>
            @endforeach
        </div>
    </div>
@endsection
