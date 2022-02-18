@extends('main')

@section('name')
    <h1>Список источников</h1>
@endsection

@section('content')
    @forelse ($sources as $source)
        <strong>
            <a href="{{ route('sources.show', ['source' => $source->id]) }}">
                {{ $source->name }}
            </a>
        </strong>
        <br>
    @empty
        <h1>Источники отсутствуют</h1>
    @endforelse
@endsection
