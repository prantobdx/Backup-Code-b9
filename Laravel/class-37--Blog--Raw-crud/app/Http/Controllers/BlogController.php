<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view( 'blog' );
    }

    public function createBlog( Request $request )
    {

        $blog = new Blog();
        $blog->blog_title = $request->blog_title;
        $blog->author = $request->author;
        $blog->category_name = $request->category_name;
        $blog->description = $request->description;
        $blog->image = $this->uploadImage( $request );
        $blog->save();

        return back()->with( 'message', 'Success' );
    }

    public function uploadImage( $request )
    {
        $image = $request->file( 'image' );
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $directory = 'blog/blog-image/';
        $image->move( $directory, $imageName );
        $imgUrl = $directory . $imageName;
        return $imgUrl;
    }

    public function getBlogInfo()
    {
        return view( 'blog-info', [
            'blogs' => Blog::all(),
        ] );

    }

    public function deleteBlog( $id )
    {
        $blog = Blog::find( $id );
        if ( file_exists( $blog->image ) )
        {
            unlink( $blog->image );
        }
        $blog->delete();
        return redirect()->back();
    }

    public function editBlog( $id )
    {

        return view( 'edit-blog', ['blogs' => Blog::find( $id )] );
    }

    public function updateBlog( Request $request )
    {

        $blog = Blog::find( $request->blog_id );
        $blog->blog_title = $request->blog_title;
        $blog->author = $request->author;
        $blog->category_name = $request->category_name;
        $blog->description = $request->description;
        if ( $request->file( 'image' ) )
        {
            if ( $blog->image )
            {
                unlink( $blog->image );
            }
            $blog->image = $this->uploadImage( $request );
        }
        $blog->save();
        return redirect( '/blog-info' )->with( 'message', 'success' );
    }
}