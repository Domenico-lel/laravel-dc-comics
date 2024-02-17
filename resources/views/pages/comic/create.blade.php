@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>new comic</h1>
    <form 
        action="#"
        method="POST"

    >
        @csrf
        @method('post')

        <label for="title">Title</label>
        <input type="text" name="title">
        <br>

        <label for="title">Title</label>
        <input type="text" name="title">
        <br>

        <label for="title">Title</label>
        <input type="text" name="title">
        <br>

        <input type="submit" value="CREATE">
    </form>
@endsection
