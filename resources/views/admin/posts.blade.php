@extends('layouts.admin')

@section('content')
    <h1>Guide admin page</h1>
    <h4>My guide:</h4>
    <ul>
        @foreach($posts as $post)
            <li>{{ $post->name }}</li>
        @endforeach
    </ul>
@endsection
