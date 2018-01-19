@extends('layouts.app')

@section('content')

    <div class="row">
        <a href="/news/create" class="btn btn-success">Create Post</a>
    </div>
    <br>
    <div class="row">
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            @foreach($news as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->created_at->diffForHumans() }}</td>
                    <td>
                        <a href="/edit/newsp/{{ $item->id }}" class="btn btn-primary">Edit</a>
                        <a href="/delete/newsp/{{ $item->id }}" class="btn btn-danger">delete</a>
                    </td>
                    {{--<td>--}}
                        {{--<form action="/news/delete/{{ $item->id }}" method="POST">--}}
                            {{--{{ csrf_field() }}--}}
                            {{--<button type="submit" class="btn btn-danger">Delete</button>--}}
                        {{--</form>--}}
                        {{--<form action="/news/delete/{{ $item->id }}" method="POST">--}}
                            {{--{{ csrf_field() }}--}}
                            {{--<button type="submit" class="btn btn-success">Update</button>--}}
                        {{--</form>--}}

                    {{--</td>--}}
                </tr>
            @endforeach
        </table>
    </div>
@endsection