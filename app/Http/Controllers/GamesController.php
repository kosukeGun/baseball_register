<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GamesController extends Controller
{
    public function index(Game $game)
    {
        return view("games/index")->with(['games' => $game->getByOwner()]);
    }

    public function show(Game $game)
    {
        return view("games/show")->with(['game' => $game]);
    }

    public function create()
    {
        $owner = \Auth::user();
        return view("games/create")->with(["owner" => $owner]);
    }
}
