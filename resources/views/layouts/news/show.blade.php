@extends('main')

@section('name')
    <h1>Новость #{{ $newsItem['id'] }}</h1>
@endsection

@section('content')
    <div>
        <strong>{{ $newsItem['title'] }}</strong>
        <p>{{ $newsItem['description'] }}</p>
        <em>Автор: {{ $newsItem['author'] }}</em>
        <hr>
    </div>
@endsection
