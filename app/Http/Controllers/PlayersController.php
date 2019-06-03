<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function show($id)
    {
        $player = Player::findOrFail($id);
        return view('players.index', compact('player'));
    }
}
