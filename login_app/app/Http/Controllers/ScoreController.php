<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('home', compact('scores'));
    }
}
