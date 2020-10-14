<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;


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

Route::get('/', function () {
    return view('welcome');
});

//Controller
Route::get('/home', [HomeController::class, 'index'])->name('home.index');

//Views

//  A way to get user view without controller
// Route::get('/user',function(){
//     return view('user');
// });

// A way to get user view with controller
Route::get('/user',[UserController::class, 'index'])->name('user.index');

//Http

Route::get('/posts',[ClientController::class,'getAllPost'])->name('posts.getallpost');
Route::get('/posts/{id}', [ClientController::class,'getPostById'])->name('posts.getpostbyid');
Route::get('/add-post', [ClientController::class,'addPost'])->name('posts.addpost');
Route::get('/update-post', [ClientController::class,'updatePost'])->name('posts.updatepost');
Route::get('/delete-post{id}', [ClientController::class,'deletePost'])->name('posts.deletepost');

//Fluent

Route::get('/fluent-string', [FluentController::class,'index'])->name('fluent.index');
