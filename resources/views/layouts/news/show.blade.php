@extends('main')

@section('name')
    <h1>Новость #{{ $newsItem[0]->id }}</h1>
@endsection

@section('content')
    <div>
        <strong>{{ $newsItem[0]->title }}</strong>
        <p>{{ $newsItem[0]->description }}</p>
        <em>Автор: {{ $newsItem[0]->author }}</em>
        <hr>
    </div>
@endsection
