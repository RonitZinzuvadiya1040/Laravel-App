<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\RegistrationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/register',[RegistrationController::class, 'index']);
Route::post('/register',[RegistrationController::class, 'register']);


// Route::get('/',[DemoController::class, 'index']);
// Route::get('/about','App\Http\Controllers\DemoController@about');
// Route::get('/courses', SingleActionController::class);

// Route::resource('photo', ResourceController::class);

// Route::get('/{name?}', function ($name = null) {
//     $demo = "<h2>WscubeTech</h2>";
//     return view('home', compact('name', 'demo'));
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/first', function () {
//     return view('first');
// });

// Route::get('/demo', function () {
//     echo "Hello World!";
// });

// Route::get('/demo/{name}/{id?}', function ($name, $id = null) {
//     $data = compact('name', 'id');
//     return view('first')->with($data);
// });

// Route::get('/test', function () {
//     return view('testdemo');
// });

// // Route::any('/test', function () { //for get or post any
// //     echo "Testing the Route";
// // });

// Route::put('users/{id}', function($id){
// });

// Route::delete('users/{id}', function($id){
// });