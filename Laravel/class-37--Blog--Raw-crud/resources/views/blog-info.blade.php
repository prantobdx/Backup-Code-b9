@extends('master')

@section('content')
    <table class="table table-hover table-bordered mt-3">
        <tr>
            <th>Sl</th>
            <th>Blog-title</th>
            <th>Author</th>
            <th>Category-name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        @foreach($blogs as $blog)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$blog->blog_title}}</td>
                <td>{{$blog->author}}</td>
                <td>{{$blog->category_name}}</td>
                <td>{{$blog->description}}</td>
                <td>
                    <img src="{{asset($blog->image)}}" alt="" style="width:100px; height:100px">
                </td>
                <td>
                    <a href="{{route('edit-blog',['id'=>$blog->id])}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('delete-blog',['id'=>$blog->id])}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
