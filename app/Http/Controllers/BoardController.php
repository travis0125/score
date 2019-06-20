<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score as ScoreEloquent;
use Route;

class BoardController extends Controller
{
    public function index()
    {
        return view('board', ['scores' => ScoreEloquent::with('student')->orderByTotal()->orderBySubject()->get()]);
    }

    public function name()
    {
        return Route::currentRouteAction();
    }
}