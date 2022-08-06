<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::get('/', [PostController::class, 'index']);

// 記事詳細ページ
Route::get('/posts/{id}', [PostController::class, 'show']);
