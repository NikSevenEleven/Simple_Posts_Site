@extends('layouts.main')


@section('content')
    <div>
        @foreach($posts as $post)
            <div><a href="{{route('post.show',$post->id)}}">{{$post->id}}. {{$post->title}}</a></div>
        @endforeach
    </div>
    <div>
        <a href="{{route('post.create')}}" class="btn btn-success mt-1">add</a>
    </div>

    <div class="mt-3">
        {{$posts->links()}}
    </div>
@endsection
