<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index(){
        $user = User::with('phone')->get();
        return $user;
    }

    public function create(Request $request){
        $phones = new Phone();

        $phones->name    = $request->name;
        $phones->user_id = $request->user_id;
        $phones->save();

        return $phones;
    }

    public function show_user($id){
        $user = User::findOrFail($id)->phone;
        return $user;
    }

    public function show_phone($id)
    {
        $phone = Phone::findOrFail($id)->user;
        return $phone;
    }

}
