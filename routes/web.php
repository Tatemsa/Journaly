<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RedisController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/dashboard', [PostController::class, 'index']
)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/set',[RedisController::class, 'set']);

Route::get('/redis', [RedisController::class, 'set']);

//Mes propres routes

// Route::get('/', [PostController::class, 'index'])->name('index');
Route::get('/createPost', [PostController::class, 'create'])->middleware(['auth', 'verified'])->name('posts.create');
Route::get('/otherPost', [PostController::class, 'otherPost'])->middleware(['auth', 'verified'])->name('posts.other');
Route::get('/post/{id}', [PostController::class, 'show'])->middleware(['auth', 'verified'])->name('post.show');

Route::post('/createPost', [PostController::class, 'store'])->middleware(['auth', 'verified'])->name('post.store');
Route::post('/post/{id}', [PostController::class, 'comment'])->middleware(['auth', 'verified'])->name('post.comment');
require __DIR__.'/auth.php';
