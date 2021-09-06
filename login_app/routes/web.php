<?php

use App\Http\Controllers\ScoreController;
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
// ルーティング設定
Route::resource("home","App\Http\Controllers\ScoresController")->only([
    "index","store","edit","update","destroy"
]);

Auth::routes();

// スコア登録
Route::post('/home', [App\Http\Controllers\ScoresController::class, 'index'])->name('scores');
// マイページ画面
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// nameを指定することでcontrollerにすぐ接続できる
