<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class ApiController extends Controller
{
    public function index(Request $request) {
        $posts = Post::all();

        return response($posts, 200);
    }

    public function get_detail(Request $request) {
        $post = Post::find($request->post_id);

        if ($post == null) {
            return response(['message' => 'No such data!'], 404);
        }
        return response($post, 200);
    }
}
