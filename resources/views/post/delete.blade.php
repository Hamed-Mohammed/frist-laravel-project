@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Are You Sure to Delete This post ?</h1>
        <form action="/delete/newspo/{{ $news->id}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                {{ $news->title }}
            </div>
            <div class="form-group">
                {{ $news->post }}
            </div>
            <div class="form-group">
                <img src="/uploaded_images/{{ $news->image }}" width="200" height="200" class="img img-thumbnail"
                     alt="">
            </div>
            <div class="form-group">
                <a href="/news" class="btn btn-default">Back to List</a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
    </div>
@endsection