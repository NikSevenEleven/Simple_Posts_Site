@extends('layouts.main')


@section('content')
    <form class="row g-3">
        <div class="col-md-4">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title">
        </div>
        <div class="col-12">
            <label for="Content" class="form-label">Content</label>
            <textarea class="form-control" id="Content" placeholder="Content"></textarea>
        </div>
        <div class="col-12">
            <label for="Image" class="form-label">Image</label>
            <input type="text" class="form-control" id="Image" placeholder="Image">
        </div>
{{--        <div class="col-12">--}}
{{--            <label for="Likes" class="form-label">Likes</label>--}}
{{--            <input type="number" class="form-control" id="Likes" placeholder="Likes">--}}
{{--        </div>--}}
        <div class="col-1">
        <button type="submit" class="btn btn-primary">Sumbit</button>
        </div>
    </form>
@endsection
