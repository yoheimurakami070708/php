<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Score;
use Illuminate\Support\Facades\Auth;

class ScoresController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dbから値の取得。modelにあるだけではviewに表示され無いからcontrollerで取得
        $scores = Score::where("user_id", Auth::user()->id)
            ->orderBy("id", "asc")
            ->get();
        $data = ["scores" => $scores];
        // viewとの紐付け/home.blade.php
        return view("home", $data);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // requestはバリデーションの時に使える
    public function store(Request $request)
    {
        //  バリデーション
        $validator = Validator::make($request->all(), [
            "title" => "required|max:255"
        ]);
        if ($validator->fails()) {
            return redirect()
                ->route("home.index")
                ->withInput()
                ->withErrors($validator);
        }
        // 登録
        $score = new Score;
        $score->title = $request->title;
        $score->user_id = Auth::user()->id;
        $score->time = $request->time;
        $score->page = $request->page;
        $score->save();
        // 一覧画面に戻る
        return redirect()->route("home.index");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 削除ボタン
        $score = Score::find($id);
        $score->delete();
        return redirect()->route("home.index");
    }
}

//     public function scores(Request $request)
//     {
//         // インスタンス実行
//         $score = new Score();
//         $score->title = $request->input('title');
//         $score->time = $request->input('time');
//         $score->page = $request->input('page');
//         $score->save();
//         $scores = Score::all();
        
 
//         foreach ($scores as $score) {
//             $titles = $score->title;
//         }

//         $times = 0;
//         foreach ($scores as $score) {
//             $times += $score->time;
//         }
//         $pages = 0;
//         foreach ($scores as $score) {
//             $pages += $score->page;
//         }
//         $sum = $times + $pages;

//         $level = "見習い";
//         if ($sum >= 12000) {
//             $level = "歩く図書館";
//         } elseif ($sum >= 8000) {
//             $level = "本の虫";
//         } elseif ($sum >= 4000) {
//             $level = "読書家";
//         } elseif ($sum >= 2500) {
//             $level = "たまに読みます";
//         } elseif ($sum < 2500) {
//             $level = "見習い";
//         }
// // viewとの紐付け
//         return view('home', compact('scores', 'times', 'pages', 'sum', 'level','titles'));
//     }