<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;

//htmlを表示するルーティングのこと
Route::get('/', [PostsController::class, 'index'])->name('posts.index');
Route::POST('/posts',[PostsController::class, 'message'])->name('posts.message');
Route::delete('/posts/{post}',[PostsController::class, 'delete'])->name('posts.delete');
Route::get('/posts/{post}',[PostsController::class, 'show'])->name('posts.show');
//{post}はControllerの'post'->$postの'post'と同じ
Route::POST('/comments',[CommentsController::class, 'comment_into'])->name('comments.comment_into');
Route::delete('/comments/{comment}',[CommentsController::class, 'comment_delete'])->name('comments.comment_delete');