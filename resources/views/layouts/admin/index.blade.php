@extends('main')

@section('name')
    <h1>Админка</h1>
@endsection

@section('content')
    <a href="{{ route('admin.news.index') }}">Новости</a>
    <a href="{{ route('admin.categories.index') }}">Категории</a>
    <a href="{{ route('admin.sources.index') }}">Источники</a>
@endsection
