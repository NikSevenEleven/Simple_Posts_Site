@extends('layouts.main')
@section('content')
        <div class="col-12">
                <div>{{$post->id}}.{{$post->title}}</div>
                <div>{{$post->content}}</div>
        </div>
        <div>
            <a href="{{route('post.index')}}" class="btn btn-primary">back</a>
        </div>
        <div>
            <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary">edit</a>
        </div>
        <div>
            <form action="{{route('post.delete',$post->id)}}" method="post">
            @csrf
            @method('delete')
                <input type="submit" value="delete" class=" btn btn-danger">
            </form>
        </div>
@endsection
