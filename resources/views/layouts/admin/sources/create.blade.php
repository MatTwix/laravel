@extends('main')

@section('name')
    <h1>Добавить источник</h1>
@endsection

@section('content')
    <form method="post" action="{{ route('admin.sources.store')}}">
        @include('inc.message')
        @csrf
        <div>
            <label for="name">Название источника</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
        </div>
        <button type="submit">Сохранить</button>
    </form>
@endsection
