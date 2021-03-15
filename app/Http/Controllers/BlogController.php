<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class BlogController extends Controller
{
    public function index() {
        $blog = Post::all();

        return view('blog.index')->with(['blogs' => $blog]);
    }
    public function store(Request $request) {
        Post::create([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return back();
    }

    public function get_post($id) {
        $post = Post::find($id);

        if($post == null) {
            return response(['message' => 'client not found'], 404);

        }
        return view('blog.detail')->with(['post' => $post]);
    }
}
