@extends('master')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Insert Blog Details</h1>
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
                            <form action="{{route('crete-blog')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <label for="" class="form-label">Blog-title</label>
                                <input type="text" name="blog_title" class="form-control mb-3" placeholder="title">
                                <label for="" class="form-label">Author</label>
                                <input type="text" name="author" class="form-control mb-3" placeholder="author">
                                <label for="" class="form-label">Category-name</label>
                                <input type="text" name="category_name" class="form-control mb-3" placeholder="Category-name">
                                <label for="" class="form-label">Description</label>
                                <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="description"></textarea>
                                <label for="" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control mb-3">
                                <input type="submit" name="submit_btn" class="btn btn-danger btn-block form-control mt-4" >
                            </form>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
