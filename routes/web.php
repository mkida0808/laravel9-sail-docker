<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 古いルーティング表記法
// Route::get('/', ['App\Http\Controllers\PostController', 'index']);
// Route::get('/', [App\Http\Controllers\PostController::class, 'index']);

// トップページ
Route::get('/', [PostController::class, 'index'])
    ->name('posts.index');

// 記事詳細ページ(Implicit Binding)
// Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}', [PostController::class, 'show'])
    ->name('posts.show')
    ->where('post', '[0-9]+');

// 新規投稿ページ
Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create');

// 新規投稿ページ登録処理ルーティング
Route::post('/posts/store', [PostController::class, 'store'])
    ->name('posts.store');

// 記事編集ページ
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
    ->name('posts.edit')
    ->where('post', '[0-9]+');

// 記事更新ルーティング
Route::patch('/posts/{post}/update', [PostController::class, 'update'])
    ->name('posts.update')
    ->where('post', '[0-9]+');

// 記事削除ルーティング
Route::delete('/posts/{post}/destroy', [PostController::class, 'destroy'])
    ->name('posts.destroy')
    ->where('post', '[0-9]+');

// 記事詳細ページのコメント登録ルーティング
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])
    ->name('comments.store')
    ->where('post', '[0-9]+');

// 記事詳細ページのコメント削除ルーティング
Route::delete('/comments/{comment}/destroy', [CommentController::class, 'destroy'])
    ->name('comments.destroy')
    ->where('comment', '[0-9]+');
