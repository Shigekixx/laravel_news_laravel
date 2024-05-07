<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use App\Models\Post; // Postモデルを使用するために追加
use App\Models\Comment;//Commentモデルを使用するために追加

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // postsテーブルに保存されているデータをすべて取得
        return view('posts.index', ['posts' => $posts]); // views/posts/index.blade.php を表示する
    }
    public function message(MessageRequest $request) //posts
    {
        $post = new Post;
        $post->title = $request->title;
        $post->message = $request->message;
        $post->save();
        return redirect()->route('posts.index');
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show',['post' => $post]);
    }
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
    }
}