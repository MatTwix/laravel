@extends('main')

@section('content')
    <p>Все категории:</p>

    @forelse ($categories as $categoryItem)
        <strong>
            <a href="{{ route('categories.show', ['id' => $categoryItem['id']]) }}">
                {{ $categoryItem['name'] }}
            </a>
        </strong>
        <br>
    @empty
        <h1>Категории отсутствуют</h1>
    @endforelse
@endsection
