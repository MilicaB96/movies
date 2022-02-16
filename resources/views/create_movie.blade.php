@extends('layouts.app')
@section('title', 'Create a movie')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/create">
        @csrf
        <input type="text" name="title" placeholder="title">
        <br>
        <input type="text" name="genre" placeholder="genre">
        <br>
        <input type="text" name="director" placeholder="director">
        <br>
        <input type="number" name="year_recorded" placeholder="year released">
        <br>
        <textarea name="storyline" placeholder="Storyline..." cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Submit!</button>
    </form>
@endsection
