<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Postモデルを使用するために追加

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // postsテーブルに保存されているデータをすべて取得
        return view('posts.index', ['posts' => $posts]); // views/posts/index.blade.php を表示する
    }
    
    public function news(Request $request)
    {
        // 投稿内容を受け取って変数に入れる
        $title = $request->input('title');
        $news = $request->input('news');

        // 変数をビューに渡す
        return view('posts.index')->with([
            "title" => $title,
            "news"  => $news,
        ]);
    }
}

