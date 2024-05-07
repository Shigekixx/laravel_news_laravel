<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1><a href="{{ route('posts.index') }}">Laravel News</a></h1> {{-- index.blade.phpへのリンク --}}
    <br>
    <h1>タイトル：{{ $post->title }}</h1>
    <h2>内容：{{ $post->message }}</h2>
    <form action="{{ route('comments.comment_into') }}" method="POST" onsubmit="return confirm('本当に投稿しますか？');" novalidate>
        @csrf
        <div>
            <label for ="comment" >コメント</label>
            <input type="text" id="comment" name="comment">
            <input type="hidden" id="post_id" name="post_id" value="{{$post->id}}" >
        </div>
        <button type="submit"> 投稿 </button>
    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @foreach ($post->comment as $comment) {{-- CommentControllerのindexメソッド内の「$comments」を受け取る --}}
        <p>コメント：{{ $comment->comment }}</p>
        <br>
        <form action="{{ route('comments.comment_delete', ($comment->id) ) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');" novalidate>
            @csrf
            @method('DELETE')
            <button type="submit"> 削除 </button>
        </form>        
    @endforeach 

</body>

</html>