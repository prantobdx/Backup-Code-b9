@extends('master')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Upadte Blog Details</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-3">
                        <h1 class="text-center"></h1>
                        <div class="card-body">
                            <h1 class="text-center">{{session('message')}}</h1>
                            @foreach($blogs as $blog)
                            <form action="{{route('update-blog')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <label for="" class="form-label">Blog-title</label>
                                <input type="text" name="blog_title" class="form-control mb-3" placeholder="title" value="{{ $blog->blog_title}}">
                                <label for="" class="form-label">Author</label>
                                <input type="text" name="author" class="form-control mb-3" placeholder="author" value="{{ $blog->author }}">
                                <label for="" class="form-label">Category-name</label>
                                <input type="text" name="category_name" class="form-control mb-3" placeholder="Category-name" value="{{ $blog->category_name}}">
                                <label for="" class="form-label">Description</label>
                                <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="description">value="{{ $blog->description }}</textarea>
                                <label for="" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control mb-3">
                                <img src="{{asset($blog->image)}}" alt="" style="width:100px; height:100px">
                                <input type="submit" name="submit_btn" class="btn btn-danger btn-block form-control mt-4" >
                            </form>
                            @endforeach
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
