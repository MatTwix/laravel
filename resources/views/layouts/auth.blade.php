@extends('main')

@section('name')
    <h1>Страница регистрации</h1>
@endsection

@section('content')
    <form action="/">
        <input type="text">
        <input type="password">
        <input type="checkbox">Запомнить меня
        <button type="submit">Отправить</button>
    </form>
@endsection
