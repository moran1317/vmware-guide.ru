@extends('layouts.main')

@section('content')
    <h1>Регистрация</h1>

    <form method="post" action="{{ route('register') }}">
        @csrf

        <div>
            <label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Имя">
            </label>
            @error('name')
            <small>{{$message}}</small>
            @enderror
        </div>
        <div>
            <label>
                <input type="text" name="email" value="{{ old('email') }}" placeholder="email">
            </label>
            @error('email')
            <small>{{$message}}</small>
            @enderror
        </div>

        <div>
            <label>
                <input type="password" name="password" value="{{ old('password') }}" placeholder="password">
            </label>
            @error('password')
            <small>{{$message}}</small>
            @enderror
        </div>

        <button>Добавить</button>

    </form>

@endsection
