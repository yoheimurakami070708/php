<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\index;
use App\Models\Score;

class ScoreController extends Controller
{



    public function scores(Request $request)
    {
        $score = new Score();
        $score->title = $request->input('title');
        $score->time = $request->input('time');
        $score->page = $request->input('page');
        $score->save();
        $scores = Score::all();
        
 
        foreach ($scores as $score) {
            $titles = $score->title;
        }

        $times = 0;
        foreach ($scores as $score) {
            $times += $score->time;
        }
        $pages = 0;
        foreach ($scores as $score) {
            $pages += $score->page;
        }
        $sum = $times + $pages;

        $level = "見習い";
        if ($sum >= 12000) {
            $level = "歩く図書館";
        } elseif ($sum >= 8000) {
            $level = "本の虫";
        } elseif ($sum >= 4000) {
            $level = "読書家";
        } elseif ($sum >= 2500) {
            $level = "たまに読みます";
        } elseif ($sum < 2500) {
            $level = "見習い";
        }
// viewとの紐付け
        return view('home', compact('scores', 'times', 'pages', 'sum', 'level','titles'));
    }
}
