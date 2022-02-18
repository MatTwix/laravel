@extends('main')

@section('name')
    <h1>Список источников</h1>
@endsection

@section('content')
    @include('inc.message')
    <hr>
    <a href="{{ route('admin.sources.create') }}">Добавить источник</a>
    @forelse ($sources as $source)
        <hr>
        <strong>
            <a href="{{ route('sources.show', ['source' => $source->id]) }}">
                {{ $source->name }}
            </a>
        </strong>
        <form method="post" action="{{ route('admin.sources.destroy', ['source' => $source->id])}}">
            @csrf
            @method('delete')
            <button type="submit">Удалить запись</button>
        </form>
        <a href="{{ route('admin.sources.edit', ['source' => $source->id]) }}">Редактировать</a>
        <br>
    @empty
        <h1>Источники отсутствуют</h1>
    @endforelse
@endsection
