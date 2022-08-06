<x-layout>
    <x-slot name="title">
        MY BBS
    </x-slot>
    <h1>My BBS</h1>
    <ul>
        {{-- 配列要素がからである場合を考慮する --}}
        @forelse ($posts as $index => $post)
            <li><a href="{{ route('posts.show', $index) }}">{{ $post }}</a></li>
        @empty
            <li>投稿データはありません</li>
        @endforelse
    </ul>
</x-layout>
