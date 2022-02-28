@extends('main')

@section('name')
    <h1>Редактировать источник</h1>
@endsection

@section('content')
    <form method="post" action="{{ route('admin.sources.update', ['source' => $source->id])}}">
        @include('inc.message')
        @csrf
        @method('put')
        <div>
            <label for="name">Название источника</label>
            <input type="text" id="name" name="name" value="{{ $source->name }}">
            @error('name') <strong style="color: red">{{ $message }}</strong> @enderror
        </div>
        <button type="submit">Сохранить</button>
    </form>
@endsection
