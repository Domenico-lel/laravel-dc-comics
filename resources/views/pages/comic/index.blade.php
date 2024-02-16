@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>comics:</h1>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{route('comic.show', $comic -> id)}}">
                    {{ $comic -> title }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
