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
        $tags = Tag::with('posts')->get();
        return view('tags.index',compact('tags'));
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
        $post  = Post::first();

        // dd($post->tags->first()->pivot->created_at);    
        //  dd($post->tags->first()->pivot->status);    
        // dd($post->tags->first());    

        // $post->tags()->attach([1 =>[
        //     'status' => 'approved'
        // ]]);
       $post->tags()->detach([1 =>[
            'status' => 'approved'
        ]]);

        // $post = Post::with('tags')->first();
        // $post->tags()->attach([2,3,4]);
        // dd($post);

        
        // $posts = Post::with('tags')->first();
        // dd($posts);
        // $posts->tags()->detach([2]);
        
        $posts = Post::with('tags')->get();
        return view('many',compact('posts'));       
        
    }
}