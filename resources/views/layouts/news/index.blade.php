@extends('main')

@section('content')
    <h1>Список новостей</h1>
    <br>
    @forelse ($news as $newsItem)
        <div>
            <strong><a href="{{ route('news.show', ['id' => $newsItem['id']]) }}">{{ $newsItem['title'] }}</a></strong>
            <p>{{ $newsItem['description'] }}</p>
            <em>Автор: {{ $newsItem['author'] }}</em>
            <hr>
        </div>
    @empty
        <h1>Новости отсутствуют</h1>
    @endforelse
@endsection
