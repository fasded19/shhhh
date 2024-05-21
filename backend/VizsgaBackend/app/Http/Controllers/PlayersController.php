<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Players;

class PlayersController extends Controller
{
    public function getPlayers() {
        $players = Players::with("results")->get();
        return response()->json(["data"=>"players",200]);
    }

    public function getPlayer($id) {
        $player = Players::with("results")->find($id);
        return response()->json(["data"=>"player",200]);
    }
}
