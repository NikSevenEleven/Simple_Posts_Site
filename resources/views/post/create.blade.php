@extends('layouts.main')


@section('content')
    <form class="row g-3" action="{{route('post.store')}}" method="post">
        @csrf
        <div class="col-md-4">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title"
            value="{{old('title')}}">
            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="col-12">
            <label for="Content" class="form-label">Content</label>
            <textarea name="content" class="form-control" id="Content" placeholder="Content">{{old('content')}}</textarea>
            @error('content')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="col-12">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="Image"
                   value="{{old('image')}}">
            @error('image')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="col-12">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" aria-label="Default select example" id="category" name="category_id">
                @foreach($categories as $category)
                     <option
                         {{old('category_id')==$category->id?'selected':''}}

                         value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
            @error('category_id')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
        <label for="tags" class="form-label">Tags</label>
        <select  class="form-select" multiple aria-label="multiple select example" id="tags" name="tags[]">
            @foreach($tags as $tag)
                    <option
                        value="{{$tag->id}}">{{$tag->title}}</option>
            @endforeach
        </select>
            @error('tags[]')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="col-1">
        <button type="submit" class="btn btn-primary">create</button>
        </div>
    </form>
    <div>
        <a href="{{route('post.index')}}" class="btn btn-primary mt-1">back</a>
    </div>
@endsection
