<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;

class ScoreController extends Controller
{
    public function scores()
    {
     $scores = Score::all();
     return view('home',compact('scores'));
    }
}
