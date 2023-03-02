<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $comments = Post::with('comments')->get();
        return $comments;

        
    }
    public function create(Request $request)
    {
        $post = new Post();

        $post->title = $request->title;
        $post->save();
        
        return $post;
    }
   
    public function show_comment($id)
    {
        $comments = Post::findOrFail($id)->comments;
        return $comments;
    }
}
