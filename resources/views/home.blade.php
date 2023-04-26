@extends('layouts.main')

@section('content')
    <div class="container">

        <h1>Домашняя страница авторизованного пользователя</h1>

        <h3>Свои гайды:</h3>
        @if(count($posts))
            <table style="border-collapse: collapse;" border="1">
                <thead>
                <th>№ п/п</th>
                <th>Name</th>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
                <th>Author</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($posts as $key=>$post)

                    <tr>
                        <td>{{$key+1}}</td>
                        <td><a href="post/{{$post->id}}">{{ $post->name }}</a></td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{ $post->author->full_name }}</td>
                        <td>
                            <form action="{{ route('post.destroy', ['post' => $post->id]) }}" method="POST">
                                @csrf

                                @method('DELETE')

                                <button type="submit" class="btn-2">Удалить</button>
                            </form>
                            <form action="{{ route('post.edit', ['post' => $post->id]) }}" method="GET">
                                @csrf

                                @method('PATCH')

                                <button type="submit" class="btn-2">Редактировать</button>
                            </form>


                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        @endif

        <h3>Добавить новый гайд</h3>

        <form class="form-style-10" action="/post" method="POST">
            @csrf

            <div class="section"><span>1</span>Name</div>
            <div class="inner-wrap">
                <label>Guide name<input type="text" name="name"/></label>
                @error('name')
                <small>{{$message}}</small>
                @enderror
            </div>

            <div class="section"><span>2</span>Title</div>
            <div class="inner-wrap">
                <label>Title <input type="text" name="title"/></label>
                @error('title')
                <small>{{$message}}</small>
                @enderror
            </div>

            <div class="section"><span>3</span>Description guide</div>
            <div class="inner-wrap">
                <label>Description <textarea name="description"></textarea></label>
                @error('description')
                <small>{{$message}}</small>
                @enderror
            </div>

            <div class="section"><span>4</span>Category</div>
            <div class="inner-wrap">
                <label>Category
                    <select name="category_id" id="category_id">
                        @foreach(\App\Models\Category::all() as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </label>
            </div>

            <div class="button-section">
                <input type="submit" name="Sign Up"/>
            </div>
        </form>
    </div>
@endsection
