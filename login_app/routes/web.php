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
// ルーティング設定。resouceを使ってcrudを一気に。
Route::resource("home","App\Http\Controllers\ScoresController")->only([
    "index","store","edit","update","destroy"
]);

Auth::routes();

// スコア登録
Route::post('/home', [App\Http\Controllers\ScoresController::class, 'sum',])->name('sum');
// マイページ画面
Route::get('/home', [App\Http\Controllers\ScoresController::class, 'index',])->name('home');
Route::post('/fav',[\App\Http\Controllers\FavsController::class,'index'])->name('favs');

// nameを指定することでcontrollerにすぐ接続できる
