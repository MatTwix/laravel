@extends('main')

@section('name')
    <h1>Добавить новость</h1>
@endsection

@section('content')
    <form method="post" action="{{ route('admin.news.store')}}">
        @include('inc.message')
        @csrf
        <div>
            <label for="source_id">Источник</label>
            <select id="source_id" name="source_id">
                @foreach($sources as $source)
                    <option value="{{ $source->id }}">{{ $source->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="category_id">Категория</label>
            <select id="category_id" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="title">Заголовок</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div>
            <label for="author">Автор</label>
            <input type="text" id="author" name="author" value="{{ old('title') }}">
        </div>
        <div>
            <label for="status">Статус</label>
            <select name="status" id="status">
                <option @if(old('status') === 'DRAFT') selected @endif>DRAFT</option>
                <option @if(old('status') === 'ACTIVE') selected @endif>ACTIVE</option>
                <option @if(old('status') === 'BLOCKED') selected @endif>BLOCKED</option>
            </select>
        </div>
        <div>
            <label for="description"></label>
            <textarea name="description" id="description">{!! old('description') !!}</textarea>
        </div>
        <button type="submit">Сохранить</button>
    </form>
@endsection
