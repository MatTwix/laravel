@extends('main')

@section('name')
    <h1>Редактировать новость</h1>
@endsection

@section('content')
    <form method="post" action="{{ route('admin.news.update', ['news' => $news->id])}}">
        @include('inc.message')
        @csrf
        @method('put')
        <div>
            <label for="source_id">Источник</label>
            <select id="source_id" name="source_id">
                @foreach($sources as $source)
                    <option @if($news->source_id === $source->id) selected @endif value="{{ $source->id }}">{{ $source->name }}</option>
                @endforeach
            </select>
            @error('source_id') <strong style="color: red">{{ $message }}</strong> @enderror
        </div>
        <div>
            <label for="category_id">Категория</label>
            <select id="category_id" name="category_id">
                @foreach($categories as $category)
                    <option @if($news->category_id === $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id') <strong style="color: red">{{ $message }}</strong> @enderror
        </div>
        <div>
            <label for="title">Заголовок</label>
            <input type="text" id="title" name="title" value="{{ $news->title }}">
            @error('title') <strong style="color: red">{{ $message }}</strong> @enderror
        </div>
        <div>
            <label for="author">Автор</label>
            <input type="text" id="author" name="author" value="{{ $news->author }}">
            @error('author') <strong style="color: red">{{ $message }}</strong> @enderror
        </div>
        <div>
            <label for="status">Статус</label>
            <select name="status" id="status">
                <option @if($news->status === 'DRAFT') selected @endif>DRAFT</option>
                <option @if($news->status === 'ACTIVE') selected @endif>ACTIVE</option>
                <option @if($news->status === 'BLOCKED') selected @endif>BLOCKED</option>
            </select>
            @error('status') <strong style="color: red">{{ $message }}</strong> @enderror
        </div>
        <div>
            <label for="description"></label>
            <textarea name="description" id="description">{!! $news->description !!}</textarea>
            @error('description') <strong style="color: red">{{ $message }}</strong> @enderror
        </div>
        <button type="submit">Сохранить</button>
    </form>
@endsection
