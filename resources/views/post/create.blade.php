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
    <div class="row">
        <form action="/news/create" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Post</label>
                <textarea name="post" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group">
                <label>Category</label>
                <select name="categories" required="">
                    @foreach($categories as $catgory)
                        <option value="{{ $catgory->id }}">
                            {{ $catgory->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="/news" class="btn btn-default">Back</a>
            </div>
        </form>
    </div>
@endsection