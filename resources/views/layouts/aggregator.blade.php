@extends('main')

@section('name')
    <h1>Агрегатор новостей</h1>
@endsection

@section('content')
    <form method="post" action="{{ route('aggregator.store') }}">
        @csrf
        <input type="text" placeholder="Имя пользователя" name="name" value="{{ old('name') }}">
        <br>
        <input type="tel" placeholder="Номер телефона" name="tel" value="{{ old('tel') }}">
        <br>
        <input type="email" placeholder="Email-адрес" name="email" value="{{ old('email') }}">
        <br>
        <input type="text" placeholder="Желаемая информация" name="info" value="{{ old('info') }}">
        <br>
        <button type="submit">Отправить запрос</button>
    </form>
@endsection
