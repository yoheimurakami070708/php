<?php

use Illuminate\Support\Facades\Route;


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
// ウェブサイト画面
Route::get('/', function () {
    return view('index');
});

Auth::routes();

// マイページ画面
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// スコア登録
Route::get('/home', [App\Http\Controllers\ScoreController::class, 'scores']);

