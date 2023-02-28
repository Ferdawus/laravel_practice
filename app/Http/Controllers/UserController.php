<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
// use App\Services\SimpleService;
use Facades\App\Services\SimpleService;


class UserController extends Controller
{
    public function __construct( protected SimpleService $sampleService)
    {
        
    }

    // public function index(){
    //     $this->sampleService->doSomething();
    //     (new SimpleService())->doSomething();
    // }


    public function index(){
        // SimpleService::doSomething();
        // return User::latest()->get();
        // return User::latest('id')->get();
        // return User::oldest()->get();
        return User::oldest('id')->get();
    }
    public function firstorcreate($name,$email,$password){
        return User::firstOrCreate(['name' => $name,'email' =>$email,'password' =>$password]);
    }
    public function show(){
        return User::all(['id','name']);
    }
    public function edit($email){
        // return User::find($id);
        // return User::findOrFail($id);
        return User::where('email',$email)->first(); 
        // return User::where('email',$email)->firstOrFail(); 
    }

    public function create(Request $request){
        $user = new User();

        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = $request->password;
        $user->save();

        return $user;
    }
}