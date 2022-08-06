<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>My BBS</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>My BBS</h1>
        <ul>
            {{-- 配列要素がからである場合を考慮する --}}
            @forelse ($posts as $index => $post)
                <li><a href="/posts/{{ $index }}">{{ $post }}</a></li>
            @empty
                <li>投稿データはありません</li>
            @endforelse
        </ul>
    </div>
</body>
</html>
