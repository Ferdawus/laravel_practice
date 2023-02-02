<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Services\SimpleService;
use Facades\App\Services\SimpleService;


class UserController extends Controller
{
    // public function __construct( protected SimpleService $sampleService)
    // {
        
    // }

    // public function index(){
    //     $this->sampleService->doSomething();
    //     (new SimpleService())->doSomething();
    // }


    public function index(){
        SimpleService::doSomething();
    }
}
