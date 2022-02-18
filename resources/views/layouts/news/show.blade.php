@extends('main')

@section('name')
    <h1>Новость #{{ $news->id }}</h1>
@endsection

@section('content')
    <div>
        <strong>{{ $news->title }}</strong>
        <p>{{ $news->description }}</p>
        <em>Автор: {{ $news->author }}</em>
        <br>
        <em>Источник: {{ $news->source_name }}</em>
        <br>
        <em>Категория: {{ $news->category_name }}</em>
    </div>
@endsection
