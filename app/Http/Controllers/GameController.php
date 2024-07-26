<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class Gamecontroller extends Controller
{
    public function index(Game $game)
    {
        //Gameモデルを使用してmatchesテーブルからデータ取得
        $games = $game->with('team')->get();
        
        return view('games.index')->with(['games' => $games]);
    }
}
