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
    <form action="/updatecatg/catgpo/{{ $categories->id }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Name Plant</label>
            <input type="text"
                   value="{{ $categories->name }}"
                   name="name" class="form-control" placeholder="Enter title">
        </div>

        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <img src="/imgecategory/{{ $categories->image }}" width="300" height="200" alt="">
        </div>

        <div class="form-group">
            <a href="/category" class="btn btn-default">Back to List</a>
            <button class="btn btn-primary btn-lg" type="submit">Update</button>
        </div>
    </form>
@endsection