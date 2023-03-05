<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class TagController extends Controller
{
    public function index()
    {

    }
    public function create(Request $request)
    {
        $tag = new Tag();

        $tag->name = $request->name;
        $tag->save();

        return $tag;
    }
    public function fivok()
    {
        // $tag   = Tag::first();
        // $post  = Post::first();
        // $post->tags()->attach($tag);

        // $post = Post::with('tags')->first();
        // $post->tags()->attach([2,3,4]);
        // dd($post);

        $posts = Post::with('tags')->get();

        return view('many',compact('posts'));
        
    }
}
