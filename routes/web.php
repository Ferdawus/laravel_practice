<?php

use App\Http\Controllers\FacadeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//  Route::get('/', function () {
    
//     return view('welcome');
    
//  });
Route::get('/',[HomeController::class,'index']);
Route::get('/user',[UserController::class,'index']);

Route::get('/model',[HomeController::class,'model']);
Route::get('/article/{id}',function($id){
    return Article::find($id);
});

// Route::get('/',[HomeController::class,'one_to_many']);
Route::get('/student/add',[StudentController::class,'add']);
Route::post('/student/add',[StudentController::class,'store'])->name('student.store');
Route::get('/student/show',[StudentController::class,'index']);

