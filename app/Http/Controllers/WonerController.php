<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class WonerController extends Controller
{
    public function index()
    {

    }
    public function create(Request $request)
    {
        $owner = new Owner();

        $owner->car_id = $request->car_id;
        $owner->name   = $request->name;
        $owner->save();

        return $owner;
    }
}