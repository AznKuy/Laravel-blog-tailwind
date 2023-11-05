<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// basic route
// Route::get('hello', function(){
//     return "Hello Word,kita sedang belajar Laravel!";
// });

// Route view
// Route::get('/',function(){
//     return view('hello');
// });

// Route::get('/',function(){
//     return view('home');
// });

// Route::get('profil',function(){
//     $name = "EdoAzani";
//     return view('profil',[
//         'name' => $name
//     ]);
// });

// shorthand untuk route view (Route :: view,URL,fn()=>,view ('name view'))
// Route::get('/',fn () => view('home'));
Route::view('/','home');
Route::view('/contact','contact');
Route::view('/profil','profil');
Route::view('/about','about');


Route::get('/posts', [PostController::class,'index']);
Route::get('/show/{id}', [PostController::class,'show']);
Route::get('/posts/create', [PostController::class,'create'])->middleware('auth');
Route::post('/posts/store',[PostController::class,'store'])->middleware('auth');
Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->middleware('auth');
Route::get('posts/update/{id}', [PostController::class,'update'])->middleware('auth');
Route::get('posts/delete/{id}', [PostController::class,'destroy'])->middleware('auth');

// register
Route::get('/register' ,[RegisterController::class,'register']);
Route::post('/register/action' ,[RegisterController::class,'store']);

// Login
Route::get('/login' ,[LoginController::class,'index']);
Route::post('/login/action' ,[LoginController::class,'store']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);
