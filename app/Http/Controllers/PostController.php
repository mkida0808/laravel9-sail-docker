<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // postsテーブルのデータを全て取得
        // $posts = Post::all();
        // $posts = Post::orderBy('created_at', 'desc')->get();
        $posts = Post::latest()->get();
        return view('index')->with(['posts' => $posts]);
    }

    // public function show($id)
    public function show(Post $post) // Implicit Binding
    {
        // Implicit Bindingにより$idによる抽出は省略できる
        // $post = Post::findOrFail($id);

        return view('posts.show')->with(['post' => $post]);
    }
}
