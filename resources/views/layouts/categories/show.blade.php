@extends('main')

@section('name')
    <h1>Категория #{{ $categoryItem[0]->id }}</h1>
@endsection

@section('content')
    <strong>{{ $categoryItem[0]->name }}</strong>
    <hr>
    @forelse ($news as $newsItem)
        <div>
            <strong><a href="{{ route('news.show', ['id' => $newsItem->id]) }}">{{ $newsItem->title }}</a></strong>
            <p> {{ $newsItem->description }} </p>
            <em> Aвтор: {{ $newsItem->author }} </em>
            <hr>
        </div>
    @empty
        <h1>Новости данной категории отсутствуют</h1>
    @endforelse
@endsection
