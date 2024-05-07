<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Post; // Postモデルを使用するために追加
use App\Models\Comment;//Commentモデルを使用するために追加

class CommentsController extends Controller
{
    public function comment_into(CommentRequest $request)
    {
        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->post_id = $request->post_id;
        $comment->save();
        return redirect()->back();
    }
    public function comment_delete($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->back();
    }
}