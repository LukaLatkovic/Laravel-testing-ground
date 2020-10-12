<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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
