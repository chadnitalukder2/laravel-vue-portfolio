<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getBlog(){
        $blogs = Blog::orderBy('id', 'desc')->get();

        return response()->json([
            'blogs' => $blogs
        ], 200);
    }//End Method

    public function addBlog(Request $request){
        $request->validate([
            'title' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
        $imagePath = $request->file('image')->store('blog_img', 'public');
        $imagePath = asset('storage/' . $imagePath);

        Blog::insert([
            'title' => $request->title,
            'image' =>  $imagePath,
            'created_at' => Carbon::now(),
        ]);
        return response()->json([
            'message' => 'Portfolio Data added successfully'
        ]);
    }//End Method

    public function editBlog($id){
        $blogs = Blog::where('id', $id)->first();
        return response()->json([
            'blogs' => $blogs
        ], 200);
    }//End Method

    public function updateBlog(Request $request, $id){
        $blogs = Blog::where('id', $id)->first();

        $imagePath = $request->file('image')->store('blog_img', 'public');
        $imagePath = asset('storage/' . $imagePath);

        $blogs->update([
            'title' => $request->title,
            'image' =>  $imagePath,
            'updated_at' => Carbon::now(),
        ]);
    }//End Method

    public function deleteBlog($id){
        $blog = Blog::findOrFail($id);
        $blog->delete();
    }//End Method
}
