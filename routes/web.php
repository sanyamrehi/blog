<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index'); // List all posts
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create'); // Show create form
Route::post('/posts', [PostController::class, 'store'])->name('posts.store'); // Store new post

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show'); // Show single post
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit'); // Show edit form
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update'); // Update post
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy'); //
