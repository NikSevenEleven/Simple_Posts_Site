@extends('layouts.main')


@section('content')
    <form class="row g-3" action="{{route('post.update', $post->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="col-md-4">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{$post->title}}">
        </div>
        <div class="col-12">
            <label for="Content" class="form-label">Content</label>
            <textarea name="content" class="form-control" id="Content" placeholder="Content">{{$post->content}}</textarea>
        </div>
        <div class="col-12">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="Image"value="{{$post->image}}">
        </div>
        <div class="col-1">
        <button type="submit" class="btn btn-primary">update</button>
        </div>
        <div class="col-12">
            <label for="categoru" class="form-label">Category</label>
            <select class="form-select" aria-label="Default select example" id="category" name="category_id">
                @foreach($categories as $category)
                    <option
                        {{$category->id === $post->category->id ? 'selected':''}}
                        value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>
    </form>
    <div>
        <a href="{{route('post.index')}}" class="btn btn-primary mt-1">back</a>
    </div>
@endsection
