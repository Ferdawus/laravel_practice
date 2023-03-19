<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use Illuminate\Http\Request;

class MechanicController extends Controller
{
    public function index()
    {

    }
    public function create(Request $request)
    {
        $mechanic = new Mechanic();

        $mechanic->name = $request->name;
        $mechanic->save();

        return $mechanic;

    }
}