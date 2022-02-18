@extends('main')

@section('name')
    <h1>Источник #{{ $source->id }}</h1>
@endsection

@section('content')
    <strong>{{ $source->name }}</strong>
    @forelse ($news as $newsItem)
        <div>
            <hr>
            <strong><a href="{{ route('news.show', ['id' => $newsItem->id]) }}">{{ $newsItem->title }}</a></strong>
            <p> {{ $newsItem->description }} </p>
            <em> Aвтор: {{ $newsItem->author }} </em>
        </div>
    @empty
        <h1>Новости данного источника отсутствуют</h1>
    @endforelse
@endsection
