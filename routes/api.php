<?php

use App\Http\Controllers\PhoneController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// laravel orm route
Route::get('/phone/index',[PhoneController::class,'index']);
Route::post('/phone/create',[PhoneController::class,'create']);
Route::get('/phone/show/{id}',[PhoneController::class,'show_user']);
Route::get('/user/show/{id}',[PhoneController::class,'show_phone']);


Route::get('/user',[UserController::class,'index']);
Route::post('/user/create',[UserController::class,'create']);


Route::get('/user/firstorcreate/{name}/{email}/{password}',[UserController::class,'firstorcreate']);
Route::get('/user/show',[UserController::class,'show']);
// Route::get('/user/show/{id}',[UserController::class,'edit']);
Route::get('/user/show/{email}',[UserController::class,'edit']);

Route::get('/user-select',function(){
    return User::select('id','name as username','email')->get();
});

Route::get('/users-map', function(){
    return User::all()->map(function (User $user){
        $user->map_data = 'custom data';
        return $user;
    });
});

Route::match(['get', 'post'], '/student', function (Request $request) {
    return "Method " .$request->method();
 });
 
 Route::any('/test', function (Request $request) {
     return "Method " .$request->method();
 });
Route::get('/staff/index',[StaffController::class,'index']);
Route::post('/staff/create',[StaffController::class,'create']);