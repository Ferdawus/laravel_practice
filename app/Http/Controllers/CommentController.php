<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
       $posts = Comment::with('post')->get();
       return $posts; 
    }
    public function create(Request $request)
    {
        $comment = new Comment();

        $comment->post_id = $request->post_id;
        $comment->message = $request->message;
        $comment->save();

        return $comment;
    }
    public function show_post($id)
    {
        $posts = Comment::findOrFail($id)->post;
        return $posts;
    }
}