@extends('main')

@section('name')
    <h1>Добавить категорию</h1>
@endsection

@section('content')
    <form method="post" action="{{ route('admin.categories.store')}}">
        @include('inc.message')
        @csrf
        <div>
            <label for="name">Название категории</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
        </div>
        <button type="submit">Сохранить</button>
    </form>
@endsection
