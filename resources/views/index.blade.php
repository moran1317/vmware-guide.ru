@extends('layouts.main')

@section('content')
    <h1>Main page</h1>
    <h4>Posts:</h4>
    <ul>
        @foreach($posts as $post)
            <li>{{ $post->name }}</li>
        @endforeach
    </ul>
@endsection
