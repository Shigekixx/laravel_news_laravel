<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

//htmlを表示するルーティングのこと
Route::get('/', [PostsController::class, 'index'])->name('posts.index');
Route::POST('/posts',[PostsController::class, 'news'])->name('posts.index');
