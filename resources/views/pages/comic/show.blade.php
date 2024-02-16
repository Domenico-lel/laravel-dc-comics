@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>comics: {{$comic -> title }}</h1>
@endsection
