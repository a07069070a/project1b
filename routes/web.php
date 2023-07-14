<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

/*
This was the default route
Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', HomeController::class);

Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/examples', function () {
    $posts = Post::get();

    dd($posts);
});



/*
Route::get('/posts/{id}', function ($id) {
    return view('posts.show', [
        'id' => $id
    ]);
});

*/