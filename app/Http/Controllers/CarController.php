<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {

    }
    public function create(Request $request)
    {
        $car = new Car();

        $car->mechanic_id = $request->mechanic_id;
        $car->model       = $request->model;
        $car->save();

        return $car;

    }
}