<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedisController;
// use App\Http\Controllers\PostController;

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

Route::get('/redis', [RedisController::class, 'index']);


// post routes
// Route::get('/posts', [PostController::class, 'index']);
Route::resource('posts', PostController::class);

// book routes
Route::resource('books', BookController::class);
