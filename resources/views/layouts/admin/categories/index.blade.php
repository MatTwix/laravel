@extends('main')

@section('name')
    <h1>Все категории:</h1>
@endsection

@section('content')
    @include('inc.message')
    <hr>
    <a href="{{ route('admin.categories.create') }}">Добавить категорию</a>
    @forelse ($categories as $categoryItem)
            <hr>
            <strong>
                <a href="{{ route('categories.show', ['category' => $categoryItem->id]) }}">
                    {{ $categoryItem->name }}
                </a>
            </strong>
            <br>
            <form method="post" action="{{ route('admin.categories.destroy', ['category' => $categoryItem->id])}}">
                @csrf
                @method('delete')
                <button type="submit">Удалить запись</button>
            </form>
            <a href="{{ route('admin.categories.edit', ['category' => $categoryItem->id]) }}">Редактировать</a>
            <br>
        </div>
    @empty
        <h1>Категории отсутствуют</h1>
    @endforelse
@endsection
