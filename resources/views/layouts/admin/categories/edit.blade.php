@extends('main')

@section('name')
    <h1>Редактировать категорию</h1>
@endsection

@section('content')
    <form method="post" action="{{ route('admin.categories.update', ['category' => $category->id])}}">
        @include('inc.message')
        @csrf
        <div>
            <label for="name">Название категории</label>
            <input type="text" id="name" name="name" value="{{ $category->name }}">
        </div>
        <button type="submit">Сохранить</button>
    </form>
@endsection
