<?php

use App\Http\Controllers\FacadeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Models\Article;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\ErrorHandler\Debug;

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

Route::get('/model',[HomeController::class,'model']);

Route::get('/user',[UserController::class,'index']);
Route::get('/article/{id}',function($id){
    return Article::find($id);
});

// Route::get('/',[HomeController::class,'one_to_many']);
Route::get('/student/add',[StudentController::class,'add']);
Route::post('/student/add',[StudentController::class,'store'])->name('student.store');
Route::get('/student/show',[StudentController::class,'index']);

//================================================ Route Parameters=========================================
// Required Parameters
// Route::get('/user/{id}', function ($id) {
//     return 'User '.$id;
// });
// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return  "Posts" .$postId ."comments" .$commentId;
// });

// Optional Parameters
// Route::get('/user/{name?}', function ($name = null) {
//     return $name;
// });
// Route::get('/user/{name?}', function ($name = 'John') {
//     return $name;
// });

// Regular Expression Constraints
// Route::get('/user/{id?}', function ($id = null) {
//     return "User".$id;
// })->where('id', '[0-9]+');


// ============================================ Components =================================================================
Route::view('/about','pages.about');
Route::view('/contact','pages.contact');
Route::view('/service','pages.service');
Route::view('/home','pages.home');
