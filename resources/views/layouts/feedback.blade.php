@extends('main')

@section('name')
    <h1>Обратная связь</h1>
@endsection

@section('content')
    <form method="post" action="{{ route('feedback.store') }}">
        @csrf
        <input type="text" placeholder="Имя пользователя" name="name" value="{{ old('name') }}">
        <br>
        <textarea placeholder="Отзыв по работе проекта" name="feedback">{{ old('feedback') }}</textarea>
        <br>
        <button type="submit">Отправить отзыв</button>
    </form>
@endsection
