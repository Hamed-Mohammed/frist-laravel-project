@extends('layouts.app')

@section('content')
    @if($errors->count() > 0)
        <div class="alert alert-danger" role="alert">
            <ul class="list-unstyled">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/edit/newspo/{{ $news->id }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Title</label>
            <input type="text"
                   value="{{ $news->title }}"
                   name="title" class="form-control" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label>Post</label>
            <textarea name="post" id="" cols="30" rows="10" class="form-control"
                      placeholder="Enter Description">{{ $news->post }}</textarea>
        </div>

        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <img src="/uploaded_images/{{ $news->image }}" width="100" height="200" alt="">
        </div>

        <div class="form-group">
            <a href="/news" class="btn btn-default">Back to List</a>
            <button class="btn btn-primary btn-lg" type="submit">Upate</button>
        </div>
    </form>
@endsection