@extends('layouts.app')

@section('content')

    <div class="row">
        @if($errors->count() > 0)
            <div class="alert alert-danger" role="alert">
                <ul class="list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/category/create" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group">
                <input type="submit" value="Save" class="btn btn-primary">
            </div>
        </form>
    </div>
    <br>
    <div class="row">
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Name</th>
                 <th>Image</th>

                 <th>Edit</th>

            </tr>
            @foreach($categories as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                     <td><img src="/imgecategory/{{ $item->image }}" class="img-responsive" style="height: 50px!important;" width="50"></td>

                    <td>
                        <a href="/updatecatg/catg/{{ $item->id }}" class="btn btn-success">Update</a>
                        <a href="/deletecat/catg/{{ $item->id }}" class="btn btn-danger">delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="text-center">
            {{ $categories->links() }}
        </div>
    </div>
@endsection