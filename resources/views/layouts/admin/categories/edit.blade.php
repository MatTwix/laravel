@extends('main')

@section('name')
    <h1>Редактировать категорию</h1>
@endsection

@section('content')
    <form method="post" action="{{ route('admin.categories.update', ['category' => $category->id])}}">
        @include('inc.message')
        @csrf
        @method('put')
        <div>
            <label for="name">Название категории</label>
            <input type="text" id="name" name="name" value="{{ $category->name }}">
            @error('name') <strong style="color: red">{{ $message }}</strong> @enderror
        </div>
        <button type="submit">Сохранить</button>
    </form>
@endsection
