@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
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

    <h1>new comic</h1>
    <form 
        action="{{route('comic.store')}}"
        method="POST"
    >

        @csrf
        @method('POST')

        <label for="title">title</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="description">description</label>
        <input type="text" name="description" id="description">
        <br>
        <label for="price">price</label>
        <input type="number" name="price" id="price">
        <br>
        <input type="submit" value="CREATE">

    </form>
@endsection
