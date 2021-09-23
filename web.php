<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();
// users route
Route::resource('/users',UserController::class)->middleware('auth');
// dashboard view
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
// category route
Route::resource('/categories',CategoryController::class)->middleware('auth');
// blog route
Route::resource('/blogs',BlogController::class)->middleware('auth');
// comment route
Route::resource('/comments',CommentController::class)->middleware('auth');
// post page
Route::get('/posts', [App\Http\Controllers\PostController::class, 'posts'])->name('posts');
// post details page
Route::get('/posts/{id}', [App\Http\Controllers\PostController::class, 'posts_detail'])->name('posts_detail');



