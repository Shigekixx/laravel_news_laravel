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
    <!-- 直前投稿エリア -->
    @isset($title, $news)
    <h2>{{ $title }}タイトル</h2>
    {{ $news }}
    <br><hr>
    @endisset

    <form action="/posts" method="POST">
        @csrf
        <div>
            <label for = "title" >タイトル</label>
            <input type="text" id="title" name = "title">
        </div>
        <div>
            <label for = "news" >本文</label>
            <input type="text" id="news" name="news">
        </div>
        <button type="submit" > 投稿 </button>
    </form>
    
    @foreach ($posts as $post) {{-- PostControllerのindexメソッド内の「$posts」を受け取る --}}
        <h3>タイトル：{{ $post->title }}</h3>
        <p>内容：{{ $post->message }}</p>
        <br>
    @endforeach 

</body>
</html>
