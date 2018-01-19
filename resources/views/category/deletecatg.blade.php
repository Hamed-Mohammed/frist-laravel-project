@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Are You Sure to Delete This post ?</h1>
        <form action="/deletecat/catgpo/{{ $categories->id}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                {{ $categories->name }}
            </div>

            <div class="form-group">
                <img src="/imgecategory/{{ $categories->image }}" width="200" height="200" class="img"
                     alt="">
            </div>
            <div class="form-group">
                <a href="/category" class="btn btn-default">Back to List</a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
    </div>
@endsection