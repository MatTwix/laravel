@extends('main')

@section('name')
    <h1>Страница создания новости</h1>
@endsection

@section('content')
    <form action="/">
        <h2>Заголовок</h2>
        <input type="text">
        <h2>Описание</h2>
        <textarea name="" id="" cols="30" rows="10"></textarea>
        <h2>Краткое описание</h2>
        <input type="text">
        <br>
        <button type="submit">Создать новость</button>
    </form>
@endsection
