<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::with('sport')->get();
        //dd($games);

        return view('welcome', ['games' => $games]);
    }
}
