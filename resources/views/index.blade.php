<x-layout>
    <x-slot name="title">
        MY BBS
    </x-slot>
    <h1>My BBS</h1>
    <ul>
        {{-- 配列要素がからである場合を考慮する --}}
        @forelse ($posts as $post)
            {{-- <li><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></li> --}}
            <li><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></li>
        @empty
            <li>投稿データはありません</li>
        @endforelse
    </ul>
</x-layout>
