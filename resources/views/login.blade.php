@extends('layouts.main')

@section('content')
    <h1>Log in</h1>
    <form method="post">
        @csrf

        <div>
            <label>
                <input type="text" name="email" value="{{ old('email') }}">
            </label>
            @error('email')
            <small>{{$message}}</small>
            @enderror
        </div>

        <div>
            <label>
                <input type="password" name="password" value="{{ old('password') }}">
            </label>
            @error('password')
            <small>{{$message}}</small>
            @enderror
        </div>

        <div>
            @error('error')
            <small>{{$message}}</small>
            @enderror
        </div>

        <button>Log in</button>
    </form>

    <a href="/register">Регистрация</a>

@endsection
