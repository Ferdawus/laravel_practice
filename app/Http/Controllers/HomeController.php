<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        // dd(app());
        // $name = app()->make('getName');
        // $name->setName('Naim');
        // echo $name->getName();die;

        // dd(app());
      
        return view('welcome',);
    }
    public function model(){

       
        $phone = User::find(1)->phone;
        // return $phone;
        // $user = Phone::find(1)->user;
        // $users  = User::all();
        // $phones = Phone::all();
        // one_to_many
        // $comments = Post::find(2)->comments;
        // return $comments;
        // $post = Comment::find(4)->post;
        // return $post;
        // $posts    = Post::with('comments')->get();
        // $comments = Comment::all();
        // return $comments;
        return view('model',compact('users','phones','posts','comments'));
    }
    
}