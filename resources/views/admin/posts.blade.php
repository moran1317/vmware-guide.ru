@extends('layouts.admin')

@section('content')
    <h1>Posts page</h1>
    <h4>Posts:</h4>
    <ul>
        @foreach($posts as $post)
            <li>{{ $post->name }}</li>
        @endforeach
    </ul>
@endsection
