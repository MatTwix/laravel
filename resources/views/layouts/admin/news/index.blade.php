@extends('main')

@section('name')
    <h1>Список новостей</h1>
@endsection

@section('content')
    @include('inc.message')
    <hr>
    <a href="{{ route('admin.news.create') }}">Добавить новость</a>
    @forelse ($newsList as $newsItem)
        <div>
            <hr>
            <strong><a href="{{ route('news.show', ['id' => $newsItem->id]) }}">{{ $newsItem->title}}</a></strong>
            <p>{{ $newsItem->description }}</p>
            <em>Автор: {{ $newsItem->author }}</em>
            <form method="post" action="{{ route('admin.news.destroy', ['news' => $newsItem->id])}}">
                @csrf
                @method('delete')
                <button type="submit">Удалить запись</button>
            </form>
            <a href="{{ route('admin.news.edit', ['news' => $newsItem->id]) }}">Редактировать</a>
        </div>
    @empty
        <h1>Новости отсутствуют</h1>
    @endforelse
@endsection
